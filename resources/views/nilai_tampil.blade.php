<h2>Data Nilai Siswa</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Kode Pelajaran</th>
        <th>Skor Nilai</th>
    </tr>
    @foreach($nilai as $key => $n)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $n->nis }}</td>
        <td>{{ $n->kode_pelajaran }}</td>
        <td>{{ $n->skor_nilai }}</td>
    </tr>
    @endforeach
</table>