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
        $siswaRa = SiswaRa::orderBy('id', 'desc')->take(10)->get();
        $siswaMa = SiswaMa::orderBy('id', 'desc')->take(10)->get();
        $siswaSmp = SiswaSmp::orderBy('id', 'desc')->take(10)->get();
        $siswaMts = SiswaMts::orderBy('id', 'desc')->take(10)->get();
        $siswaSma = SiswaSma::orderBy('id', 'desc')->take(10)->get();
        $siswaSmk = SiswaSmk::orderBy('id', 'desc')->take(10)->get();

        $countSiswaRa = SiswaRa::get()->count();
        $countSiswaMa = SiswaMa::get()->count();
        $countSiswaSmp = SiswaSmp::get()->count();
        $countSiswaMts = SiswaMts::get()->count();
        $countSiswaSma = SiswaSma::get()->count();
        $countSiswaSmk = SiswaSmk::get()->count();

        return view('home', compact('siswaRa', 'siswaMa', 'siswaMts', 'siswaSmp', 'siswaSma', 'siswaSmk', 'countSiswaRa', 'countSiswaMa', 'countSiswaMts', 'countSiswaSmp', 'countSiswaSma', 'countSiswaSmk'));
    }

    public function siswa_ra(Request $request)
    {
        $siswaRa = new SiswaRa();

        if ($request->isMethod("post")) {
            request()->validate(SiswaRa::$rules);

            if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                if (SiswaRa::create($res)) {
                    return redirect()->to('form-ra')
                        ->with('success', 'SiswaRa created successfully.');
                }
            }

            return redirect()->to('form-ra')->with('failed', 'SiswaRa created failed');
        }

        return view('siswa-ra/front', compact('siswaRa'));
    }

    public function siswa_ma(Request $request)
    {
        $siswaMa = new SiswaMa();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMa::$rules);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMa = SiswaMa::create($res);

                if ($siswaMa) {
                    return redirect()->to('form-ma')
                        ->with('success', 'SiswaMa created successfully.');
                }
            }

            return redirect()->to('form-ma')->with('failed', 'SiswaMa created failed');
        }

        return view('siswa-ma/front', compact('siswaMa'));
    }

    public function siswa_mts(Request $request)
    {
        $siswaMt = new SiswaMts();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMts::$rules);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMt = SiswaMts::create($res);

                if ($siswaMt) {
                    return redirect()->to('form-mts')
                        ->with('success', 'SiswaMts created successfully.');
                }
            }

            return redirect()->to('form-mts')->with('failed', 'SiswaMts created failed');
        }

        return view('siswa-mts/front', compact('siswaMt'));
    }

    public function siswa_smp(Request $request)
    {
        $siswaSmp = new SiswaSmp();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmp::$rules);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSmp = SiswaSmp::create($res);

                if ($SiswaSmp) {
                    return redirect()->to('form-smp')
                        ->with('success', 'SiswaSmp created successfully.');
                }
            }

            return redirect()->to('form-smp')->with('failed', 'SiswaSmp created failed');
        }

        return view('siswa-smp/front', compact('siswaSmp'));
    }

    public function siswa_sma(Request $request)
    {
        $siswaSma = new SiswaSma();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSma::$rules);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSma = SiswaSma::create($res);

                if ($SiswaSma) {
                    return redirect()->to('form-sma')
                        ->with('success', 'SiswaSma created successfully.');
                }
            }

            return redirect()->to('form-sma')->with('failed', 'SiswaSma created failed');
        }

        return view('siswa-sma/front', compact('siswaSma'));
    }

    public function siswa_smk(Request $request)
    {
        $siswaSmk = new SiswaSmk();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmk::$rules);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSmk = SiswaSmk::create($res);

                if ($SiswaSmk) {
                    return redirect()->to('form-smk')
                        ->with('success', 'SiswaSmk created successfully.');
                }
            }

            return redirect()->to('form-smk')->with('failed', 'SiswaSmk created failed');
        }

        return view('siswa-smk/front', compact('siswaSmk'));
    }
}
