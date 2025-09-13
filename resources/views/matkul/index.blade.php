<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Mata Kuliah</h1>
    <form method="POST" action="/matkul">
        @csrf
        <input type="text" name="matkul" placeholder="Nama matakuliah"><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi"><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List Mata Kuliah</h2>
    <ul>
        @foreach($data as $matkul)
            <li>{{ $matkul->matkul }} - {{ $matkul->deskripsi }}</li>
        @endforeach
    </ul>
</body>
</html>