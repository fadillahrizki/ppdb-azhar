<?php

namespace App\Http\Controllers;

use App\Models\SiswaRa;
use Illuminate\Http\Request;
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
        request()->validate(SiswaRa::$rules);

        if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            if (SiswaRa::create($res)) {
                return redirect()->route('siswa-ra.index')
                    ->with('success', 'SiswaRa created successfully.');
            }
        }

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
        request()->validate(SiswaRa::$rules);

        if ($request->file('siswa_photo')) {
            if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

                if (Storage::delete($siswaRa->siswa_photo)) {
                    $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                    if ($siswaRa->update($res)) {
                        return redirect()->route('siswa-ra.index')
                            ->with('success', 'SiswaRa updated successfully');
                    }
                }
            }
        } else {

            if ($siswaRa->update($request->except('siswa_photo'))) {
                return redirect()->route('siswa-ra.index')
                    ->with('success', 'SiswaRa updated successfully');
            }
        }

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
