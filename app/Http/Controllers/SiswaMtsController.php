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
        $siswaMts = SiswaMts::paginate();

        return view('siswa-mts.index', compact('siswaMts'))
            ->with('i', (request()->input('page', 1) - 1) * $siswaMts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaMts = new SiswaMts();
        return view('siswa-mts.create', compact('siswaMts'));
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

            return redirect()->route('siswa-mts.index')
                ->with('success', 'SiswaMts created successfully.');
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
        $siswaMts = SiswaMts::find($id);

        return view('siswa-mts.edit', compact('siswaMts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SiswaMts $siswaMts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaMts $siswaMts)
    {
        request()->validate(SiswaMts::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-mts');

        if ($photo) {

            if (Storage::delete($siswaMts->siswa_photo)) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMts->update($res);

                return redirect()->route('siswa-mts.index')
                    ->with('success', 'SiswaMts updated successfully');
            }
        } else {
            $siswaMts->update($request->except('siswa_photo'));

            return redirect()->route('siswa-mts.index')
                ->with('success', 'SiswaMts updated successfully');
        }
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

        $siswaMts->delete();

        return redirect()->route('siswa-mts.index')
            ->with('success', 'SiswaMts deleted successfully');
    }
}
