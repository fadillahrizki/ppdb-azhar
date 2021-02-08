<?php

namespace App\Http\Controllers;

use App\Models\SiswaMa;
use App\Models\SiswaMts;
use Illuminate\Http\Request;
use App\Models\SiswaRa;
use App\Models\SiswaSma;
use App\Models\SiswaSmk;
use App\Models\SiswaSmp;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    public function siswa_ra(Request $request)
    {
        $siswaRa = new SiswaRa();

        if ($request->isMethod("post")) {
            request()->validate(SiswaRa::$rules);

            $siswaRa = SiswaRa::create($request->all());

            return redirect()->to('form-ra')
                ->with('success', 'SiswaRa created successfully.');
        }

        return view('siswa-ra/front', compact('siswaRa'));
    }

    public function siswa_ma(Request $request)
    {
        $siswaMa = new SiswaMa();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMa::$rules);

            $SiswaMa = SiswaMa::create($request->all());

            return redirect()->to('form-ma')
                ->with('success', 'SiswaMa created successfully.');
        }

        return view('siswa-ma/front', compact('siswaMa'));
    }

    public function siswa_mts(Request $request)
    {
        $siswaMts = new SiswaMts();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMts::$rules);

            $SiswaMts = SiswaMts::create($request->all());

            return redirect()->to('form-mts')
                ->with('success', 'SiswaMts created successfully.');
        }

        return view('siswa-mts/front', compact('siswaMts'));
    }

    public function siswa_smp(Request $request)
    {
        $siswaSmp = new SiswaSmp();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmp::$rules);

            $SiswaSmp = SiswaSmp::create($request->all());

            return redirect()->to('form-smp')
                ->with('success', 'SiswaSmp created successfully.');
        }

        return view('siswa-smp/front', compact('siswaSmp'));
    }

    public function siswa_sma(Request $request)
    {
        $siswaSma = new SiswaSma();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSma::$rules);

            $SiswaSma = SiswaSma::create($request->all());

            return redirect()->to('form-sma')
                ->with('success', 'SiswaSma created successfully.');
        }

        return view('siswa-sma/front', compact('siswaSma'));
    }

    public function siswa_smk(Request $request)
    {
        $siswaSmk = new SiswaSmk();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmk::$rules);

            $SiswaSmk = SiswaSmk::create($request->all());

            return redirect()->to('form-smk')
                ->with('success', 'SiswaSmk created successfully.');
        }

        return view('siswa-smk/front', compact('siswaSmk'));
    }
}
