<!DOCTYPE html>
<html>
<head>
    <title>Data Kurikulum</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        h2 { color: #333; }
    </style>
</head>
<body>
    <h2>Data Kurikulum</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kurikulum</th>
                <th>Tahun</th>
            </tr>
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
</body>
</html>
