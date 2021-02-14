<?php

namespace App\Http\Controllers;

use App\Models\SiswaSmk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class SiswaSmkController
 * @package App\Http\Controllers
 */
class SiswaSmkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaSmks = SiswaSmk::get();

        return view('siswa-smk.index', compact('siswaSmks'))
            ->with('i', 0);
    }
    public function kelulusan()
    {
        $siswaSmks = SiswaSmk::where('siswa_status', 'lulus')->get();

        return view('siswa-smk.kelulusan', compact('siswaSmks'))
            ->with('i', 0);
    }

    public function luluskan(Request $request)
    {
        $SiswaSmk = SiswaSmk::find($request->id);

        $SiswaSmk->siswa_status = $request->siswa_status;

        if ($SiswaSmk->save()) {
            return redirect()->route('siswa-smk.kelulusan')
                ->with('success', 'SiswaSmk updated successfully');
        }

        return redirect()->route('siswa-smk.kelulusan')->with('failed', 'SiswaSmk updated failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaSmk = new SiswaSmk();
        return view('siswa-smk.create', compact('siswaSmk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SiswaSmk::$rules);


        $photo = $request->file('siswa_photo')->store('siswa-smk');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaSmk = SiswaSmk::create($res);

            if ($siswaSmk) {
                return redirect()->route('siswa-smk.index')
                    ->with('success', 'SiswaSmk created successfully.');
            }

            return redirect()->route('siswa-smk.index')->with('failed', 'SiswaSmk created failed');
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
        $siswaSmk = SiswaSmk::find($id);

        return view('siswa-smk.show', compact('siswaSmk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswaSmk = SiswaSmk::find($id);

        return view('siswa-smk.edit', compact('siswaSmk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SiswaSmk $siswaSmk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaSmk $siswaSmk)
    {
        request()->validate(SiswaSmk::$rules);

        if ($request->file('siswa_photo')) {
            $photo = $request->file('siswa_photo')->store('siswa-smk');

            if ($photo) {

                if (Storage::delete($siswaSmk->siswa_photo)) {

                    $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                    if ($siswaSmk->update($res)) {
                        return redirect()->route('siswa-smk.index')
                            ->with('success', 'SiswaSmk updated successfully.');
                    }
                }
            }
        } else {
            if ($siswaSmk->update($request->except('siswa_photo'))) {
                return redirect()->route('siswa-smk.index')
                    ->with('success', 'SiswaSmk updated successfully');
            }
        }

        return redirect()->route('siswa-smk.index')->with('failed', 'SiswaSmk updated failed');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siswaSmk = SiswaSmk::find($id);

        Storage::delete($siswaSmk->siswa_photo);

        if ($siswaSmk->delete()) {
            return redirect()->route('siswa-smk.index')
                ->with('success', 'SiswaSmk deleted successfully');
        }

        return redirect()->route('siswa-smk.index')->with('failed', 'SiswaSmk deleted failed');
    }
}
