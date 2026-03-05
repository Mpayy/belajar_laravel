<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Volume Tabung</h2>
    <form action="{{ 'volumetabung.v_tabung' }}" method="post">
        @csrf
        <label for="">Masukan Jari-Jari</label>
        <input type="number" name="jari_jari" required><br>
        <label for="">Masukan Tinggi</label>
        <input type="number" name="tinggi" required><br>        
        <button type="submit">Hitung Volume tabung</button>
    </form>
    @isset($hasilVolumeKubus)
        <h3>Hasil Volume Tabung: {{ $hasilVolumeKubus }}</h3>
    @endisset
</body>
</html>