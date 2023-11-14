<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        </tr>
        @foreach($data as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa['nama'] }}</td>
                <td>{{ $mahasiswa['nim'] }}</td>
                <td>{{ $mahasiswa['prodi'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>



