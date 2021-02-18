<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bukti Pendaftaran</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<center>
    <h2>Bukti Pendaftaran</h2>
</center>
<br>
<table width="100%">
<tr>
    <td width="160px" valign="top">
        <img src="{{$foto}}" alt="{{$siswa->siswa_nama_lengkap}}" style="width: 100%;object-fit:center;">
    </td>
    <td valign="top">
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
        <td width="250px">No. Pendaftaran</td>
        <td><b>{{$siswa->nomor}}</b></td>
        </tr>
        <tr>
        <td>NIK</td>
        <td>{{$siswa->siswa_NIK}}</td>
        </tr>
        <tr>
        <td>Tempat / Tanggal Lahir</td>
        <td>{{$siswa->siswa_tempat}}, {{\Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-M-Y')}}</td>
        </tr>
        <tr>
        <td>Waktu Mendaftar</td>
        <td>{{$siswa->created_at->format('Y-m-d H:i:s')}}</td>
        </tr>
        <tr>
        <td>QR Code</td>
        <td><img src="<?=$qrcode?>" width="200px" height="200px" style="object-fit: cover;object-position: center;"></td>
        </tr>
    </table>
    </td>
</tr>
</table>
</body>
</html>