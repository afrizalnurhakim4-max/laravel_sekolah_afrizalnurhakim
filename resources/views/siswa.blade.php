<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #2563eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: white;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        .kosong {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Data Siswa</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($siswa as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td>{{ $data->jurusan }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="kosong">
                        Data siswa belum tersedia.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>
