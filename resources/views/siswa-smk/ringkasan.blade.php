@php($siswaSmk=$siswa)
<title>Bukti Pendaftaran {{$siswaSmk->nomor}}</title>
<center>
    <img src="{{$foto}}" alt="{{$siswaSmk->siswa_nama_lengkap}}" width="120px" height="150px" style="object-fit: cover">
    <br>
    <b>{{ $siswaSmk->siswa_nama_lengkap ?? '-' }} - {{$siswaSmk->nomor}}
</center>
<h3>Informasi Siswa</h3>
<hr>
<div class="form-group">
    <strong>Nama Panggilan:</strong>
    {{ $siswaSmk->siswa_nama_panggilan ?? '-' }}
</div>
<div class="form-group">
    <strong>Nik:</strong>
    {{ $siswaSmk->siswa_NIK ?? '-' }}
</div>
<div class="form-group">
    <strong>Jenis Kelamin:</strong>
    {{ $siswaSmk->siswa_jenis_kelamin ?? '-' }}
</div>
<div class="form-group">
    <strong>Tempat:</strong>
    {{ $siswaSmk->siswa_tempat ?? '-' }}
</div>
<div class="form-group">
    <strong>Tanggal Lahir:</strong>
    {{ $siswaSmk->siswa_tanggal_lahir ?? '-' }}
</div>
<div class="form-group">
    <strong>Anak Ke:</strong>
    {{ $siswaSmk->siswa_anak_ke ?? '-' }}
</div>
<div class="form-group">
    <strong>Jumlah Saudara:</strong>
    {{ $siswaSmk->siswa_jumlah_saudara ?? '-' }}
</div>
<div class="form-group">
    <strong>Usia:</strong>
    {{ $siswaSmk->siswa_usia ?? '-' }}
</div>
<div class="form-group">
    <strong>Alamat Tempat Tinggal:</strong>
    {{ $siswaSmk->siswa_alamat_tempat_tinggal ?? '-' }}
</div>
<div class="form-group">
    <strong>Hobi:</strong>
    {{ $siswaSmk->siswa_hobi ?? '-' }}
</div>
<div class="form-group">
    <strong>Email:</strong>
    {{ $siswaSmk->siswa_email ?? '-' }}
</div>
                
<h3>Asal Sekolah</h3>

<hr>
<div class="form-group">
    <strong>Nama Sekolah:</strong>
    {{ $siswaSmk->asal_nama_sekolah ?? '-' }}
</div>
<div class="form-group">
    <strong>Alamat Sekolah:</strong>
    {{ $siswaSmk->asal_alamat_sekolah ?? '-' }}
</div>
<div class="form-group">
    <strong>No Telepon Sekolah:</strong>
    {{ $siswaSmk->asal_no_telepon_sekolah ?? '-' }}
</div>

<h3>Jurusan</h3>
<hr>
<div class="form-group">
    <strong>Jurusan Pilihan Pertama:</strong>
    {{ $siswaSmk->jurusan_pilihan_pertama ?? '-' }}
</div>
<div class="form-group">
    <strong>Jurusan Pilihan Kedua:</strong>
    {{ $siswaSmk->jurusan_pilihan_kedua ?? '-' }}
</div>
<h3>Pondok</h3>

<hr>

<div class="form-group">
    <strong>Pondok Pilihan:</strong>
    {{ $siswaSmk->pondok_pilihan ?? '-' }}
</div>

<br>
<center>
    <img src="{{$qrcode}}" alt="{{$siswaSmk->nomor}}" width="150px" height="150px" style="object-fit: cover">
    <br>
    {{$siswaSmk->nomor}}
</center>