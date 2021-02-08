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
        $siswaSmks = SiswaSmk::paginate();

        return view('siswa-smk.index', compact('siswaSmks'))
            ->with('i', (request()->input('page', 1) - 1) * $siswaSmks->perPage());
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

            return redirect()->route('siswa-smk.index')
                ->with('success', 'SiswaSmk created successfully.');
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

        $photo = $request->file('siswa_photo')->store('siswa-smk');

        if ($photo) {

            if (Storage::delete($siswaSmk->siswa_photo)) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaSmk->update($res);

                return redirect()->route('siswa-smk.index')
                    ->with('success', 'SiswaSmk updated successfully.');
            }
        } else {
            $siswaSmk->update($request->except('siswa_photo'));

            return redirect()->route('siswa-smk.index')
                ->with('success', 'SiswaSmk updated successfully');
        }
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

        $siswaSmk->delete();

        return redirect()->route('siswa-smk.index')
            ->with('success', 'SiswaSmk deleted successfully');
    }
}
