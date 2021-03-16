<table class="table table-bordered">
    <thead class="thead">
        <tr>
            <th>No</th>

            <th>No. Pendaftaran</th>
            <th>Nama Lengkap</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ ++$i }}</td>

            <td>{{ $s->nomor }}</td>
            <td>{{ $s->siswa_nama_lengkap }}</td>
            <td>{{ $s->siswa_status}}</td>
        </tr>
        @endforeach
    </tbody>
</table>