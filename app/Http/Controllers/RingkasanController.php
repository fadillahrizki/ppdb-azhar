<?php

namespace App\Http\Controllers;

use App\Models\SiswaMa;
use App\Models\SiswaRa;
use App\Models\SiswaMts;
use App\Models\SiswaSma;
use App\Models\SiswaSmk;
use App\Models\SiswaSmp;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use App\Mail\SmaRegistration;
use App\Mail\SmkRegistration;
use App\Mail\SmpRegistration;
use App\Notifications\Registration;
use Illuminate\Support\Facades\Mail;

class RingkasanController extends Controller
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
            request()->validate(SiswaRa::$rules,SiswaRa::$customMessage);

            if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                if ($siswa = SiswaRa::create($res)) {

                    Mail::to($siswa->siswa_email)->send(new RaRegistration($siswa));

                    return redirect()->to('form-ra')
                        ->with('success', 'Pendaftaran Berhasil');
                }
            }

            return redirect()->to('form-ra')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-ra/front', compact('siswaRa'));
    }

    public function siswa_ma(Request $request)
    {
        $siswaMa = new SiswaMa();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMa::$rules,SiswaMa::$customMessage);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMa = SiswaMa::create($res);

                Mail::to($SiswaMa->siswa_email)->send(new SmpRegistration($SiswaMa));

                if ($siswaMa) {
                    return redirect()->to('form-ma')
                        ->with('success', 'Pendaftaran Berhasil');
                }
            }

            return redirect()->to('form-ma')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-ma/front', compact('siswaMa'));
    }

    public function siswa_mts(Request $request)
    {
        $siswaMt = new SiswaMts();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMts::$rules,SiswaMts::$customMessage);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMt = SiswaMts::create($res);

                Mail::to($SiswaMt->siswa_email)->send(new MtRegistration($SiswaMt));

                if ($siswaMt) {
                    return redirect()->to('form-mts')
                        ->with('success', 'Pendaftaran Berhasil');
                }
            }

            return redirect()->to('form-mts')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-mts/front', compact('siswaMt'));
    }

    public function siswa_smp(Request $request)
    {
        $siswaSmp = new SiswaSmp();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmp::$rules,SiswaSmp::$customMessage);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSmp = SiswaSmp::create($res);

                Mail::to($SiswaSmp->siswa_email)->send(new SmpRegistration($SiswaSmp));

                if ($SiswaSmp) {
                    return redirect()->to('form-smp')
                        ->with('success', 'Pendaftaran Berhasil');
                }
            }

            return redirect()->to('form-smp')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-smp/front', compact('siswaSmp'));
    }

    public function siswa_sma(Request $request)
    {
        $siswaSma = new SiswaSma();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSma::$rules,SiswaSma::$customMessage);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSma = SiswaSma::create($res);

                Mail::to($SiswaSma->siswa_email)->send(new SmaRegistration($SiswaSma));

                if ($SiswaSma) {
                    return redirect()->to('form-sma')
                        ->with('success', 'Pendaftaran Berhasil');
                }
            }

            return redirect()->to('form-sma')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-sma/front', compact('siswaSma'));
    }

    public function siswa_smk(SiswaSmk $siswa)
    {
        return view('ringkasan.smk', compact('siswa'));
    }
}
