<?php

namespace App\Http\Controllers;

use App\Models\SiswaMa;
use Illuminate\Http\Request;
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
        $siswaMas = SiswaMa::paginate();

        return view('siswa-ma.index', compact('siswaMas'))
            ->with('i', (request()->input('page', 1) - 1) * $siswaMas->perPage());
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
        request()->validate(SiswaMa::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-ma');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaMa = SiswaMa::create($res);

            return redirect()->route('siswa-ma.index')
                ->with('success', 'SiswaMa created successfully.');
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
        request()->validate(SiswaMa::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-ma');

        if ($photo) {

            if (Storage::delete($siswaMa->siswa_photo)) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMa->update($res);

                return redirect()->route('siswa-ma.index')
                    ->with('success', 'SiswaMa updated successfully.');
            }
        } else {
            $siswaMa->update($request->except('siswa_photo'));

            return redirect()->route('siswa-ma.index')
                ->with('success', 'SiswaMa updated successfully');
        }
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

        $siswaMa->delete();

        return redirect()->route('siswa-ma.index')
            ->with('success', 'SiswaMa deleted successfully');
    }
}
