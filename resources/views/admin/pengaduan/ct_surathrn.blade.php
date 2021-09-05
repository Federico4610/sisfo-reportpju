<!DOCTYPE html>
<html>
<head>
	<title>Surat Tugas</title>

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

<table align="center" border="0">
    <tr>
        <td>
            <font size="3"><u><b>SURAT TUGAS</b></u></font><br>
        </td>
    </tr>
</table>

<table align="left" border="0">
    <tr>
        <td width="100">Nama</td>
        <td>: </td>
        <td>Sugiharto Ajie</td>
    </tr>
    <tr>
        <td width="100">NIP</td>
        <td>: </td>
        <td>19810425 200902 1 002</td>
    </tr>
    <tr>
        <td width="100">Pangkat/Golongan</td>
        <td>: </td>
        <td>Penata - lllc</td>
    </tr>
    <tr>
        <td width="100">Jabatan</td>
        <td>: </td>
        <td>Kepala Tata Usaha Penerangan Jalan Umum</td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<table align="center"border="0">
    <tr>
        <td>
            <font size="3"><u><b>M E M E R I N T A H K A N</b></u></font><br>
        </td>
    </tr>
</table>
<table align="left">
    <tr>
        <td width="100">Kepada</td>
        <td>: </td>    
    </tr>
</table>

<table align="center" border="1">
    <tr>
        <th width="300" align="center">NAMA</th>
    </tr>
    <tr>
        <td width="300"><br></td>
    </tr>
    <tr>
        <td width="300"><br></td>
    </tr>
    <tr>
        <td width="300"><br></td>
    </tr>
    <tr>
        <td width="300"><br></td>
    </tr>
</table>
<table align="left">
    <tr>
        <td width="100">Untuk</td>
        <td>: </td>
        <td> Melaksanakan Perbaikan Lampu Penerangan Jalan Umum</td>    
    </tr>
</table>
<br>
<table align="center" border="1">
<tr>
    <th width="200">LOKASI</th>
    <th width="200">SELESAI/DITUNDA</th>
  </tr>
  <tr>
    <td width="200" height="140"></td>
    <td width="200" height="140"></td>
  </tr>
</table>
<br>
<table align="center" border="1">
    <tr>
        <th width="150">JAM BERANGKAT</th>
        <td width="100"><br></td>
        <th width="150">JAM PULANG</th>
        <td width="100"><br></td>
    </tr>
</table>
<table align="center">
    <tr>
        <td>Demikian Surat Perintah ini dibuat untuk dilaksanakan dengan penuh tanggung jawab.</td>
    </tr>
</table>
<br>
<table align="right" border="0">
    <tr>
        <td align="center">Cirebon , <?= date('j F Y') ?></td>
    </tr>
    <tr>
        <td align="center">Ka. TU UPT PJU</td>
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
        <td align="center">Sugiharto Ajie</td><br>
    </tr>
    <tr>
        <td align="center">NIP : 19810425 200902 1 002</td>
    </tr><br>
</table>
<br><br><br><br><br><br><br><br><br><br><br>
<table border="1">
    <tr>
        <td><font size="1">PENTING : LAPORKAN SETIAP TITIK 
            PJU YANG DI PERBAIKI, 
            BARANG YANG DIGUNAKAN 
            BERIKUT TANDA TANGAN WARGA 
            SEKITAR UNTUK PERTANGGUNGJAWABAN
        </td>
    </tr>
</table>
<br>
<table align="left" border="0">
    <tr>
        <td width="100">Kepada Yth</td>
        <td>: </td>
        <td>Kepala UPT PJU</td>
    </tr>
    <tr>
        <td width="100">Dari</td>
        <td>: </td>
        <td>Teknisi UPT PJU</td>
    </tr>
    <tr>
        @php $i=1 @endphp
        <td width="100">Nomor</td>
        <td>: </td>
        <td>027/{{ $i++ }}/IV/UPT PJU</td>
    </tr>
    <tr>
        <td width="100">Tanggal</td>
        <td>: </td>
        <td><?= date('j F Y') ?></td>
    </tr>
    <tr>
        <td width="100">Sifat</td>
        <td>: </td>
        <td>Penting</td>
    </tr>
    <tr>
        <td width="100">Lampiran</td>
        <td>: </td>
        <td>2 Lembar</td>
    </tr>
    <tr>
        <td width="100">Perihal</td>
        <td>: </td>
        <td>Permohonan Barang Material</td>
    </tr>
</table>
<br><br><br><br><br><br><br><br>
<table border="0">
    <tr>
        <td>Disampaikan dengan hormat bahwa untuk menunjang kegiatan pelayanan pada PJU Dinas Perhubungan Kota Cirebon, maka dengan ini kami mengajukan permohonan barang material sebagai berikut :</td>
    </tr>
</table>
<table align="center" border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th width="150">URAIAN</th>
            <th>VOLUME</th>
            <th>SATUAN</th>
            <th width="120">LOKASI</th>
            <th width="130">KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $i++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td colspan="6">
            <font size="3"><u><b>SISA MATERIAL YANG BELUM TERPAKAI :</b></u></font><br>
        </td>
    </tr>
    @php $j=1 @endphp
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{ $j++ }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<br>
<table border="0">
    <tr>
        <td>Demikian atas perhatiannya kami sampaikan terima kasih.</td>
    </tr><br>
</table>
<table align="left" border="0">
    <tr>
        <td align="center">Mengetahui</td>
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
        <td align="center">Sugiharto Ajie</td><br>
    </tr>
    <tr>
        <td align="center">NIP : 19810425 200902 1 002</td>
    </tr>
</table>

<table align="right" border="0">
    <tr>
        <td align="center">Cirebon , <?= date('j F Y') ?></td>
    </tr>
    <tr>
        <td align="center">Teknisi UPT Penerangan Jalan UMUM</td>
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
