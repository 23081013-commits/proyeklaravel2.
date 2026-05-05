<!DOCTYPE html>
<html>
<head>
    <title>Data Jadwal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #FF9800; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        h2 { color: #333; }
    </style>
</head>
<body>
    <h2>Data Jadwal</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->hari }}</td>
                <td>{{ $item->jam }}</td>
                <td>{{ $item->mata_pelajaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
