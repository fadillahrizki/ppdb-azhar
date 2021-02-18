<?php

namespace App\Http\Controllers;

use App\Models\SiswaSma;
use App\Models\Whatsapp;
use App\Mail\GlobalMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

/**
 * Class SiswaSmaController
 * @package App\Http\Controllers
 */
class SiswaSmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaSmas = SiswaSma::get();

        return view('siswa-sma.index', compact('siswaSmas'))
            ->with('i', 0);
    }

    public function kelulusan()
    {
        $siswaSmas = SiswaSma::where('siswa_status', 'lulus')->get();

        return view('siswa-sma.kelulusan', compact('siswaSmas'))
            ->with('i', 0);
    }

    public function luluskan(Request $request)
    {
        $SiswaSma = SiswaSma::find($request->id);

        $SiswaSma->siswa_status = $request->siswa_status;

        $data = [
            'title' => $request->siswa_status == 'lulus' ? 'Selamat!' : 'Maaf!',
            'subject' => 'Pengumuman Hasil Penerimaan Peserta Didik Baru',
            'message' => $request->siswa_status == 'lulus' ? 'Anda dinyatakan lulus sebagai siswa SMA Al Azhar' : ' Anda tidak dinyatakan lulus sebagai siswa SMA Al Azhar'
        ];
        
        Mail::to($SiswaSma->siswa_email)->send(new GlobalMailer($data));

        $pesan = "*".$data['title']."*\n".$data['message'];
        (new Whatsapp)->send($SiswaSma->siswa_no_hp,$pesan);

        if ($SiswaSma->save()) {
            return redirect()->route('siswa-sma.kelulusan')
                ->with('success', 'SiswaSma updated successfully');
        }

        return redirect()->route('siswa-sma.kelulusan')->with('failed', 'SiswaSma updated failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaSma = new SiswaSma();
        return view('siswa-sma.create', compact('siswaSma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SiswaSma::$rules,SiswaSma::$customMessage);

        $photo = $request->file('siswa_photo')->store('siswa-sma');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaSma = SiswaSma::create($res);

            if ($siswaSma) {
                return redirect()->route('siswa-sma.index')
                    ->with('success', 'SiswaSma created successfully.');
            }

            return redirect()->route('siswa-sma.index')->with('failed', 'SiswaSma created failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswaSma = SiswaSma::find($id);

        return view('siswa-sma.show', compact('siswaSma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswaSma = SiswaSma::find($id);

        return view('siswa-sma.edit', compact('siswaSma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SiswaSma $siswaSma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaSma $siswaSma)
    {
        request()->validate(SiswaSma::$rules,SiswaSma::$customMessage);
        if ($request->file('siswa_photo')) {
            $photo = $request->file('siswa_photo')->store('siswa-sma');

            if ($photo) {

                if (Storage::delete($siswaSma->siswa_photo)) {

                    $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                    if ($siswaSma->update($res)) {
                        return redirect()->route('siswa-sma.index')
                            ->with('success', 'SiswaSma updated successfully.');
                    }
                }
            }
        } else {
            if ($siswaSma->update($request->except('siswa_photo'))) {
                return redirect()->route('siswa-sma.index')
                    ->with('success', 'SiswaSma updated successfully');
            }
        }

        return redirect()->route('siswa-sma.index')->with('failed', 'SiswaSma updated failed');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siswaSma = SiswaSma::find($id);

        Storage::delete($siswaSma->siswa_photo);

        if ($siswaSma->delete()) {
            return redirect()->route('siswa-sma.index')
                ->with('success', 'SiswaSma deleted successfully');
        }

        return redirect()->route('siswa-sma.index')->with('failed', 'SiswaSma deleted failed');
    }
}
