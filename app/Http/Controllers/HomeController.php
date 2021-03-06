<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\SiswaMa;
use App\Models\SiswaRa;
use App\Models\SiswaMts;
use App\Models\SiswaSma;
use App\Models\SiswaSmk;
use App\Models\SiswaSmp;
use App\Models\Whatsapp;
use App\Mail\MaRegistration;
use App\Mail\MtRegistration;
use App\Mail\RaRegistration;
use Illuminate\Http\Request;
use App\Mail\SmaRegistration;
use App\Mail\SmkRegistration;
use App\Mail\SmpRegistration;
use LaravelQRCode\Facades\QRCode;
use App\Notifications\Registration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->link_ma = env('WA_URL_MA','https://google.com');
        $this->link_mts = env('WA_URL_MTS','https://google.com');
        $this->link_ra = env('WA_URL_RA','https://google.com');
        $this->link_sma = env('WA_URL_SMA','https://google.com');
        $this->link_smk = env('WA_URL_SMK','https://google.com');
        $this->link_smp = env('WA_URL_SMP','https://google.com');
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

            // if ($photo = $request->file('siswa_photo')->store('siswa-ra')) {

            //     $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                if ($siswa = SiswaRa::create($request->all())) {

                    Mail::to($siswa->siswa_email)->cc(['rizkyfebry09@gmail.com'])->send(new RaRegistration($siswa));
                    $pesan = "
*Selamat! Pendaftaran Peserta Didik Baru LPI AL Azhar Menganti Gresik Sudah Berhasil*
=============================
Berikut adalah informasi data anda dan akses login untuk mengikuti seleksi ujian online tes masuk.
=============================
*No. Pendaftaran :* ".$siswa->nomor."
*Nama Lengkap :* ".$siswa->siswa_nama_lengkap."
*Jenjang :* ".$siswa->jenjang."
=============================
*Username :* ".$siswa->nomor."
*Password :* ".$siswa->nomor."
Untuk informasi lebih lanjut silahkan klik link group whatsapp dibawah ini
".$this->link_ra."
atau bisa mengunjungi website https://ppdb.alazhargresik.id";
                    (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                    return redirect()->route('thankyou',[
                        'message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil',
                        'jenjang'=>'RA',
                        'id' => $siswa->id
                    ]);
                }
            // }

            return redirect()->to('form-ra')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-ra/front', compact('siswaRa'));
    }

    public function siswa_ma(Request $request)
    {
        $siswaMa = new SiswaMa();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMa::$rules,SiswaMa::$customMessage);

            // $photo = $request->file('siswa_photo')->store('siswa-ma');

            // if ($photo) {

                // $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMa = SiswaMa::create($request->all());

                Mail::to($siswaMa->siswa_email)->cc(['rizkyfebry09@gmail.com'])->send(new MaRegistration($siswaMa));
                $pesan = "
*Selamat! Pendaftaran Peserta Didik Baru LPI AL Azhar Menganti Gresik Sudah Berhasil*
=============================
Berikut adalah informasi data anda dan akses login untuk mengikuti seleksi ujian online tes masuk.
=============================
*No. Pendaftaran :* ".$siswaMa->nomor."
*Nama Lengkap :* ".$siswaMa->siswa_nama_lengkap."
*Jenjang :* MA
=============================
*Username :* ".$siswaMa->nomor."
*Password :* ".$siswaMa->nomor."
Untuk informasi lebih lanjut silahkan klik link group whatsapp dibawah ini
".$this->link_ma."
atau bisa mengunjungi website https://ppdb.alazhargresik.id";
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($siswaMa) {
                    return redirect()->route('thankyou',[
                        'message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil',
                        'jenjang'=>'MA',
                        'id' => $siswaMa->id
                    ]);
                }
            // }

            return redirect()->to('form-ma')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-ma/front', compact('siswaMa'));
    }

    public function siswa_mts(Request $request)
    {
        $siswaMt = new SiswaMts();

        if ($request->isMethod("post")) {
            request()->validate(SiswaMts::$rules,SiswaMts::$customMessage);

            // $photo = $request->file('siswa_photo')->store('siswa-ma');

            // if ($photo) {

            //     $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $siswaMt = SiswaMts::create($request->all());

                Mail::to($siswaMt->siswa_email)->cc(['rizkyfebry09@gmail.com'])->send(new MtRegistration($siswaMt));
                $pesan = "
*Selamat! Pendaftaran Peserta Didik Baru LPI AL Azhar Menganti Gresik Sudah Berhasil*
=============================
Berikut adalah informasi data anda dan akses login untuk mengikuti seleksi ujian online tes masuk.
=============================
*No. Pendaftaran :* ".$siswaMt->nomor."
*Nama Lengkap :* ".$siswaMt->siswa_nama_lengkap."
*Jenjang :* MTS
=============================
*Username :* ".$siswaMt->nomor."
*Password :* ".$siswaMt->nomor."
Untuk informasi lebih lanjut silahkan klik link group whatsapp dibawah ini
".$this->link_mts."
atau bisa mengunjungi website https://ppdb.alazhargresik.id";
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($siswaMt) {
                    return redirect()->route('thankyou',[
                        'message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil',
                        'jenjang'=>'MTS',
                        'id' => $siswaMt->id
                    ]);
                }
            // }

            return redirect()->to('form-mts')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-mts/front', compact('siswaMt'));
    }

    public function siswa_smp(Request $request)
    {
        $siswaSmp = new SiswaSmp();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmp::$rules,SiswaSmp::$customMessage);

            // $photo = $request->file('siswa_photo')->store('siswa-ma');

            // if ($photo) {

            //     $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSmp = SiswaSmp::create($request->all());

                Mail::to($SiswaSmp->siswa_email)->cc(['rizkyfebry09@gmail.com'])->send(new SmpRegistration($SiswaSmp));
                $pesan = "
*Selamat! Pendaftaran Peserta Didik Baru LPI AL Azhar Menganti Gresik Sudah Berhasil*
=============================
Berikut adalah informasi data anda dan akses login untuk mengikuti seleksi ujian online tes masuk.
=============================
*No. Pendaftaran :* ".$SiswaSmp->nomor."
*Nama Lengkap :* ".$SiswaSmp->siswa_nama_lengkap."
*Jenjang :* SMP
=============================
*Username :* ".$SiswaSmp->nomor."
*Password :* ".$SiswaSmp->nomor."
Untuk informasi lebih lanjut silahkan klik link group whatsapp dibawah ini
".$this->link_smp."
atau bisa mengunjungi website https://ppdb.alazhargresik.id";
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($SiswaSmp) {
                    return redirect()->route('thankyou',[
                        'message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil',
                        'jenjang'=>'SMP',
                        'id' => $SiswaSmp->id
                    ]);
                }
            // }

            return redirect()->to('form-smp')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-smp/front', compact('siswaSmp'));
    }

    public function siswa_sma(Request $request)
    {
        $siswaSma = new SiswaSma();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSma::$rules,SiswaSma::$customMessage);

            // $photo = $request->file('siswa_photo')->store('siswa-ma');

            // if ($photo) {

            //     $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSma = SiswaSma::create($request->all());

                Mail::to($SiswaSma->siswa_email)->cc(['rizkyfebry09@gmail.com'])->send(new SmaRegistration($SiswaSma));
                $pesan = "
*Selamat! Pendaftaran Peserta Didik Baru LPI AL Azhar Menganti Gresik Sudah Berhasil*
=============================
Berikut adalah informasi data anda dan akses login untuk mengikuti seleksi ujian online tes masuk.
=============================
*No. Pendaftaran :* ".$SiswaSma->nomor."
*Nama Lengkap :* ".$SiswaSma->siswa_nama_lengkap."
*Jenjang :* SMA
=============================
*Username :* ".$SiswaSma->nomor."
*Password :* ".$SiswaSma->nomor."
Untuk informasi lebih lanjut silahkan klik link group whatsapp dibawah ini
".$this->link_sma."
atau bisa mengunjungi website https://ppdb.alazhargresik.id";
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($SiswaSma) {
                    return redirect()->route('thankyou',[
                        'message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil',
                        'jenjang'=>'SMA',
                        'id' => $SiswaSma->id
                    ]);
                }
            // }

            return redirect()->to('form-sma')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-sma/front', compact('siswaSma'));
    }

    public function siswa_smk(Request $request)
    {
        $siswaSmk = new SiswaSmk();

        if ($request->isMethod("post")) {
            request()->validate(SiswaSmk::$rules,SiswaSmk::$customMessage);

            // $photo = $request->file('siswa_photo')->store('siswa-ma');

            // if ($photo) {

            //     $res = array_merge($request->all(), ['siswa_photo' => $photo]);

                $SiswaSmk = SiswaSmk::create($request->all());

                Mail::to($SiswaSmk->siswa_email)->cc(['rizkyfebry09@gmail.com'])->send(new SmkRegistration($SiswaSmk));
                $pesan = "
*Selamat! Pendaftaran Peserta Didik Baru LPI AL Azhar Menganti Gresik Sudah Berhasil*
=============================
Berikut adalah informasi data anda dan akses login untuk mengikuti seleksi ujian online tes masuk.
=============================
*No. Pendaftaran :* ".$SiswaSmk->nomor."
*Nama Lengkap :* ".$SiswaSmk->siswa_nama_lengkap."
*Jenjang :* SMK
=============================
*Username :* ".$SiswaSmk->nomor."
*Password :* ".$SiswaSmk->nomor."
Untuk informasi lebih lanjut silahkan klik link group whatsapp dibawah ini
".$this->link_smk."
atau bisa mengunjungi website https://ppdb.alazhargresik.id";
                (new Whatsapp)->send($request->siswa_no_hp,$pesan);

                if ($SiswaSmk) {
                    return redirect()->route('thankyou',[
                        'message'=>'Pendaftaran Calon Peserta Didik Baru Berhasil',
                        'jenjang'=>'SMK',
                        'id' => $SiswaSmk->id
                    ]);
                }
            // }

            return redirect()->to('form-smk')->with('failed', 'Pendaftaran Gagal!');
        }

        return view('siswa-smk/front', compact('siswaSmk'));
    }

    function thankyou()
    {
        $jenjang = $_GET['jenjang'];
        $id = $_GET['id'];
        $siswa = "";
        if($jenjang == 'MA') $siswa = SiswaMa::find($id);
        if($jenjang == 'MTS') $siswa = SiswaMts::find($id);
        if($jenjang == 'RA') $siswa = SiswaRa::find($id);
        if($jenjang == 'SMA') $siswa = SiswaSma::find($id);
        if($jenjang == 'SMK') $siswa = SiswaSmk::find($id);
        if($jenjang == 'SMP') $siswa = SiswaSmp::find($id);
        return view('thankyou',compact('siswa'));
    }

    function check($jenjang)
    {
        $nomor = isset($_GET['nomor']) ? $_GET['nomor'] : '';
        if($nomor == '')
            return view('check',compact('jenjang'));

        $jenjang = strtoupper($jenjang);
        $view = "";
        if($jenjang == 'MA')
        {
            $siswa = SiswaMa::get();
        } 
        
        if($jenjang == 'MTS') 
        {
            $siswa = SiswaMts::get();
        }

        if($jenjang == 'RA')
        {
            $siswa = SiswaRa::get();
        } 

        if($jenjang == 'SMA')
        {
            $siswa = SiswaSma::get();
        }

        if($jenjang == 'SMK')
        {
            $siswa = SiswaSmk::get();
        }

        if($jenjang == 'SMP')
        {
            $siswa = SiswaSmp::get();
        }

        $siswa = $siswa->filter(function($m) use ($nomor){
            return $m->nomor == $nomor;
        });

        if(empty($siswa) || count($siswa) == 0)
            return view('downloads.not-found',compact('jenjang','nomor'));

        $siswa = $siswa[0];

        return view('downloads.bukti',compact('siswa','jenjang'));
    }

    function download($jenjang, $id)
    {
        $jenjang = strtoupper($jenjang);
        $view = "";
        if($jenjang == 'MA')
        {
            $view = "siswa-ma.ringkasan";
            $siswa = SiswaMa::find($id);
        } 
        
        if($jenjang == 'MTS') 
        {
            $view = "siswa-mts.ringkasan";
            $siswa = SiswaMts::find($id);
        }

        if($jenjang == 'RA')
        {
            $view = "siswa-ra.ringkasan";
            $siswa = SiswaRa::find($id);
        } 

        if($jenjang == 'SMA')
        {
            $view = "siswa-sma.ringkasan";
            $siswa = SiswaSma::find($id);
        }

        if($jenjang == 'SMK')
        {
            $view = "siswa-smk.ringkasan";
            $siswa = SiswaSmk::find($id);
        }

        if($jenjang == 'SMP')
        {
            $view = "siswa-smp.ringkasan";
            $siswa = SiswaSmp::find($id);
        }

        // $foto = Storage::get($siswa->siswa_photo);
        $foto = public_path().'/assets/images/kop/'.$jenjang.".jpg";
        $type = pathinfo($foto, PATHINFO_EXTENSION);
        $data = file_get_contents($foto);
        $kop = 'data:image/' . $type . ';base64,' . base64_encode($data);

        QRCode::text(route('check',strtolower($jenjang)).'?nomor='.$siswa->nomor)->setOutfile(public_path().'/qrcode/'.$siswa->nomor.'.png')->png();

        $qrcode = public_path().'/qrcode/'.$siswa->nomor.'.png';
        $type = pathinfo($qrcode, PATHINFO_EXTENSION);
        $data = file_get_contents($qrcode);
        $qrcode = 'data:image/' . $type . ';base64,' . base64_encode($data);

        \Carbon\Carbon::setLocale('id');
        $today = \Carbon\Carbon::now()->isoFormat('D MMMM Y');

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view($view,compact('siswa','kop','qrcode','today')));
        $dompdf->setPaper('Folio','portraot');
        $dompdf->render();

        $dompdf->stream('Bukti-Pendaftaran-'.$siswa->nomor.'.pdf',array("Attachment" => false));
    }

    public function export($jenjang)
    {

        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan-pendaftaran-".$jenjang."-".date('d-M-Y').".xls");
        if($jenjang == 'ra')
            $siswa = SiswaRa::get();
        if($jenjang == 'ma')
            $siswa = SiswaMa::get();
        if($jenjang == 'mts')
            $siswa = SiswaMts::get();
        if($jenjang == 'sma')
            $siswa = SiswaSma::get();
        if($jenjang == 'smk')
            $siswa = SiswaSmk::get();
        if($jenjang == 'smp')
            $siswa = SiswaSmp::get();

        return view('export', compact('siswa'))
            ->with('i', 0);
    }
}
