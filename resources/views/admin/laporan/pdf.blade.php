
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
<table border="1">
	<tr>
		<th width="520"><font size="5">Jumlah pengaduan masuk</b> : {{ $hitungtp }}</th>
	</tr>
	<tr>
		<th><font size="5">Jumlah tanggapan masuk</b> : {{ $hitungtg }}</th>
	</tr>
	<tr>
		<th><font size="5">Jumlah pengaduan yang belum diproses</b> : {{ $terkirim }}</th>
	</tr>
	<tr>
		<th><font size="5">Jumlah pengaduan yang sedang diproses</b> : {{ $proses }}</th>
	</tr>
	<tr>
		<th><font size="5">Jumlah pengaduan yang sedang diproses</b> : {{ $proses }}</th>
	</tr>
	<tr>
		<th><font size="5">Jumlah pengaduan yang sedang diproses</b> : {{ $proses }}</th>
	</tr>
	<tr>
		<th><font size="5">Jumlah masyarakat</b> : {{ $masyarakat }}</th>
	</tr>
	<tr>
		<th><font size="5">Jumlah petugas</b> : {{ $petugas }}</th>
	</tr>
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
