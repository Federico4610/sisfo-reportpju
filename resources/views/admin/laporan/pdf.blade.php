
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengaduan</title>

	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<table border="0">
    <tr>
    <td><img src="{{ base_path() }}/storage/images/lg_dishubcirebon.png" alt="" style="width: 100px; height: 120px;"></td>
    <td><center>
        <font size="5"><b>DINAS PERHUBUNGAN KOTA CIREBON<b></font><br>
        <font size="4"><b>UPT PENERANGAN JALAN UMUM</b></font><br>
        <font size="3">Jalan Rarasantang No. 1  Komplek Perkantoran Bima Kesambi Cirebon</font>
        <font size="3">Telp & Fax : (0231) 489717, Email : dishub@cirebonkota.go.id</font>
    </td>
    </tr>
    <tr>
        <td colspan="2"><hr style="height:2px;border-width:0;background-color:black"></td>
    </tr>
</table>
<table>
	<tr>
		<td>Berikut data Rekap Pengaduan :</td>
	</tr>
</table>
<br>
<table align="center" border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th>ID LAPORAN</th>
            <th>NIK</th>
            <th>NAMA PELAPOR</th>
            <th>TANGGAL PENGADUAN</th>
            <th>ISI LAPORAN</th>
            <th>ISI TANGGAPAN</th>
            <th>TANGGAL TANGGAPAN</th>

        </tr>
    </thead>
    <tbody>
        @php
        $no = 1
        @endphp
        @foreach ($data as $item)
        @php
        $query = DB::table('tbl_tanggapan')->select('tanggapan', 'tgl_tanggapan')
        ->where('pengaduan_id',$item->id_pengaduan)->first();
        @endphp
        <tr>
            <th>{{ $no++ }}</th>
            <th>{{ $item->id_pengaduan }}</th>
            <th>{{ $item->nik }}</th>
            <th>{{ $item->nama }}</th>
            <th>{{ $item->tanggal_pengaduan }}</th>            
            <th>{{ $item->isi_laporan }}</th>
            <th>{{ $query? $query->tanggapan:
                'Belum Ditanggapi' }}</th>
            <th>{{ $query? $query->tgl_tanggapan:
                'Belum Ditanggapi' }}</th>
        </tr>
        @endforeach
    </tbody>
</table>


<table align="right" border="0">
    <tr>
        <td align="center">Cirebon , <?= date('j F Y') ?></td>
    </tr>
    <tr>
        <td align="center">Ka. TU UPT Penerangan Jalan Umum</td>
    </tr>
    <tr>
        <td align="center">Dinas Perhubungan Kota Cirebon</td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><br><td>
    </tr>
    <tr>
        <td><br><td>
    </tr>
    <tr>
        <td><br><td>
    </tr>
    <tr>
        <td><br><td>
    </tr>
    <tr>
        <td align="center">__________________________</td>
    </tr>
    <tr>
        <td align="center">(....................................................)</td><br>
    </tr>
    <tr>
        <td align="center">NIP : ..........................................</td>
    </tr>
</table>
</html>
