<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Volume Kubus</h2>
    <form action="{{ route('volumekubus.store') }}" method="post">
        @csrf
        <label for="">Masukan Sisi Kubus</label>
        <input type="number" name="sisiKubus" required><br>
        <button type="submit">Hitung Volume Kubus</button><br>
    </form>
    <a href="/navbar">Kembali</a>
    @isset($hasilVolumeKubus)
        <h3>Hasil Volume Kubus: {{ $hasilVolumeKubus }}</h3>
    @endisset
</body>
</html>