<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        form {
            max-width: 600px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
        }

        button {
            margin-top: 15px;
            padding: 10px 15px;
        }
    </style>
</head>

<body>

    <h2>Edit Form Pendaftaran</h2>

    <form action="{{ route('pendaftaranpeserta.update', $pendaftaranpeserta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Jurusan</label>
        <input type="text" name="jurusan" value="{{ $pendaftaranpeserta->jurusan }}" required>

        <label>Gelombang</label>
        <select name="gelombang" required>
            <option value="">-- Pilih Gelombang --</option>
            <option value="1" @selected($pendaftaranpeserta->gelombang == '1')>Gelombang 1</option>
            <option value="2" @selected($pendaftaranpeserta->gelombang == '2')>Gelombang 2</option>
            <option value="3" @selected($pendaftaranpeserta->gelombang == '3')>Gelombang 3</option>
        </select>

        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ $pendaftaranpeserta->nama_lengkap }}" required>

        <label>NIK</label>
        <input type="number" name="nik" maxlength="16" value="{{ $pendaftaranpeserta->nik }}" required>

        <label>Kartu Keluarga</label>
        <input type="number" name="kartu_keluarga" value="{{ $pendaftaranpeserta->kartu_keluarga }}" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="L" @selected($pendaftaranpeserta->jenis_kelamin == 'L')>Laki-laki</option>
            <option value="P" @selected($pendaftaranpeserta->jenis_kelamin == 'P')>Perempuan</option>
        </select>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{ $pendaftaranpeserta->tempat_lahir }}" required>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ $pendaftaranpeserta->tanggal_lahir }}" required>

        <label>Pendidikan Terakhir</label>
        <select name="pendidikan_terakhir">
            <option value="">-- Pilih Pendidikan Terakhir--</option>
            <option value="SMP" @selected($pendaftaranpeserta->pendidikan_terakhir == 'SMP')>SMP</option>
            <option value="SMA" @selected($pendaftaranpeserta->pendidikan_terakhir == 'SMA')>SMA</option>
            <option value="SMK" @selected($pendaftaranpeserta->pendidikan_terakhir == 'SMK')>SMK</option>
            <option value="D3" @selected($pendaftaranpeserta->pendidikan_terakhir == 'D3')>D3</option>
            <option value="S1" @selected($pendaftaranpeserta->pendidikan_terakhir == 'S1')>S1</option>
        </select>

        <label>Nama Sekolah</label>
        <input type="text" name="nama_sekolah" value="{{ $pendaftaranpeserta->nama_sekolah }}">

        <label>Kejuruan</label>
        <input type="text" name="kejuruan" value="{{ $pendaftaranpeserta->kejuruan }}">

        <label>Nomor HP</label>
        <input type="tel" name="nomor_hp" value="{{ $pendaftaranpeserta->nomor_hp }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ $pendaftaranpeserta->email }}">

        <label>Aktivitas Saat Ini</label>
        <input type="text" name="aktivitas_saat_ini" value="{{ $pendaftaranpeserta->aktivitas_saat_ini }}">

        <label>Status</label>
        <select name="status">
            <option value="">-- Pilih Status --</option>
            <option value="1" @selected($pendaftaranpeserta->status == '1')>Aktif</option>
            <option value="0" @selected($pendaftaranpeserta->status == '0')>Tidak Aktif</option>
        </select>

        <button type="submit">Simpan</button>

    </form>

</body>

</html>
