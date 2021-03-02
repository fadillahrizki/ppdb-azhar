<?php

namespace App\Http\Controllers;

use App\Models\SiswaRa;
use App\Models\Whatsapp;
use App\Mail\GlobalMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

/**
 * Class SiswaRaController
 * @package App\Http\Controllers
 */
class SiswaRaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaRas = SiswaRa::get();

        return view('siswa-ra.index', compact('siswaRas'))
            ->with('i', 0);
    }

    public function kelulusan()
    {
        $siswaRas = SiswaRa::where('siswa_status', 'lulus')->get();

        return view('siswa-ra.kelulusan', compact('siswaRas'))->with('i', 0);
    }

    public function luluskan(Request $request)
    {
        $siswaRa = SiswaRa::find($request->id);

        $siswaRa->siswa_status = $request->siswa_status;

        $message = "
Selamat, <b>$siswaRa->siswa_nama_lengkap</b> telah dinyatakan <b>LULUS</b> dan telah diterima sebagai siswa/i RA AL AZHAR MENGANTI GRESIK,
=====================
Di Mohon Segera melakukan proses daftar ulang untuk tahap terakhir dengan membawa syarat-syarat yang bisa di lihat melalui website https://ppdb.alazharmenganti.id/daftarulang



Salam,
Panitia PPDB LPI AL Azhar Menganti Gresik";
        if($request->siswa_status != 'lulus') $message = "Maaf, $siswaRa->siswa_nama_lengkap telah dinyatakan TIDAK LULUS sebagai siswa/i MA AL AZHAR MENGANTI GRESIK";

        $data = [
            'title' => $request->siswa_status == 'lulus' ? 'Selamat!' : 'Maaf!',
            'subject' => 'INFORMASI KELULUSAN PPDB LPI AL AZHAR MENGANTI GRESIK',
            'message' => $message
        ];
        
        Mail::to($siswaRa->siswa_email)->cc(['rizkyfebry09@gmail.com'])->send(new GlobalMailer($data));

        $pesan = $message;
        (new Whatsapp)->send($siswaRa->siswa_no_hp,$pesan);

        if ($siswaRa->save()) {
            return redirect()->route('siswa-ra.kelulusan')
                ->with('success', 'SiswaRa updated successfully');
        }

        return redirect()->route('siswa-ra.kelulusan')->with('failed', 'SiswaRa updated failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaRa = new SiswaRa();
        return view('siswa-ra.create', compact('siswaRa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SiswaRa::$rules,SiswaRa::$customMessage);

        // if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

        //     $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            if (SiswaRa::create($request->all())) {
                return redirect()->route('siswa-ra.index')
                    ->with('success', 'SiswaRa created successfully.');
            }
        // }

        return redirect()->route('siswa-ra.index')->with('failed', 'SiswaRa created failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswaRa = SiswaRa::find($id);

        return view('siswa-ra.show', compact('siswaRa'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswaRa = SiswaRa::find($id);

        return view('siswa-ra.edit', compact('siswaRa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SiswaRa $siswaRa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaRa $siswaRa)
    {
        request()->validate(SiswaRa::$rules,SiswaRa::$customMessage);

        // if ($request->file('siswa_photo')) {
        //     if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

        //         if (Storage::delete($siswaRa->siswa_photo)) {
        //             $res = array_merge($request->all(), ['siswa_photo' => $photo]);

        //             if ($siswaRa->update($res)) {
        //                 return redirect()->route('siswa-ra.index')
        //                     ->with('success', 'SiswaRa updated successfully');
        //             }
        //         }
        //     }
        // } else {

            if ($siswaRa->update($request->all())) {
                return redirect()->route('siswa-ra.index')
                    ->with('success', 'SiswaRa updated successfully');
            }
        // }

        return redirect()->route('siswa-ra.index')->with('failed', 'SiswaRa updated failed');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siswaRa = SiswaRa::find($id);

        Storage::delete($siswaRa->siswa_photo);

        if ($siswaRa->delete()) {
            return redirect()->route('siswa-ra.index')
                ->with('success', 'SiswaRa deleted successfully');
        }

        return redirect()->route('siswa-ra.index')->with('failed', 'SiswaRa deleted failed');
    }
}
