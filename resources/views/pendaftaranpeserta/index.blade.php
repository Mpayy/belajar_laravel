<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Peserta</title>
</head>

<body>
    <h2>List Peserta</h2>
    <a href="{{ route('pendaftaranpeserta.create') }}">Create</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Jurusan</th>
            <th>Gelombang</th>
            <th>Nama Lengkap</th>
            <th>NIK</th>
            <th>Kartu Keluarga</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Pendidikan Terakhir</th>
            <th>Nama Sekolah</th>
            <th>Kejuruan</th>
            <th>Nomor HP</th>
            <th>Email</th>
            <th>Aktivitas Saat ini</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($pendaftaranpeserta as $peserta)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $peserta->jurusan }}</td>
                <td>{{ $peserta->gelombang }}</td>
                <td>{{ $peserta->nama_lengkap }}</td>
                <td>{{ $peserta->nik }}</td>
                <td>{{ $peserta->kartu_keluarga }}</td>
                <td>{{ $peserta->jenis_kelamin }}</td>
                <td>{{ $peserta->tempat_lahir }}</td>
                <td>{{ $peserta->tanggal_lahir }}</td>
                <td>{{ $peserta->pendidikan_terakhir }}</td>
                <td>{{ $peserta->nama_sekolah }}</td>
                <td>{{ $peserta->kejuruan }}</td>
                <td>{{ $peserta->nomor_hp }}</td>
                <td>{{ $peserta->email }}</td>
                <td>{{ $peserta->aktivitas_saat_ini }}</td>
                <td>{{ $peserta->status }}</td>
                <td>
                    <a href="{{ route('pendaftaranpeserta.edit', $peserta->id) }}">Ubah</a>
                    <form action="{{ route('pendaftaranpeserta.destroy', $peserta->id) }}" method="POST"
                        onclick="return confirm('Yakin Hapus?')">
                        @csrf
                        @method('DELETe')
                        <button type="submit">
                            Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach


    </table>
</body>

</html>
