<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>
</head>
<body>
    <center>
        <h3>Laporan Data Pendaftaran Siswa Baru</h3>
    </center>

    <table class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
                <th>Noreg</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Asal sekolah</th>
                <th>Minat Jurusan</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ( $daftar as $daftar )
                <tr>
                   
                    <td>{{$daftar->noreg}}</td>
                    <td>{{$daftar->nama}}</td>
                    <td>{{$daftar->jk}}</td>
                    <td>{{$daftar->alamat}}</td>
                    <td>{{$daftar->agama}}</td>
                    <td>{{$daftar->asal_sekolah}}</td>
                    <td>{{$daftar->minat_jurusan}}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>