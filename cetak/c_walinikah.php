    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat lain
$query = mysqli_query ($con, "SELECT t_wali.*, t_sutarnikah.* from t_wali, t_sutarnikah WHERE t_sutarnikah.kode=t_wali.kode AND t_wali.kode='$kodesurat'");
while ($r = mysqli_fetch_array($query)){
  $tgl = $r['tanggal'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
?>
<?php 
$query = mysqli_query ($con, "SELECT * from t_kua WHERE id='1'");
while ($rd = mysqli_fetch_array($query)){
?>
<html>
<head>
<title></title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="window.print()" >
<h1 align="center">
<table width="800" align="center" border="0" cellspacing="1" cellpadding="4" class="table-print">

  <tr>
    <td rowspan="3" width="70"><img src="../images/<?php echo $rd['logo'];?>" width="60" height="60"></td>
    <td colspan="" align="center"><strong><font size=2 color="black">KEMENTERIAN AGAMA REPUBLIK INDONESIA</font></a>
    </strong></td><td></td>
  </tr>
  <tr>
    <td colspan="" align="center"><strong><font size=3 color="black">KANTOR KEMENTERIAN AGAMA KABUPATEN <?php echo strtoupper($rd['kab']);?></font></a>
    </strong></td><td width="70"></td>
  </tr>
  <tr>
    <td colspan="" align="center"><strong><font size=3 color="black">KANTOR URUSAN AGAMA KECAMATAN <?php echo strtoupper($rd['kec']);?></font></a>
    </strong></td><td width="70"></td>
  </tr>
  <tr>
   <td colspan="3" align="center"><hr><font size=2 color="black"><i>Sekretariat : <?php echo $rd['almt_kantor'];?></i><hr size="3"></td>
  </tr>
    <tr>
    <td colspan="3" align="center"><strong><font size=4 color="black"><u>FORMULIR PEMERIKSAAN WALI </u></font></a>
    </strong><br></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="3">Pada hari ini : <?php echo strtoupper($r['hr']);?> tanggal : <?php echo strtoupper(kekata($r['tgl']));?> bulan : <?php echo strtoupper(kekata($r['bln']));?>, tahun : <?php echo strtoupper(kekata($r['thn']));?>, telah dilakukan pemeriksaan Wali Nikah terhadap Calon Pengantin Wanita :</td>
  </tr>
      <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>Nama</td><td>:</td><td><?php echo $r['namacb'];?></td>
  </tr>
  <tr>
    <td>NIK</td><td>:</td><td><?php echo $r['nikcb'];?></td>
  </tr>
    <tr>
    <td>Alamat</td><td>:</td><td><?php echo $r['alamatcb'];?></td>
  </tr>

      <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">Menetapkan bahwa wali nikah atas nama tersebut diatas adalah  <b><?php echo strtoupper($r['hub_wali']);?></b> </td>
  </tr>
    <tr>
    <td>Nama</td><td>:</td><td><?php echo $r['wali'];?></td>
  </tr>
  <tr>
    <td>NIK</td><td>:</td><td><?php echo $r['nikwali'];?></td>
  </tr>
    <tr>
    <td>Alamat</td><td>:</td><td><?php echo $r['almt_wali'];?></td>
  </tr>


    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">Adapun sebab wali hakim sebagai berikut : </td>
  </tr>
  <tr>
    <td colspan="3"><u><?php echo $r['sebab_wali'];?></u></td>
  </tr>
  

<tr><td colspan="3">
<table width="100%" align="right" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td align="center">Calon Pengantin Wanita</td><td></td><td align="center" class="pull pull-right">Yang memeriksa</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><u><?php echo $r['namacb'];?></u></td><td></td><td align="center" class="pull pull-right"><u><?php echo $r['petugas'];?></u></td>
  </tr>
  <tr>
    <td></td><td align="center">Saksi - saksi</td><td></td>
  </tr>
  <tr>
    <td align="center">Keluarga Catin Wanita (I)</td><td></td><td align="center" class="pull pull-right">Keluarga Catin Wanita (II)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">_______________</td><td></td><td align="center" class="pull pull-right">_______________</td>
  </tr>
</table>
</td>
</tr>
</table>
  <?php }} ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</html>