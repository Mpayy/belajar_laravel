<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
</head>
<body>
    <h1>Belajar Berhitung di Laravel</h1>
    <nav>
        <a href="{{ url('perhitungan') }}">Perhitungan</a>
        <a href="{{ route('perhitungan.index') }}">Perhitungan</a><hr>
        <a href="{{ route('luasPermukaanKubus.index') }}">Luas Permukaan Kubus</a><hr>
        <a href="{{ route('volumekubus.index') }}">Volume Kubus</a><hr>
        <a href="">Luas Permukaan Tabung</a><hr>
        <a href="{{ route('volumetabung.v_tabung') }}">Volume Tabung</a><hr>
        <a href="{{ route('volumelimas.index') }}">Volume Limas Segi Empat</a><hr>
        <a href="{{ route('pendaftaranpeserta.index') }}">Pendaftaran Peserta</a><hr>
    </nav>
</body>
</html>