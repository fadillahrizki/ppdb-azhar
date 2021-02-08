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
        $siswaRas = SiswaRa::paginate();

        return view('siswa-ra.index', compact('siswaRas'))
            ->with('i', (request()->input('page', 1) - 1) * $siswaRas->perPage());
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

        $photo = $request->file('siswa_photo')->store('siswa-ra');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaRa = SiswaRa::create($res);

            return redirect()->route('siswa-ra.index')
                ->with('success', 'SiswaRa created successfully.');
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

        $photo = $request->file('siswa_photo')->store('siswa-ra');

        if ($photo) {

            if (Storage::delete($siswaRa->siswa_photo)) {
                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaRa->update($res);

                return redirect()->route('siswa-ra.index')
                    ->with('success', 'SiswaRa updated successfully');
            }
        } else {
            $siswaRa->update($request->except('siswa_photo'));


            return redirect()->route('siswa-ra.index')
                ->with('success', 'SiswaRa updated successfully');
        }
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

        $siswaRa->delete();

        return redirect()->route('siswa-ra.index')
            ->with('success', 'SiswaRa deleted successfully');
    }
}
