<?php

namespace App\Http\Controllers;

use App\Models\SiswaSmp;
use Illuminate\Http\Request;
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
        $siswaSmps = SiswaSmp::paginate();

        return view('siswa-smp.index', compact('siswaSmps'))
            ->with('i', (request()->input('page', 1) - 1) * $siswaSmps->perPage());
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
        request()->validate(SiswaSmp::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-smp');

        if ($photo) {

            $res = array_merge($request->all(), ['siswa_photo' => $photo]);

            $siswaSmp = SiswaSmp::create($res);

            return redirect()->route('siswa-smp.index')
                ->with('success', 'SiswaSmp created successfully.');
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
        request()->validate(SiswaSmp::$rules);

        $photo = $request->file('siswa_photo')->store('siswa-smp');

        if ($photo) {

            if (Storage::delete($siswaSmp->siswa_photo)) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaSmp->update($res);

                return redirect()->route('siswa-smp.index')
                    ->with('success', 'SiswaSmp updated successfully.');
            }
        } else {
            $siswaSmp->update($request->except('siswa_photo'));

            return redirect()->route('siswa-smp.index')
                ->with('success', 'SiswaSmp updated successfully');
        }
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

        $siswaSmp->delete();

        return redirect()->route('siswa-smp.index')
            ->with('success', 'SiswaSmp deleted successfully');
    }
}
