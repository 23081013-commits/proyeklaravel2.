<!DOCTYPE html>
<html>
<head>
    <title>Laporan Akademik - Dinda</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; color: #333; background-color: #fcfcfc; }
        
        /* Style Profil */
        .profile-card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            width: fit-content;
            min-width: 350px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.05);
        }
        .profile-card table { border: none; width: 100%; background: none; margin-bottom: 0; }
        .profile-card td { border: none; padding: 5px 10px; }
        .label { font-weight: bold; color: #555; width: 100px; }

        /* Style Tabel Utama */
        table { border-collapse: collapse; width: 100%; background-color: #fff; margin-bottom: 40px; }
        th { background-color: #4CAF50; color: white; border: 1px solid #3d8b40; padding: 12px; text-align: left; }
        td { border: 1px solid #ddd; padding: 10px; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        
        h2 { text-transform: uppercase; letter-spacing: 1px; border-bottom: 3px solid #4CAF50; padding-bottom: 10px; }
        h3 { margin-top: 30px; color: #2e7d32; border-left: 5px solid #4CAF50; padding-left: 10px; }
    </style>
</head>
<body>

    <h2>Laporan Akademik Mahasiswa</h2>

    <!-- BAGIAN PROFIL -->
    <div class="profile-card">
        <table>
            <tr>
                <td class="label">Nama</td>
                <td>: Dinda Nurul Islami</td>
            </tr>
            <tr>
                <td class="label">NIM/NIS</td>
                <td>: 23081013</td>
            </tr>
            <tr>
                <td class="label">Matakuliah</td>
                <td>: PEMROGRAMAN FRAMEWORK</td>
            </tr>
            <tr>
                <td class="label">Jurusan</td>
                <td>: Teknik Informatika</td>
            </tr>
            <tr></tr>
                <td class="label">Status</td>
                <td>: Mahasiswa Aktif</td>
            </tr>
        </table>
    </div>

    <!-- 1. TABEL NILAI -->
    <h3>1. Data Nilai Siswa</h3>
    <table>
        <thead>
            <tr><th>No</th><th>NIS</th><th>Kode Pelajaran</th><th>Skor Nilai</th></tr>
        </thead>
        <tbody>
            @foreach($nilai as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->kode_pelajaran }}</td>
                <td>{{ $item->skor_nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- 2. TABEL KURIKULUM -->
    <h3>2. Data Kurikulum</h3>
    <table>
        <thead>
            <tr><th>No</th><th>Nama Kurikulum</th><th>Tahun</th></tr>
        </thead>
        <tbody>
            @foreach($kurikulum as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_kurikulum }}</td>
                <td>{{ $item->tahun }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- 3. TABEL KELAS -->
    <h3>3. Data Kelas</h3>
    <table>
        <thead>
            <tr><th>No</th><th>Nama Kelas</th><th>Jurusan</th></tr>
        </thead>
        <tbody>
            @foreach($kelas as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_kelas }}</td>
                <td>{{ $item->jurusan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- 4. TABEL JADWAL -->
    <h3>4. Jadwal Pelajaran</h3>
    <table>
        <thead>
            <tr><th>No</th><th>Hari</th><th>Jam Mulai</th><th>Mata Pelajaran</th></tr>
        </thead>
        <tbody>
            @foreach($jadwal as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->hari }}</td>
                <td>{{ $item->jam }} WIB</td>
                <td>{{ $item->mata_pelajaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>