<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>List Pendaftaran Peserta</h2>
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
        </tr>
        @foreach ( as )
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        
    </table>
</body>
</html>