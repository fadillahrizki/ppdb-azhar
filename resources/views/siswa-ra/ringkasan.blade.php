<title>Bukti Pendaftaran {{$siswa->nomor}}</title>
<div style="font-size:12px;">
<br><br>
<center>
    <h2 style="margin:0">BUKTI PENDAFTARAN PESERTA DIDIK BARU</h2>
    <h3 style="margin:0">Tahun Pelajaran 2021 / 2022</h3>
</center>
<br><br>
<table border="1" cellspacing="0" cellpadding="5" width="100%" style="font-size:12px;">
    <tr>
        <td colspan="4" style="background:grey;">PENDAFTARAN</td>
    </tr>
    <tr>
        <td>No Pendaftaran</td>
        <td width="10px">:</td>
        <td colspan="2">{{$siswa->nomor}}</td>
    </tr>
    <tr>
        <td>Gelombang</td>
        <td>:</td>
        <td colspan="2">2</td>
    </tr>
    <tr>
        <td>Tanggal Pendaftaran</td>
        <td>:</td>
        <td colspan="2">{{$siswa->created_at->format('d-M-Y')}}</td>
    </tr>
    <tr>
        <td colspan="4" style="background:grey">DATA CALON SISWA</td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_nama_lengkap}}</td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_tempat}}, {{$siswa->siswa_tanggal_lahir}}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_jenis_kelamin}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_alamat_tempat_tinggal}}</td>
    </tr>
    <tr>
        <td>No Handphone</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_no_hp}}</td>
    </tr>
    <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td colspan="2">{{$siswa->asal_nama_sekolah}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_email}}</td>
    </tr>
    <tr>
        <td colspan="4" style="background:grey">KARTU UJIAN</td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_NIK}}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td colspan="2">{{$siswa->siswa_NIK}}</td>
    </tr>
    <tr>
        <td colspan="4" style="background:grey;">INFORMASI SEKITAR PPDB</td>
    </tr>
    <tr>
        <td colspan="4">Gelombang 2 (Mendapat potongan Rp.150.000)</td>
    </tr>
    <tr>
        <td>Pendaftaran</td>
        <td>:</td>
        <td>
            01 Maret 2021
            <br>Sampai<br>
            07 April 2021
        </td>
        <td>Onilne / Offline</td>
    </tr>
    <tr>
        <td>Tes Tulis</td>
        <td>:</td>
        <td>07 April 2021</td>
        <td>Onilne Mulai Pukul 13.00 - Selesai</td>
    </tr>
    <tr>
        <td>Tes Kesehatan</td>
        <td>:</td>
        <td>08 April 2021</td>
        <td>Pukul 08.00 di Aula RA Al-Azhar</td>
    </tr>
    <tr>
        <td>Pengumuman</td>
        <td>:</td>
        <td>09 April 2021</td>
        <td>Online</td>
    </tr>
    <tr>
        <td>Daftar Ulang</td>
        <td>:</td>
        <td>09 - 12 April 2021 *)</td>
        <td>Bagian Keuangan LPI Al-Azhar</td>
    </tr>
</table>
<i>
*) - Melebihi tanggal yang ditentukan mengikuti gelombang berikutnya<br>
&nbsp;&nbsp;&nbsp; - Mohon dibawa saat melakukan Daftar Ulang
</i>
<table width="100%">
    <tr>
        <td>
            <br>
            Mengetahui
            <br>
            Orang Tua
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            (....................................)
        </td>
        <td><img src="{{$qrcode}}" alt="{{$siswa->nomor}}" width="150px" height="150px" style="object-fit: contain;"></td>
        <td>
            Gresik, {{$today}}<br>
            Siswa yang Bersangkutan
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            ({{$siswa->siswa_nama_lengkap}})
        </td>
    </tr>
</table>
</div>