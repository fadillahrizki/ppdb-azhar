<div class="card card-body">

    <h5>Informasi Siswa</h5>

    <hr>
    <div class="form-group">
        {{ Form::label('nama_lengkap*') }}
        {{ Form::text('siswa_nama_lengkap', $siswaMa->siswa_nama_lengkap, ['required','class' => 'form-control' . ($errors->has('siswa_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('siswa_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('nama_panggilan*') }}
        {{ Form::text('siswa_nama_panggilan', $siswaMa->siswa_nama_panggilan, ['required','class' => 'form-control' . ($errors->has('siswa_nama_panggilan') ? ' is-invalid' : ''), 'placeholder' => 'Nama Panggilan']) }}
        {!! $errors->first('siswa_nama_panggilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('jenis_kelamin*') }}
        {{ Form::select('siswa_jenis_kelamin', [ 'Laki - laki'=>'Laki - laki', 'Perempuan'=>'Perempuan'] , $siswaMa->siswa_jenis_kelamin, ['required','class' => 'form-control' . ($errors->has('siswa_jenis_kelamin') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jenis Kelamin -']) }}
        {!! $errors->first('siswa_jenis_kelamin', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir*') }}
        {{ Form::text('siswa_tempat', $siswaMa->siswa_tempat, ['required','class' => 'form-control' . ($errors->has('siswa_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('siswa_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir*') }}
        {{ Form::date('siswa_tanggal_lahir', $siswaMa->siswa_tanggal_lahir, ['required','class' => 'form-control' . ($errors->has('siswa_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('siswa_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('anak_ke*') }}
        {{ Form::number('siswa_anak_ke', $siswaMa->siswa_anak_ke, ['required','class' => 'form-control' . ($errors->has('siswa_anak_ke') ? ' is-invalid' : ''), 'placeholder' => 'Anak Ke']) }}
        {!! $errors->first('siswa_anak_ke', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('jumlah_saudara*') }}
        {{ Form::number('siswa_jumlah_saudara', $siswaMa->siswa_jumlah_saudara, ['required','class' => 'form-control' . ($errors->has('siswa_jumlah_saudara') ? ' is-invalid' : ''), 'placeholder' => 'Jumlah Saudara']) }}
        {!! $errors->first('siswa_jumlah_saudara', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('usia*') }}
        {{ Form::number('siswa_usia', $siswaMa->siswa_usia, ['required','class' => 'form-control' . ($errors->has('siswa_usia') ? ' is-invalid' : ''), 'placeholder' => 'Usia']) }}
        {!! $errors->first('siswa_usia', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_tempat_tinggal*') }}
        {{ Form::textarea('siswa_alamat_tempat_tinggal', $siswaMa->siswa_alamat_tempat_tinggal, ['required','class' => 'form-control' . ($errors->has('siswa_alamat_tempat_tinggal') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Tempat Tinggal']) }}
        {!! $errors->first('siswa_alamat_tempat_tinggal', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('hobi') }}
        {{ Form::text('siswa_hobi', $siswaMa->siswa_hobi, ['class' => 'form-control' . ($errors->has('siswa_hobi') ? ' is-invalid' : ''), 'placeholder' => 'Hobi']) }}
        {!! $errors->first('siswa_hobi', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('no telp / wa* (Contoh: 081234567890)') }}
        {{ Form::text('siswa_no_hp', $siswaMa->siswa_no_hp, ['required','class' => 'form-control' . ($errors->has('siswa_no_hp') ? ' is-invalid' : ''), 'placeholder' => 'No Hp']) }}
        {!! $errors->first('siswa_no_hp', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('email*') }}
        {{ Form::email('siswa_email', $siswaMa->siswa_email, ['required','class' => 'form-control' . ($errors->has('siswa_email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('siswa_email', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Informasi Ayah Kandung</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_lengkap*') }}
        {{ Form::text('ayah_nama_lengkap', $siswaMa->ayah_nama_lengkap, ['required','class' => 'form-control' . ($errors->has('ayah_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('ayah_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir*') }}
        {{ Form::text('ayah_tempat', $siswaMa->ayah_tempat, ['required','class' => 'form-control' . ($errors->has('ayah_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('ayah_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir*') }}
        {{ Form::date('ayah_tanggal_lahir', $siswaMa->ayah_tanggal_lahir, ['required','class' => 'form-control' . ($errors->has('ayah_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('ayah_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('agama*') }}
        {{ Form::text('ayah_agama', $siswaMa->ayah_agama, ['required','class' => 'form-control' . ($errors->has('ayah_agama') ? ' is-invalid' : ''), 'placeholder' => 'Agama']) }}
        {!! $errors->first('ayah_agama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pendidikan_terakhir*') }}
        {{ Form::select('ayah_pendidikan_terakhir',['SMA'=>'SMA','Akademi'=>'Akademi','Sarjana'=>'Sarjana'], $siswaMa->ayah_pendidikan_terakhir, ['required','class' => 'form-control' . ($errors->has('ayah_pendidikan_terakhir') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Pendidikan Terakhir -']) }}
        {!! $errors->first('ayah_pendidikan_terakhir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan*') }}
        {{ Form::text('ayah_pekerjaan', $siswaMa->ayah_pekerjaan, ['required','class' => 'form-control' . ($errors->has('ayah_pekerjaan') ? ' is-invalid' : ''), 'placeholder' => 'Pekerjaan']) }}
        {!! $errors->first('ayah_pekerjaan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('penghasilan*') }}
        {{ Form::select('ayah_penghasilan', ['< 500.000'=>'< 500.000','> 500.000'=>'> 500.000','> 1 juta'=>'> 1 juta'] , $siswaMa->ayah_penghasilan, ['required','class' => 'form-control' . ($errors->has('ayah_penghasilan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Penghasilan -']) }}
        {!! $errors->first('ayah_penghasilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Informasi Ibu Kandung</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_lengkap*') }}
        {{ Form::text('ibu_nama_lengkap', $siswaMa->ibu_nama_lengkap, ['required','class' => 'form-control' . ($errors->has('ibu_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('ibu_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat*') }}
        {{ Form::text('ibu_tempat', $siswaMa->ibu_tempat, ['required','class' => 'form-control' . ($errors->has('ibu_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat']) }}
        {!! $errors->first('ibu_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir*') }}
        {{ Form::date('ibu_tanggal_lahir', $siswaMa->ibu_tanggal_lahir, ['required','class' => 'form-control' . ($errors->has('ibu_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('ibu_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('agama*') }}
        {{ Form::text('ibu_agama', $siswaMa->ibu_agama, ['required','class' => 'form-control' . ($errors->has('ibu_agama') ? ' is-invalid' : ''), 'placeholder' => 'Agama']) }}
        {!! $errors->first('ibu_agama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pendidikan_terakhir*') }}
        {{ Form::select('ibu_pendidikan_terakhir',['SMA'=>'SMA','Akademi'=>'Akademi','Sarjana'=>'Sarjana'], $siswaMa->ibu_pendidikan_terakhir, ['required','class' => 'form-control' . ($errors->has('ibu_pendidikan_terakhir') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Pendidikan Terakhir -']) }}
        {!! $errors->first('ibu_pendidikan_terakhir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan*') }}
        {{ Form::text('ibu_pekerjaan', $siswaMa->ibu_pekerjaan, ['required','class' => 'form-control' . ($errors->has('ibu_pekerjaan') ? ' is-invalid' : ''), 'placeholder' => 'Pekerjaan']) }}
        {!! $errors->first('ibu_pekerjaan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('penghasilan*') }}
        {{ Form::select('ibu_penghasilan', ['< 500.000'=>'< 500.000','> 500.000'=>'> 500.000','> 1 juta'=>'> 1 juta'] , $siswaMa->ibu_penghasilan, ['required','class' => 'form-control' . ($errors->has('ibu_penghasilan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Penghasilan -']) }}
        {!! $errors->first('ibu_penghasilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Asal Sekolah</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_sekolah*') }}
        {{ Form::text('asal_nama_sekolah', $siswaMa->asal_nama_sekolah, ['required','class' => 'form-control' . ($errors->has('asal_nama_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Nama Sekolah']) }}
        {!! $errors->first('asal_nama_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_sekolah*') }}
        {{ Form::textarea('asal_alamat_sekolah', $siswaMa->asal_alamat_sekolah, ['required','class' => 'form-control' . ($errors->has('asal_alamat_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Sekolah']) }}
        {!! $errors->first('asal_alamat_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('no_telepon_sekolah') }}
        {{ Form::text('asal_no_telepon_sekolah', $siswaMa->asal_no_telepon_sekolah, ['class' => 'form-control' . ($errors->has('asal_no_telepon_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'No Telepon Sekolah']) }}
        {!! $errors->first('asal_no_telepon_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Pilihan Jurusan</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('pilihan_pertama*') }}
        {{ Form::select('jurusan_pilihan_pertama',['IPA'=>'IPA','IPS'=>'IPS'], $siswaMa->jurusan_pilihan_pertama, ['required','class' => 'form-control' . ($errors->has('jurusan_pilihan_pertama') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jurusan Pilihan Pertama -']) }}
        {!! $errors->first('jurusan_pilihan_pertama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pilihan_kedua*') }}
        {{ Form::select('jurusan_pilihan_kedua', ['IPA'=>'IPA','IPS'=>'IPS'] ,$siswaMa->jurusan_pilihan_kedua, ['required','class' => 'form-control' . ($errors->has('jurusan_pilihan_kedua') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jurusan Pilihan Kedua -']) }}
        {!! $errors->first('jurusan_pilihan_kedua', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <label for="license">
        {!! Form::checkbox("license", 1, false, ['id'=>'license','onchange'=>'enableBtn(this)']) !!}
        SAYA MENYATAKAN DENGAN SESUNGGUHNYA BAHWA ISIAN DATA DALAM FORMULIR INI ADALAH BENAR.
    </label>
</div>

<button type="button" id="btn-submit" class="btn btn-primary mb-3" disabled="disabled">SIMPAN</button>
<script>
function enableBtn(el)
{
    document.getElementById("btn-submit").setAttribute('disabled','disabled')
    if(el.checked)
        document.getElementById("btn-submit").removeAttribute('disabled')
}

document.querySelector('[name=jurusan_pilihan_pertama]').onchange = function() {
    var jurusan1 = this.value
    var jurusan_kedua = document.querySelector('[name=jurusan_pilihan_kedua]')
    jurusan_kedua.value = ""
    for(i=0;i<jurusan_kedua.options.length;i++)
    {
        jurusan_kedua.options[i].style.display="block"
        if(jurusan_kedua.options[i].value == jurusan1)
            jurusan_kedua.options[i].style.display="none"
        else
            jurusan_kedua.options[i].style.display="block"
    }
}
</script>