<?php

namespace App\Http\Controllers;

use App\Models\SiswaSmp;
use App\Models\Whatsapp;
use App\Mail\GlobalMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

/**
 * Class SiswaSmpController
 * @package App\Http\Controllers
 */
class SiswaSmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaSmps = SiswaSmp::get();

        return view('siswa-smp.index', compact('siswaSmps'))
            ->with('i', 0);
    }

    public function kelulusan()
    {
        $siswaSmps = SiswaSmp::where('siswa_status', 'lulus')->get();

        return view('siswa-smp.kelulusan', compact('siswaSmps'))
            ->with('i', 0);
    }

    public function luluskan(Request $request)
    {
        $SiswaSmp = SiswaSmp::find($request->id);

        $SiswaSmp->siswa_status = $request->siswa_status;

        $data = [
            'title' => $request->siswa_status == 'lulus' ? 'Selamat!' : 'Maaf!',
            'subject' => 'Pengumuman Hasil Penerimaan Peserta Didik Baru',
            'message' => $request->siswa_status == 'lulus' ? 'Anda dinyatakan lulus sebagai siswa SMP Al Azhar' : ' Anda tidak dinyatakan lulus sebagai siswa SMP Al Azhar'
        ];
        
        Mail::to($SiswaSmp->siswa_email)->send(new GlobalMailer($data));

        $pesan = "*".$data['title']."*\n".$data['message'];
        (new Whatsapp)->send($SiswaSmp->siswa_no_hp,$pesan);

        if ($SiswaSmp->save()) {
            return redirect()->route('siswa-smp.kelulusan')
                ->with('success', 'SiswaSmp updated successfully');
        }

        return redirect()->route('siswa-smp.kelulusan')->with('failed', 'SiswaSmp updated failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaSmp = new SiswaSmp();
        return view('siswa-smp.create', compact('siswaSmp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SiswaSmp::$rules,SiswaSmp::$customMessage);

        $photo = $request->file('siswa_photo')->store('siswa-smp');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaSmp = SiswaSmp::create($res);
            if ($siswaSmp) {
                return redirect()->route('siswa-smp.index')
                    ->with('success', 'SiswaSmp created successfully.');
            }

            return redirect()->route('siswa-smp.index')->with('failed', 'SiswaSmp created failed');
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
        $siswaSmp = SiswaSmp::find($id);

        return view('siswa-smp.show', compact('siswaSmp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswaSmp = SiswaSmp::find($id);

        return view('siswa-smp.edit', compact('siswaSmp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SiswaSmp $siswaSmp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaSmp $siswaSmp)
    {
        request()->validate(SiswaSmp::$rules,SiswaSmp::$customMessage);

        if ($request->file('siswa_photo')) {
            $photo = $request->file('siswa_photo')->store('siswa-smp');

            if ($photo) {

                if (Storage::delete($siswaSmp->siswa_photo)) {

                    $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                    if ($siswaSmp->update($res)) {

                        return redirect()->route('siswa-smp.index')
                            ->with('success', 'SiswaSmp updated successfully.');
                    }
                }
            }
        } else {
            if ($siswaSmp->update($request->except('siswa_photo'))) {
                return redirect()->route('siswa-smp.index')
                    ->with('success', 'SiswaSmp updated successfully');
            }
        }

        return redirect()->route('siswa-smp.index')->with('failed', 'SiswaSmp updated failed');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siswaSmp = SiswaSmp::find($id);

        Storage::delete($siswaSmp->siswa_photo);

        if ($siswaSmp->delete()) {
            return redirect()->route('siswa-smp.index')
                ->with('success', 'SiswaSmp deleted successfully');
        }

        return redirect()->route('siswa-smp.index')->with('failed', 'SiswaSmp deleted failed');
    }
}
