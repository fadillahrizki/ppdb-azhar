<div class="card card-body">

    <h5>Informasi Siswa</h5>

    <hr>
    <div class="form-group">
        {{ Form::label('nama_lengkap*') }}
        {{ Form::text('siswa_nama_lengkap', $siswaSma->siswa_nama_lengkap, ['required','class' => 'form-control' . ($errors->has('siswa_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('siswa_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('nama_panggilan*') }}
        {{ Form::text('siswa_nama_panggilan', $siswaSma->siswa_nama_panggilan, ['required','class' => 'form-control' . ($errors->has('siswa_nama_panggilan') ? ' is-invalid' : ''), 'placeholder' => 'Nama Panggilan']) }}
        {!! $errors->first('siswa_nama_panggilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('NIK*') }}
        {{ Form::text('siswa_NIK', $siswaSma->siswa_NIK, ['required','maxlength'=>'16', 'pattern' => '[0-9]{16}','class' => 'form-control' . ($errors->has('siswa_NIK') ? ' is-invalid' : ''), 'placeholder' => 'NIK']) }}
        {!! $errors->first('siswa_NIK', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('jenis_kelamin*') }}
        {{ Form::select('siswa_jenis_kelamin', [ 'Laki - laki'=>'Laki - laki', 'Perempuan'=>'Perempuan'] , $siswaSma->siswa_jenis_kelamin, ['required','class' => 'form-control' . ($errors->has('siswa_jenis_kelamin') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jenis Kelamin -']) }}
        {!! $errors->first('siswa_jenis_kelamin', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir*') }}
        {{ Form::text('siswa_tempat', $siswaSma->siswa_tempat, ['required','class' => 'form-control' . ($errors->has('siswa_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('siswa_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir*') }}
        {{ Form::date('siswa_tanggal_lahir', $siswaSma->siswa_tanggal_lahir, ['required','class' => 'form-control' . ($errors->has('siswa_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('siswa_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_tempat_tinggal*') }}
        {{ Form::textarea('siswa_alamat_tempat_tinggal', $siswaSma->siswa_alamat_tempat_tinggal, ['required','class' => 'form-control' . ($errors->has('siswa_alamat_tempat_tinggal') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Tempat Tinggal']) }}
        {!! $errors->first('siswa_alamat_tempat_tinggal', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('email*') }}
        {{ Form::email('siswa_email', $siswaSma->siswa_email, ['required','class' => 'form-control' . ($errors->has('siswa_email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('siswa_email', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('no telp / wa* (Contoh: 081234567890)') }}
        {{ Form::text('siswa_no_hp', $siswaSma->siswa_no_hp, ['required','class' => 'form-control' . ($errors->has('siswa_no_hp') ? ' is-invalid' : ''), 'placeholder' => 'No Hp']) }}
        {!! $errors->first('siswa_no_hp', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('Foto Formal 4x6*') }}
        <div class="alert alert-info p-2">Jenis file harus PNG, JPG atau JPEG. Max. 5mb</div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" required name="siswa_photo">
            <label class="custom-file-label" for="customFile">Pilih file</label>
        </div>
        {!! $errors->first('siswa_photo', '<p class="invalid-feedback">:message</p>') !!}
    </div>

</div>

<div class="card card-body">
    <h5>Informasi Ayah Kandung</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_lengkap*') }}
        {{ Form::text('ayah_nama_lengkap', $siswaSma->ayah_nama_lengkap, ['required','class' => 'form-control' . ($errors->has('ayah_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('ayah_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('NIK') }}
        {{ Form::text('ayah_NIK', $siswaSma->ayah_NIK, ['maxlength'=>'16', 'pattern' => '[0-9]{16}','class' => 'form-control' . ($errors->has('ayah_NIK') ? ' is-invalid' : ''), 'placeholder' => 'NIK']) }}
        {!! $errors->first('ayah_NIK', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat_lahir') }}
        {{ Form::text('ayah_tempat', $siswaSma->ayah_tempat, ['class' => 'form-control' . ($errors->has('ayah_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
        {!! $errors->first('ayah_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir*') }}
        {{ Form::date('ayah_tanggal_lahir', $siswaSma->ayah_tanggal_lahir, ['required','class' => 'form-control' . ($errors->has('ayah_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('ayah_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('agama*') }}
        {{ Form::text('ayah_agama', $siswaSma->ayah_agama, ['required','class' => 'form-control' . ($errors->has('ayah_agama') ? ' is-invalid' : ''), 'placeholder' => 'Agama']) }}
        {!! $errors->first('ayah_agama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pendidikan_terakhir*') }}
        {{ Form::select('ayah_pendidikan_terakhir',['SMA'=>'SMA','Akademi'=>'Akademi','Sarjana'=>'Sarjana'], $siswaSma->ayah_pendidikan_terakhir, ['required','class' => 'form-control' . ($errors->has('ayah_pendidikan_terakhir') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Pendidikan Terakhir -']) }}
        {!! $errors->first('ayah_pendidikan_terakhir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan*') }}
        {{ Form::text('ayah_pekerjaan', $siswaSma->ayah_pekerjaan, ['required','class' => 'form-control' . ($errors->has('ayah_pekerjaan') ? ' is-invalid' : ''), 'placeholder' => 'Pekerjaan']) }}
        {!! $errors->first('ayah_pekerjaan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('penghasilan*') }}
        {{ Form::select('ayah_penghasilan', ['< 500.000'=>'< 500.000','> 500.000'=>'> 500.000','> 1 juta'=>'> 1 juta'] , $siswaSma->ayah_penghasilan, ['required','class' => 'form-control' . ($errors->has('ayah_penghasilan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Penghasilan -']) }}
        {!! $errors->first('ayah_penghasilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Informasi Ibu Kandung</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_lengkap*') }}
        {{ Form::text('ibu_nama_lengkap', $siswaSma->ibu_nama_lengkap, ['required','class' => 'form-control' . ($errors->has('ibu_nama_lengkap') ? ' is-invalid' : ''), 'placeholder' => 'Nama Lengkap']) }}
        {!! $errors->first('ibu_nama_lengkap', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('NIK') }}
        {{ Form::text('ibu_NIK', $siswaSma->ibu_NIK, ['maxlength'=>'16', 'pattern' => '[0-9]{16}','class' => 'form-control' . ($errors->has('ibu_NIK') ? ' is-invalid' : ''), 'placeholder' => 'Nik']) }}
        {!! $errors->first('ibu_NIK', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tempat') }}
        {{ Form::text('ibu_tempat', $siswaSma->ibu_tempat, ['class' => 'form-control' . ($errors->has('ibu_tempat') ? ' is-invalid' : ''), 'placeholder' => 'Tempat']) }}
        {!! $errors->first('ibu_tempat', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('tanggal_lahir*') }}
        {{ Form::date('ibu_tanggal_lahir', $siswaSma->ibu_tanggal_lahir, ['required','class' => 'form-control' . ($errors->has('ibu_tanggal_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
        {!! $errors->first('ibu_tanggal_lahir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('agama*') }}
        {{ Form::text('ibu_agama', $siswaSma->ibu_agama, ['required','class' => 'form-control' . ($errors->has('ibu_agama') ? ' is-invalid' : ''), 'placeholder' => 'Agama']) }}
        {!! $errors->first('ibu_agama', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pendidikan_terakhir*') }}
        {{ Form::select('ibu_pendidikan_terakhir',['SMA'=>'SMA','Akademi'=>'Akademi','Sarjana'=>'Sarjana'], $siswaSma->ibu_pendidikan_terakhir, ['required','class' => 'form-control' . ($errors->has('ibu_pendidikan_terakhir') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Pendidikan Terakhir -']) }}
        {!! $errors->first('ibu_pendidikan_terakhir', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan*') }}
        {{ Form::text('ibu_pekerjaan', $siswaSma->ibu_pekerjaan, ['required','class' => 'form-control' . ($errors->has('ibu_pekerjaan') ? ' is-invalid' : ''), 'placeholder' => 'Pekerjaan']) }}
        {!! $errors->first('ibu_pekerjaan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('penghasilan*') }}
        {{ Form::select('ibu_penghasilan', ['< 500.000'=>'< 500.000','> 500.000'=>'> 500.000','> 1 juta'=>'> 1 juta'] , $siswaSma->ibu_penghasilan, ['required','class' => 'form-control' . ($errors->has('ibu_penghasilan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Penghasilan -']) }}
        {!! $errors->first('ibu_penghasilan', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Asal Sekolah</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('nama_sekolah*') }}
        {{ Form::text('asal_nama_sekolah', $siswaSma->asal_nama_sekolah, ['required','class' => 'form-control' . ($errors->has('asal_nama_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Nama Sekolah']) }}
        {!! $errors->first('asal_nama_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('alamat_sekolah*') }}
        {{ Form::textarea('asal_alamat_sekolah', $siswaSma->asal_alamat_sekolah, ['required','class' => 'form-control' . ($errors->has('asal_alamat_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'Alamat Sekolah']) }}
        {!! $errors->first('asal_alamat_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('no_telepon_sekolah') }}
        {{ Form::text('asal_no_telepon_sekolah', $siswaSma->asal_no_telepon_sekolah, ['class' => 'form-control' . ($errors->has('asal_no_telepon_sekolah') ? ' is-invalid' : ''), 'placeholder' => 'No Telepon Sekolah']) }}
        {!! $errors->first('asal_no_telepon_sekolah', '<p class="invalid-feedback">:message</p>') !!}
    </div>
</div>

<div class="card card-body">
    <h5>Pilihan Jurusan</h5>

    <hr>

    <div class="form-group">
        {{ Form::label('jurusan*') }}
        {{ Form::select('jurusan',[
            'MIPA (Matematika dan Ilmu Pengetahuan Alam)'=>'MIPA (Matematika dan Ilmu Pengetahuan Alam)',
            'IPS (Ilmu Pengetahuan Sosial)'=>'IPS (Ilmu Pengetahuan Sosial)',
            'Tergantung Hasil Test'=>'Tergantung Hasil Test'] ,$siswaSma->jurusan, ['required','class' => 'form-control' . ($errors->has('jurusan') ? ' is-invalid' : ''), 'placeholder' => '- Pilih Jurusan -']) }}
        {!! $errors->first('jurusan', '<p class="invalid-feedback">:message</p>') !!}
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
</script>