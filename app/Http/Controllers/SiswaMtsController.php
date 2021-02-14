<?php

namespace App\Http\Controllers;

use App\Models\SiswaMts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class SiswaMtsController
 * @package App\Http\Controllers
 */
class SiswaMtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaMts = SiswaMts::get();

        return view('siswa-mts.index', compact('siswaMts'))
            ->with('i', 0);
    }

    public function kelulusan()
    {
        $siswaMts = SiswaMts::where('siswa_status', 'lulus')->get();

        return view('siswa-mts.kelulusan', compact('siswaMts'))
            ->with('i', 0);
    }

    public function luluskan(Request $request)
    {
        $siswaMts = SiswaMts::find($request->id);

        $siswaMts->siswa_status = $request->siswa_status;

        if ($siswaMts->save()) {
            return redirect()->route('siswa-mts.kelulusan')
                ->with('success', 'SiswaMts updated successfully');
        }

        return redirect()->route('siswa-mts.kelulusan')->with('failed', 'SiswaMts updated failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaMt = new SiswaMts();
        return view('siswa-mts.create', compact('siswaMt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SiswaMts::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-mts');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaMts = SiswaMts::create($res);

            if ($siswaMts) {
                return redirect()->route('siswa-mts.index')
                    ->with('success', 'SiswaMts created successfully.');
            }
        }

        return redirect()->route('siswa-mts.index')->with('failed', 'SiswaMts created failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswaMts = SiswaMts::find($id);

        return view('siswa-mts.show', compact('siswaMts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswaMt = SiswaMts::find($id);

        return view('siswa-mts.edit', compact('siswaMt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SiswaMts $siswaMts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaMts $siswaMt)
    {
        request()->validate(SiswaMts::$rules);

        if ($request->file('siswa_photo')) {
            $photo = $request->file('siswa_photo')->store('siswa-mts');

            if ($photo) {

                if (Storage::delete($siswaMt->siswa_photo)) {

                    $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                    if ($siswaMt->update($res)) {
                        return redirect()->route('siswa-mts.index')
                            ->with('success', 'SiswaMts updated successfully');
                    }
                }
            }
        } else {
            if ($siswaMt->update($request->except('siswa_photo'))) {
                return redirect()->route('siswa-mts.index')
                    ->with('success', 'SiswaMts updated successfully');
            }
        }

        return redirect()->route('siswa-mts.index')->with('failed', 'SiswaMts updated failed');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siswaMts = SiswaMts::find($id);

        Storage::delete($siswaMts->siswa_photo);

        if ($siswaMts->delete()) {
            return redirect()->route('siswa-mts.index')
                ->with('success', 'SiswaMts deleted successfully');
        }

        return redirect()->route('siswa-mts.index')->with('failed', 'SiswaMts deleted failed');
    }
}
