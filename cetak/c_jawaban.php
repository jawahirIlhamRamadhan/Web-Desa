    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat 
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_detailsurat.* from t_jenissurat, t_datasurat, t_detailsurat WHERE t_detailsurat.kode='$kodesurat'");
while ($r = mysqli_fetch_array($query)){
  $dt=explode(';',$r['detail']);
  $tgl = $r['tanggal'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
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
</table>

<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td>Nomor </td><td>:</td><td><?php echo $r['no'];?></td><td align="right"><?php echo $rd['desa'];?>, <?php echo $bulan;?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>Lampiran </td><td>:</td><td><?php echo $dt[1];?></td><td></td>
  </tr>
  <tr>
    <td valign="top">Perihal</td><td valign="top">:</td><td valign="top"><b><?php echo $dt[0];?></b></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
        <td></td><td></td><td>Kepada Yth,</td>
  </tr>
  <tr>
        <td></td><td></td><td><?php echo $dt[3];?></td>
  </tr>
  <tr>
        <td></td><td></td><td>Di -</td></tr>
  <tr>
        <td></td><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $dt[4];?></u></td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>   
  <tr>
    <td></td><td></td><td colspan="3">Assalamu 'alaikum Wr. Wb.<br></td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td></td><td></td><td colspan="3">Dengan hormat,</td>
  </tr>
  <tr>
    <td></td><td></td><td colspan="3" align="justify">Menjawab <?php echo $dt[2]?>, berikut ini Kami sampaikan bahwa <?php echo $dt[5];?></td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td></td><td></td><td colspan="3" align="justify">Demikian kami sampaikan mohon maklum adanya.<br></td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td></td><td></td><td colspan="3">Wassalamu 'alaikum Wr. Wb.</td>
  </tr>
</table>
<tr><td></td><td></td><td>
<table width="400" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
          <tr>
    <td>&nbsp;</td>
  </tr>
    
  <tr>
    <td align="center" class="pull pull-right">Kepala Desa <?php echo $rd['desa'];?></td>
  </tr>
      <tr>
    <td>&nbsp;</td>
  </tr>
      <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"><u><b><?php echo $r['ttd'];?></b></u></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right">NIP. <?php echo $rd['nipkades'];?></td>
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