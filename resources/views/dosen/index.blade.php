<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>
<body>
    <h1>Tambah Dosen</h1>
    <form method="POST" action="/dosen">
        @csrf
        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="text" name="nid" placeholder="NID"><br>
        <input type="text" name="matkul" placeholder="Matakuliah"><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List Dosen</h2>
    <ul>
        @foreach($data as $dosen)
            <li>{{ $dosen->nama }} - {{ $dosen->nid }} - {{ $dosen->matkul }}</li>
        @endforeach
    </ul>
</body>
</html>