<div class="card card-body">

    <h5>Informasi Siswa</h5>

    <hr>
    <div class="form-group">
        {{ Form::label('jenjang*') }}
        {{ Form::select('jenjang', [ 'TK'=>'TK', 'PAUD'=>'PAUD', 'MI'=>'MI'] , $siswaRa->jenjang, ['required','class' => 'form-control' . ($errors->has('jenjang') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jenjang -']) }}
        {!! $errors->first('jenjang', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('nama_lengkap') }}
        {{ Form::text('siswa_nama_lengkap', $siswaRa->siswa_nama_lengkap, ['class' => 'form-control' . ($errors->has('siswa_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('siswa_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}

    </div>
    <div class="form-group">
        {{ Form::label('nama_panggilan') }}
        {{ Form::text('siswa_nama_panggilan', $siswaRa->siswa_nama_panggilan, ['class' => 'form-control' . ($errors->has('siswa_nama_panggilan') ? ' is-invalid' : ''), 'placeholder' => 'Nama Panggilan']) }}
        {!! $errors->first('siswa_nama_panggilan', '<p class="invalid-feedback">:message</p>') !!}

    </div>
    <div class="form-group">
        {{ Form::label('NIK') }}
        {{ Form::text('siswa_NIK', $siswaRa->siswa_NIK, ['class' => 'form-control' . ($errors->has('siswa_NIK') ? ' is-invalid' : ''), 'placeholder' => 'NIK']) }}
        {!! $errors->first('siswa_NIK', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('jenis_kelamin') }}
        {{ Form::select('siswa_jenis_kelamin', [ 'Laki - laki'=>'Laki - laki', 'Perempuan'=>'Perempuan'] , $siswaRa->siswa_jenis_kelamin, ['class' => 'form-control' . ($errors->has('siswa_jenis_kelamin') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jenis Kelamin -']) }}
        {!! $errors->first('siswa_jenis_kelamin', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir') }}
        {{ Form::text('siswa_tempat', $siswaRa->siswa_tempat, ['class' => 'form-control' . ($errors->has('siswa_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('siswa_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir') }}
        {{ Form::date('siswa_tanggal_lahir', $siswaRa->siswa_tanggal_lahir, ['class' => 'form-control' . ($errors->has('siswa_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('siswa_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('anak_ke') }}
        {{ Form::number('siswa_anak_ke', $siswaRa->siswa_anak_ke, ['class' => 'form-control' . ($errors->has('siswa_anak_ke') ? ' is-invalid' : ''), 'placeholder' => 'Anak Ke']) }}
        {!! $errors->first('siswa_anak_ke', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('jumlah_saudara') }}
        {{ Form::number('siswa_jumlah_saudara', $siswaRa->siswa_jumlah_saudara, ['class' => 'form-control' . ($errors->has('siswa_jumlah_saudara') ? ' is-invalid' : ''), 'placeholder' => 'Jumlah Saudara']) }}
        {!! $errors->first('siswa_jumlah_saudara', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('usia') }}
        {{ Form::number('siswa_usia', $siswaRa->siswa_usia, ['class' => 'form-control' . ($errors->has('siswa_usia') ? ' is-invalid' : ''), 'placeholder' => 'Usia']) }}
        {!! $errors->first('siswa_usia', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_tempat_tinggal') }}
        {{ Form::textarea('siswa_alamat_tempat_tinggal', $siswaRa->siswa_alamat_tempat_tinggal, ['class' => 'form-control' . ($errors->has('siswa_alamat_tempat_tinggal') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Tempat Tinggal']) }}
        {!! $errors->first('siswa_alamat_tempat_tinggal', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('hobi') }}
        {{ Form::text('siswa_hobi', $siswaRa->siswa_hobi, ['class' => 'form-control' . ($errors->has('siswa_hobi') ? ' is-invalid' : ''), 'placeholder' => 'Hobi']) }}
        {!! $errors->first('siswa_hobi', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('cita_cita') }}
        {{ Form::text('siswa_cita_cita', $siswaRa->siswa_cita_cita, ['class' => 'form-control' . ($errors->has('siswa_cita_cita') ? ' is-invalid' : ''), 'placeholder' => 'Cita Cita']) }}
        {!! $errors->first('siswa_cita_cita', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('ukuran_sepatu') }}
        {{ Form::text('siswa_ukuran_sepatu', $siswaRa->siswa_ukuran_sepatu, ['class' => 'form-control' . ($errors->has('siswa_ukuran_sepatu') ? ' is-invalid' : ''), 'placeholder' => 'Ukuran Sepatu']) }}
        {!! $errors->first('siswa_ukuran_sepatu', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('ukuran_baju') }}
        {{ Form::text('siswa_ukuran_baju', $siswaRa->siswa_ukuran_baju, ['class' => 'form-control' . ($errors->has('siswa_ukuran_baju') ? ' is-invalid' : ''), 'placeholder' => 'Ukuran Baju']) }}
        {!! $errors->first('siswa_ukuran_baju', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('berat_badan') }}
        {{ Form::text('siswa_berat_badan', $siswaRa->siswa_berat_badan, ['class' => 'form-control' . ($errors->has('siswa_berat_badan') ? ' is-invalid' : ''), 'placeholder' => 'Berat Badan']) }}
        {!! $errors->first('siswa_berat_badan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tinggi_badan') }}
        {{ Form::text('siswa_tinggi_badan', $siswaRa->siswa_tinggi_badan, ['class' => 'form-control' . ($errors->has('siswa_tinggi_badan') ? ' is-invalid' : ''), 'placeholder' => 'Tinggi Badan']) }}
        {!! $errors->first('siswa_tinggi_badan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('transportasi') }}
        {{ Form::text('siswa_transportasi', $siswaRa->siswa_transportasi, ['class' => 'form-control' . ($errors->has('siswa_transportasi') ? ' is-invalid' : ''), 'placeholder' => 'Transportasi']) }}
        {!! $errors->first('siswa_transportasi', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('email') }}
        {{ Form::email('siswa_email', $siswaRa->siswa_email, ['class' => 'form-control' . ($errors->has('siswa_email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('siswa_email', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('no telp / wa*') }}
        {{ Form::text('siswa_no_hp', $siswaRa->siswa_no_hp, ['required','class' => 'form-control' . ($errors->has('siswa_no_hp') ? ' is-invalid' : ''), 'placeholder' => 'No Hp']) }}
        {!! $errors->first('siswa_no_hp', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    
</div>

<div class="card card-body">
    <h5>Informasi Ayah Kandung</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_lengkap') }}
        {{ Form::text('ayah_nama_lengkap', $siswaRa->ayah_nama_lengkap, ['class' => 'form-control' . ($errors->has('ayah_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('ayah_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('NIK') }}
        {{ Form::text('ayah_NIK', $siswaRa->ayah_NIK, ['class' => 'form-control' . ($errors->has('ayah_NIK') ? ' is-invalid' : ''), 'placeholder' => 'NIK']) }}
        {!! $errors->first('ayah_NIK', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir') }}
        {{ Form::text('ayah_tempat', $siswaRa->ayah_tempat, ['class' => 'form-control' . ($errors->has('ayah_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('ayah_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir') }}
        {{ Form::date('ayah_tanggal_lahir', $siswaRa->ayah_tanggal_lahir, ['class' => 'form-control' . ($errors->has('ayah_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('ayah_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('agama') }}
        {{ Form::text('ayah_agama', $siswaRa->ayah_agama, ['class' => 'form-control' . ($errors->has('ayah_agama') ? ' is-invalid' : ''), 'placeholder' => 'Agama']) }}
        {!! $errors->first('ayah_agama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pendidikan_terakhir') }}
        {{ Form::select('ayah_pendidikan_terakhir',['SMA'=>'SMA','Akademi'=>'Akademi','Sarjana'=>'Sarjana'], $siswaRa->ayah_pendidikan_terakhir, ['class' => 'form-control' . ($errors->has('ayah_pendidikan_terakhir') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Pendidikan Terakhir -']) }}
        {!! $errors->first('ayah_pendidikan_terakhir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan') }}
        {{ Form::text('ayah_pekerjaan', $siswaRa->ayah_pekerjaan, ['class' => 'form-control' . ($errors->has('ayah_pekerjaan') ? ' is-invalid' : ''), 'placeholder' => 'Pekerjaan']) }}
        {!! $errors->first('ayah_pekerjaan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('penghasilan') }}
        {{ Form::select('ayah_penghasilan', ['< 500.000'=>'< 500.000','> 500.000'=>'> 500.000','> 1 juta'=>'> 1 juta'] , $siswaRa->ayah_penghasilan, ['class' => 'form-control' . ($errors->has('ayah_penghasilan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Penghasilan -']) }}
        {!! $errors->first('ayah_penghasilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Informasi Ibu Kandung</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_lengkap') }}
        {{ Form::text('ibu_nama_lengkap', $siswaRa->ibu_nama_lengkap, ['class' => 'form-control' . ($errors->has('ibu_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('ibu_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('NIK') }}
        {{ Form::text('ibu_NIK', $siswaRa->ibu_NIK, ['class' => 'form-control' . ($errors->has('ibu_NIK') ? ' is-invalid' : ''), 'placeholder' => 'NIK']) }}
        {!! $errors->first('ibu_NIK', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir') }}
        {{ Form::text('ibu_tempat', $siswaRa->ibu_tempat, ['class' => 'form-control' . ($errors->has('ibu_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('ibu_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir') }}
        {{ Form::date('ibu_tanggal_lahir', $siswaRa->ibu_tanggal_lahir, ['class' => 'form-control' . ($errors->has('ibu_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('ibu_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('agama') }}
        {{ Form::text('ibu_agama', $siswaRa->ibu_agama, ['class' => 'form-control' . ($errors->has('ibu_agama') ? ' is-invalid' : ''), 'placeholder' => 'Agama']) }}
        {!! $errors->first('ibu_agama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pendidikan_terakhir') }}
        {{ Form::select('ibu_pendidikan_terakhir',['SMA'=>'SMA','Akademi'=>'Akademi','Sarjana'=>'Sarjana'] ,$siswaRa->ibu_pendidikan_terakhir, ['class' => 'form-control' . ($errors->has('ibu_pendidikan_terakhir') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Pendidikan Terakhir -']) }}
        {!! $errors->first('ibu_pendidikan_terakhir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan') }}
        {{ Form::text('ibu_pekerjaan', $siswaRa->ibu_pekerjaan, ['class' => 'form-control' . ($errors->has('ibu_pekerjaan') ? ' is-invalid' : ''), 'placeholder' => 'Pekerjaan']) }}
        {!! $errors->first('ibu_pekerjaan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('penghasilan') }}
        {{ Form::select('ibu_penghasilan',['< 500.000'=>'< 500.000','> 500.000'=>'> 500.000','> 1 juta'=>'> 1 juta'], $siswaRa->ibu_penghasilan, ['class' => 'form-control' . ($errors->has('ibu_penghasilan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Penghasilan -']) }}
        {!! $errors->first('ibu_penghasilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>

</div>

<div class="card card-body">
    <h5>Informasi Wali</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_Lengkap') }}
        {{ Form::text('wali_nama_lengkap', $siswaRa->wali_nama_lengkap, ['class' => 'form-control' . ($errors->has('wali_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('wali_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_tinggal') }}
        {{ Form::textarea('wali_alamat_tinggal', $siswaRa->wali_alamat_tinggal, ['class' => 'form-control' . ($errors->has('wali_alamat_tinggal') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Tinggal']) }}
        {!! $errors->first('wali_alamat_tinggal', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan') }}
        {{ Form::text('wali_pekerjaan', $siswaRa->wali_pekerjaan, ['class' => 'form-control' . ($errors->has('wali_pekerjaan') ? ' is-invalid' : ''), 'placeholder' => 'Pekerjaan']) }}
        {!! $errors->first('wali_pekerjaan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Asal Sekolah</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_sekolah') }}
        {{ Form::text('asal_nama_sekolah', $siswaRa->asal_nama_sekolah, ['class' => 'form-control' . ($errors->has('asal_nama_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Nama Sekolah']) }}
        {!! $errors->first('asal_nama_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_sekolah') }}
        {{ Form::textarea('asal_alamat_sekolah', $siswaRa->asal_alamat_sekolah, ['class' => 'form-control' . ($errors->has('asal_alamat_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Sekolah']) }}
        {!! $errors->first('asal_alamat_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('no_telepon_sekolah') }}
        {{ Form::text('asal_no_telepon_sekolah', $siswaRa->asal_no_telepon_sekolah, ['class' => 'form-control' . ($errors->has('asal_no_telepon_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'No Telepon Sekolah']) }}
        {!! $errors->first('asal_no_telepon_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<button class="btn btn-primary mb-3">Submit</button>