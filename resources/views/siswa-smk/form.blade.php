<div class="card card-body">

    <h5>Informasi Siswa</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_lengkap') }}
        {{ Form::text('siswa_nama_lengkap', $siswaSmk->siswa_nama_lengkap, ['class' => 'form-control' . ($errors->has('siswa_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('siswa_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('nama_panggilan') }}
        {{ Form::text('siswa_nama_panggilan', $siswaSmk->siswa_nama_panggilan, ['class' => 'form-control' . ($errors->has('siswa_nama_panggilan') ? ' is-invalid' : ''), 'placeholder' => 'Nama Panggilan']) }}
        {!! $errors->first('siswa_nama_panggilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('NIK') }}
        {{ Form::text('siswa_NIK', $siswaSmk->siswa_NIK, ['class' => 'form-control' . ($errors->has('siswa_NIK') ? ' is-invalid' : ''), 'placeholder' => 'NIK']) }}
        {!! $errors->first('siswa_NIK', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('jenis_kelamin') }}
        {{ Form::select('siswa_jenis_kelamin', [ 'Laki - laki'=>'Laki - laki', 'Perempuan'=>'Perempuan'] , $siswaSmk->siswa_jenis_kelamin, ['class' => 'form-control' . ($errors->has('siswa_jenis_kelamin') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jenis Kelamin -']) }}
        {!! $errors->first('siswa_jenis_kelamin', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir') }}
        {{ Form::text('siswa_tempat', $siswaSmk->siswa_tempat, ['class' => 'form-control' . ($errors->has('siswa_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('siswa_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir') }}
        {{ Form::date('siswa_tanggal_lahir', $siswaSmk->siswa_tanggal_lahir, ['class' => 'form-control' . ($errors->has('siswa_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('siswa_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('anak_ke') }}
        {{ Form::number('siswa_anak_ke', $siswaSmk->siswa_anak_ke, ['class' => 'form-control' . ($errors->has('siswa_anak_ke') ? ' is-invalid' : ''), 'placeholder' => 'Anak Ke']) }}
        {!! $errors->first('siswa_anak_ke', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('jumlah_saudara') }}
        {{ Form::number('siswa_jumlah_saudara', $siswaSmk->siswa_jumlah_saudara, ['class' => 'form-control' . ($errors->has('siswa_jumlah_saudara') ? ' is-invalid' : ''), 'placeholder' => 'Jumlah Saudara']) }}
        {!! $errors->first('siswa_jumlah_saudara', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('usia') }}
        {{ Form::number('siswa_usia', $siswaSmk->siswa_usia, ['class' => 'form-control' . ($errors->has('siswa_usia') ? ' is-invalid' : ''), 'placeholder' => 'Usia']) }}
        {!! $errors->first('siswa_usia', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_tempat_tinggal') }}
        {{ Form::textarea('siswa_alamat_tempat_tinggal', $siswaSmk->siswa_alamat_tempat_tinggal, ['class' => 'form-control' . ($errors->has('siswa_alamat_tempat_tinggal') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Tempat Tinggal']) }}
        {!! $errors->first('siswa_alamat_tempat_tinggal', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('hobi') }}
        {{ Form::text('siswa_hobi', $siswaSmk->siswa_hobi, ['class' => 'form-control' . ($errors->has('siswa_hobi') ? ' is-invalid' : ''), 'placeholder' => 'Hobi']) }}
        {!! $errors->first('siswa_hobi', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('email') }}
        {{ Form::email('siswa_email', $siswaSmk->siswa_email, ['class' => 'form-control' . ($errors->has('siswa_email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('siswa_email', '<p class="invalid-feedback">:message</p>') !!}
    </div>

    <div class="form-group">
        {{ Form::label('photo') }}
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="siswa_photo">
            <label class="custom-file-label" for="customFile">Pilih file</label>
        </div>
        {!! $errors->first('siswa_photo', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Asal Sekolah</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_sekolah') }}
        {{ Form::text('asal_nama_sekolah', $siswaSmk->asal_nama_sekolah, ['class' => 'form-control' . ($errors->has('asal_nama_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Nama Sekolah']) }}
        {!! $errors->first('asal_nama_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_sekolah') }}
        {{ Form::textarea('asal_alamat_sekolah', $siswaSmk->asal_alamat_sekolah, ['class' => 'form-control' . ($errors->has('asal_alamat_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Sekolah']) }}
        {!! $errors->first('asal_alamat_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('no_telepon_sekolah') }}
        {{ Form::text('asal_no_telepon_sekolah', $siswaSmk->asal_no_telepon_sekolah, ['class' => 'form-control' . ($errors->has('asal_no_telepon_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'No Telepon Sekolah']) }}
        {!! $errors->first('asal_no_telepon_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Pilihan Jurusan</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('pilihan_pertama') }}
        {{ Form::select('jurusan_pilihan_pertama',[
            'TKJ ( Teknik Komputer Dan Jaringan )'=>'TKJ ( Teknik Komputer Dan Jaringan )',
            'TKRO ( Teknik Kendaraan Ringan Otomotif )'=>'TKRO ( Teknik Kendaraan Ringan Otomotif )',
            'TITL ( Teknik Instalasi Tenaga Listrik )'=>'TITL ( Teknik Instalasi Tenaga Listrik )',
            'TPM ( Teknik Pemesinan )'=>'TPM ( Teknik Pemesinan )',
            'RPL ( Rekayasa Perangkat Lunak )'=>'RPL ( Rekayasa Perangkat Lunak )'] ,$siswaSmk->jurusan_pilihan_pertama, ['class' => 'form-control' . ($errors->has('jurusan_pilihan_pertama') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jurusan Pilihan Pertama -']) }}
        {!! $errors->first('jurusan_pilihan_pertama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pilihan_kedua') }}
        {{ Form::select('jurusan_pilihan_kedua',[
            'TKJ ( Teknik Komputer Dan Jaringan )'=>'TKJ ( Teknik Komputer Dan Jaringan )',
            'TKRO ( Teknik Kendaraan Ringan Otomotif )'=>'TKRO ( Teknik Kendaraan Ringan Otomotif )',
            'TITL ( Teknik Instalasi Tenaga Listrik )'=>'TITL ( Teknik Instalasi Tenaga Listrik )',
            'TPM ( Teknik Pemesinan )'=>'TPM ( Teknik Pemesinan )',
            'RPL ( Rekayasa Perangkat Lunak )'=>'RPL ( Rekayasa Perangkat Lunak )']  ,$siswaSmk->jurusan_pilihan_kedua, ['class' => 'form-control' . ($errors->has('jurusan_pilihan_kedua') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jurusan Pilihan Kedua -']) }}
        {!! $errors->first('jurusan_pilihan_kedua', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Pilihan Pondok</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('pondok') }}
        {{ Form::select('pondok_pilihan',['Non Pondok'=>'Non Pondok','Mondok'=>'Mondok'] ,$siswaSmk->pondok_pilihan, ['class' => 'form-control' . ($errors->has('pondok_pilihan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Pondok -']) }}
        {!! $errors->first('pondok_pilihan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<button type="submit" class="btn btn-primary mb-3">Submit</button>