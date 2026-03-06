<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }
        form{
            max-width:600px;
        }
        label{
            display:block;
            margin-top:10px;
            font-weight:bold;
        }
        input, select{
            width:100%;
            padding:8px;
            margin-top:4px;
        }
        button{
            margin-top:15px;
            padding:10px 15px;
        }
    </style>
</head>
<body>

<h2>Form Pendaftaran</h2>

<form action="{{ route('pendaftaranpeserta.store') }}" method="POST">
    @csrf
    <label>Jurusan</label>
    <input type="text" name="jurusan" required>

    <label>Gelombang</label>
    <select name="gelombang" required>
        <option value="">-- Pilih Gelombang --</option>
        <option value="1">Gelombang 1</option>
        <option value="2">Gelombang 2</option>
        <option value="3">Gelombang 3</option>
    </select>

    <label>Nama Lengkap</label>
    <input type="text" name="nama_lengkap" required>

    <label>NIK</label>
    <input type="number" name="nik" maxlength="16" required>

    <label>Kartu Keluarga</label>
    <input type="number" name="kartu_keluarga" required>

    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" required>

    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" required>

    <label>Pendidikan Terakhir</label>
    <select name="pendidikan_terakhir">
        <option value="">-- Pilih --</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="SMK">SMK</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
    </select>

    <label>Nama Sekolah</label>
    <input type="text" name="nama_sekolah">

    <label>Kejuruan</label>
    <input type="text" name="kejuruan">

    <label>Nomor HP</label>
    <input type="tel" name="nomor_hp">

    <label>Email</label>
    <input type="email" name="email">

    <label>Aktivitas Saat Ini</label>
    <input type="text" name="aktivitas_saat_ini">

    <label>Status</label>
    <select name="status">
        <option value="">-- Pilih Status --</option>
        <option value="Pending">Pending</option>
        <option value="Diterima">Diterima</option>
        <option value="Ditolak">Ditolak</option>
    </select>

    <button type="submit">Simpan</button>

</form>

</body>
</html>