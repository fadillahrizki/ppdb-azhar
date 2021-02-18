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
            request()->validate(SiswaRa::$rules,SiswaRa::$customMessage);

            if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                if ($siswa = SiswaRa::create($res)) {

                    Mail::to($siswa->siswa_email)->send(new RaRegistration($siswa));
                    $pesan = "
                        *Selamat! Pendaftaran Peserta Didik Baru Jenjang RA Berhasil*
                        \nBerikut adalah informasi username dan password yang akan digunakan untuk ujian seleksi masuk.
                        \n*Username :* ".$request->siswa_NIK."
                        \n*Password :* ".$request->siswa_NIK;
                    (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                    return redirect()->to('thankyou',['message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil','jenjang'=>'RA']);
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
                $pesan = "
                        *Selamat! Pendaftaran Peserta Didik Baru Jenjang MA Berhasil*
                        \nBerikut adalah informasi username dan password yang akan digunakan untuk ujian seleksi masuk.
                        \n*Username :* ".$request->siswa_NIK."
                        \n*Password :* ".$request->siswa_NIK;
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($siswaMa) {
                    return redirect()->to('thankyou',['message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil','jenjang'=>'MA']);
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
                $pesan = "
                        *Selamat! Pendaftaran Peserta Didik Baru Jenjang MTS Berhasil*
                        \nBerikut adalah informasi username dan password yang akan digunakan untuk ujian seleksi masuk.
                        \n*Username :* ".$request->siswa_NIK."
                        \n*Password :* ".$request->siswa_NIK;
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($siswaMt) {
                    return redirect()->to('thankyou',['message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil','jenjang'=>'MTS']);
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
                $pesan = "
                        *Selamat! Pendaftaran Peserta Didik Baru Jenjang SMP Berhasil*
                        \nBerikut adalah informasi username dan password yang akan digunakan untuk ujian seleksi masuk.
                        \n*Username :* ".$request->siswa_NIK."
                        \n*Password :* ".$request->siswa_NIK;
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($SiswaSmp) {
                    return redirect()->to('thankyou',['message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil','jenjang'=>'SMP']);
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
                $pesan = "
                        *Selamat! Pendaftaran Peserta Didik Baru Jenjang SMA Berhasil*
                        \nBerikut adalah informasi username dan password yang akan digunakan untuk ujian seleksi masuk.
                        \n*Username :* ".$request->siswa_NIK."
                        \n*Password :* ".$request->siswa_NIK;
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($SiswaSma) {
                    return redirect()->to('thankyou',['message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil','jenjang'=>'SMA']);
                }
            }

            return redirect()->to('form-sma')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-sma/front', compact('siswaSma'));
    }

    public function siswa_smk(Request $request)
    {
        $siswaSmk = new SiswaSmk();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmk::$rules,SiswaSmk::$customMessage);

            $photo = $request->file('siswa_photo')->store('siswa-ma');

            if ($photo) {

                $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSmk = SiswaSmk::create($res);

                Mail::to($SiswaSmk->siswa_email)->send(new SmkRegistration($SiswaSmk));
                $pesan = "
                        *Selamat! Pendaftaran Peserta Didik Baru Jenjang SMK Berhasil*
                        \nBerikut adalah informasi username dan password yang akan digunakan untuk ujian seleksi masuk.
                        \n*Username :* ".$request->siswa_NIK."
                        \n*Password :* ".$request->siswa_NIK;
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($SiswaSmk) {
                    return redirect()->to('thankyou',['message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil','jenjang'=>'SMK']);
                }
            }

            return redirect()->to('form-smk')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-smk/front', compact('siswaSmk'));
    }

    function thankyou()
    {
        return view('thankyou');
    }
}
