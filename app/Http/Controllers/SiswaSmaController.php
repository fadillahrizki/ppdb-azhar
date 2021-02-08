<?php

namespace App\Http\Controllers;

use App\Models\SiswaSma;
use Illuminate\Http\Request;
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
        $siswaSmas = SiswaSma::paginate();

        return view('siswa-sma.index', compact('siswaSmas'))
            ->with('i', (request()->input('page', 1) - 1) * $siswaSmas->perPage());
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
        request()->validate(SiswaSma::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-sma');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaSma = SiswaSma::create($res);

            return redirect()->route('siswa-sma.index')
                ->with('success', 'SiswaSma created successfully.');
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
        request()->validate(SiswaSma::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-sma');

        if ($photo) {

            if (Storage::delete($siswaSma->siswa_photo)) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaSma->update($res);

                return redirect()->route('siswa-sma.index')
                    ->with('success', 'SiswaSma updated successfully.');
            }
        } else {
            $siswaSma->update($request->except('siswa_photo'));

            return redirect()->route('siswa-sma.index')
                ->with('success', 'SiswaSma updated successfully');
        }
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

        $siswaSma->delete();

        return redirect()->route('siswa-sma.index')
            ->with('success', 'SiswaSma deleted successfully');
    }
}
