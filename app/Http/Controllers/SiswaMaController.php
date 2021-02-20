<?php

namespace App\Http\Controllers;

use App\Models\SiswaMa;
use App\Models\Whatsapp;
use App\Mail\GlobalMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

/**
 * Class SiswaMaController
 * @package App\Http\Controllers
 */
class SiswaMaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaMas = SiswaMa::get();

        return view('siswa-ma.index', compact('siswaMas'))
            ->with('i', 0);
    }

    public function kelulusan()
    {
        $siswaMas = SiswaMa::where('siswa_status', 'lulus')->get();

        return view('siswa-ma.kelulusan', compact('siswaMas'))
            ->with('i', 0);
    }

    public function luluskan(Request $request)
    {
        $SiswaMa = SiswaMa::find($request->id);

        $SiswaMa->siswa_status = $request->siswa_status;

        $message = "
Selamat, <b>$SiswaMa->siswa_nama_lengkap</b> telah dinyatakan <b>LULUS</b> dan telah diterima sebagai siswa/i MA AL AZHAR MENGANTI GRESIK,
=====================
Di Mohon Segera melakukan proses daftar ulang untuk tahap terakhir dengan membawa syarat-syarat yang bisa di lihat melalui website https://ppdb.alazharmenganti.id/daftarulang



Salam,
Panitia PPDB LPI AL Azhar Menganti Gresik";
        if($request->siswa_status != 'lulus') $message = "Maaf, $SiswaMa->siswa_nama_lengkap telah dinyatakan TIDAK LULUS sebagai siswa/i MA AL AZHAR MENGANTI GRESIK";

        $data = [
            'title' => $request->siswa_status == 'lulus' ? 'Selamat!' : 'Maaf!',
            'subject' => 'INFORMASI KELULUSAN PPDB LPI AL AZHAR MENGANTI GRESIK',
            'message' => $message
        ];
        
        Mail::to($SiswaMa->siswa_email)->send(new GlobalMailer($data));

        $pesan = $message;
        (new Whatsapp)->send($SiswaMa->siswa_no_hp,$pesan);

        if ($SiswaMa->save()) {
            return redirect()->route('siswa-ma.kelulusan')
                ->with('success', 'SiswaMa updated successfully');
        }

        return redirect()->route('siswa-ma.kelulusan')->with('failed', 'SiswaMa updated failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaMa = new SiswaMa();
        return view('siswa-ma.create', compact('siswaMa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SiswaMa::$rules,SiswaMa::$customMessage);

        $photo = $request->file('siswa_photo')->store('siswa-ma');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaMa = SiswaMa::create($res);

            if ($siswaMa) {
                return redirect()->route('siswa-ma.index')
                    ->with('success', 'SiswaMa created successfully.');
            }
        }

        return redirect()->route('siswa-ma.index')->with('failed', 'SiswaMa created failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswaMa = SiswaMa::find($id);

        return view('siswa-ma.show', compact('siswaMa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswaMa = SiswaMa::find($id);

        return view('siswa-ma.edit', compact('siswaMa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SiswaMa $siswaMa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaMa $siswaMa)
    {
        request()->validate(SiswaMa::$rules,SiswaMa::$customMessage);

        if ($request->file('siswa_photo')) {
            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                if (Storage::delete($siswaMa->siswa_photo)) {

                    $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                    if ($siswaMa->update($res)) {
                        return redirect()->route('siswa-ma.index')
                            ->with('success', 'SiswaMa updated successfully.');
                    }
                }
            }
        } else {

            if ($siswaMa->update($request->except('siswa_photo'))) {
                return redirect()->route('siswa-ma.index')
                    ->with('success', 'SiswaMa updated successfully');
            }
        }

        return redirect()->route('siswa-ma.index')->with('failed', 'SiswaMa updated failed');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siswaMa = SiswaMa::find($id);

        Storage::delete($siswaMa->siswa_photo);

        if ($siswaMa->delete()) {
            return redirect()->route('siswa-ma.index')
                ->with('success', 'SiswaMa deleted successfully');
        }

        return redirect()->route('siswa-ma.index')->with('failed', 'SiswaMa deleted failed');
    }
}
