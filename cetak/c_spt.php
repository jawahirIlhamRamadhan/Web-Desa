    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include '../assets/inc.php';

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel 
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_detailsurat.* from t_jenissurat, t_datasurat, t_detailsurat 
WHERE t_detailsurat.kode='$kodesurat'");
while ($rs = mysqli_fetch_array($query)){
  $tgl = $rs['tanggal'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
  $dt=explode(';',$rs['detail']);
  $tglp=format_hari_tanggal($dt[10]);
  $tglpd=explode(',',$tglp);
  $tglpdn=$tglpd[1];
?>
<?php 
$query = mysqli_query ($con, "SELECT * from t_desa");
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
    <td colspan="" align="center"><strong><font size=2 color="black">PEMERINTAH KABUPATEN <?php echo strtoupper($rd['kab']);?></font></a>
    </strong></td><td></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=3 color="black">KECAMATAN <?php echo strtoupper($rd['kec']);?></font></a>
    </strong></td><td width="70"></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=5 color="black">DESA <?php echo strtoupper($rd['desa']);?></font></strong></td>
    <td width="70"></td>
  </tr>
    <tr>
   <td colspan="3" align="center"><hr><font size=2 color="black"><i>Sekretariat : <?php echo $rd['kantor'];?></i><hr size="3"></td>
  </tr>
    <tr>
    <td colspan="3" align="center"><strong><font size=4 color="black"><u>SURAT PERINTAH TUGAS</u></font></a>
    </strong><br><font size=2 color="black">Nomor : <?php echo $rs['no']; ?></font></td>
  </tr>
</table>
<br>
<table align="center" class="table-print" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="4">Yang bertanda tangan dibawah ini :</td>
  </tr>

  <tr>
    <td></td><td>Nama</td><td>:</td><td><?php echo $dt[0];?></td>
  </tr>
  <tr>
    <td></td><td>NIP</td><td>:</td><td><?php echo $dt[1];?></td>
  </tr>
    <tr>
    <td></td><td>Pangkat</td><td>:</td><td><?php echo $dt[2];?></td>
  </tr>
    <tr>
    <td></td><td>Jabatan</td><td>:</td><td><?php echo $dt[3];?></td>
  </tr>
  <tr>
    <td colspan="4" align="center"></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><b>MENUGASKAN :</b></td>
  </tr>
  <tr>
    <td colspan="4" align="center"></td>
  </tr>
  <tr>
    <td></td><td>Nama</td><td>:</td><td><?php echo $dt[4];?></td>
  </tr>
  <tr>
    <td></td><td>NIP</td><td>:</td><td><?php echo $dt[5];?></td>
  </tr>
    <tr>
    <td></td><td>Pangkat</td><td>:</td><td><?php echo $dt[6];?></td>
  </tr>
    <tr>
    <td></td><td>Jabatan</td><td>:</td><td><?php echo $dt[7];?></td>
  </tr>

  </table>

<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Untuk <b><?php echo $dt[8];?></b> di <b><?php echo $dt[9];?></b> pada tanggal : <b><?php echo $tglpdn;?></b> sampai dengan selesai.</td>
  </tr>
      <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">Demikian untuk menjadi maklum dan dilaksanakan dengan sebaik - baiknya.</td>
  </tr>

<tr><td></td><td></td><td>
<table width="400" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
          <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td align="center" class="pull pull-right"><?php echo $rd['desa'];?>, &nbsp;<?php echo $bulan;?></td>
  </tr>    <tr>
    <td align="center" class="pull pull-right">Kepala Desa,</td>
  </tr>
      <tr>
    <td>&nbsp;</td>
  </tr>
      <tr>
    <td>&nbsp;</td>
  </tr>
      <tr>
    <td align="center" class="pull pull-right"><b><u><?php echo $dt[0];?></u></b></td>
  </tr>
        <tr>
    <td align="center" class="pull pull-right">NIP. <?php echo $dt[1];?></td>
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