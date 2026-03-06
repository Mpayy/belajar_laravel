<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Volume Limas Segi Empat</h2>
    <a href="{{ route('volumelimas.create') }}">Create</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Luas Alas</th>
            <th>Tinggi</th>
            <th>Hasil</th>
            <th>Action</th>
        </tr>
        @foreach ($limas as $index => $l)
           <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $l->luas_alas }}</td>
            <td>{{ $l->tinggi }}</td>
            <td>{{ $l->hasil }}</td>
            <td>
                <a href="{{ route('volumelimas.edit', $l->id) }}">Edit</a>
                <form action="{{ route('volumelimas.destroy', $l->id) }}" method="post" onclick="return confirm('Seriusan lu, mau delete??')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr> 
        @endforeach
        
    </table>
</body>
</html>