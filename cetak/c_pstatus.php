    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat 
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_detailsurat.*, t_penduduk.* from t_jenissurat, t_datasurat, t_detailsurat, t_penduduk WHERE t_detailsurat.kode='$kodesurat' AND t_detailsurat.nik=t_penduduk.nik");
while ($r = mysqli_fetch_array($query)){
  $dt=explode(';',$r['detail']);
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
<table width="95%" align="center" border="0" cellspacing="8" cellpadding="8" class="table-print">
    <tr>
    <td colspan="3" align="center"><strong><font size=4 color="black"><u><?php echo strtoupper($r['nmsurat']); ?> </u></font></a>
    </strong></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="4">Yang bertanda tangan dibawah ini :</td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td></td><td>Nama</td><td>:</td><td><?php echo $r['nama'];?></td>
  </tr>
  <tr>
    <td></td><td>NIK</td><td>:</td><td><?php echo $r['nik'];?></td>
  </tr>
    <tr>
    <td></td><td>Tmp.&Tgl. Lahir</td><td>:</td><td><?php echo $r['tmp_lahir'];?>, &nbsp;<?php echo $r['tgl_lahir'];?></td>
  </tr>
    <tr>
    <td></td><td>Kewarganegaraan</td><td>:</td><td><?php echo $r['kwng'];?></td>
  </tr>
    <tr>
    <td></td><td>Agama</td><td>:</td><td><?php echo $r['agama'];?></td>
  </tr>
    <tr>
    <td></td><td>Pekerjaan</td><td>:</td><td><?php echo $r['kerjaan'];?></td>
  </tr>
  <tr>
    <td></td><td>Alamat</td><td>:</td><td><?php echo $r['alamat'];?> Desa <?php echo $r['desa'];?></td>
  </tr>
  <tr>
    <td></td><td></td><td></td><td>Kec. <?php echo $r['kec'];?> Kab. <?php echo $r['kab'];?></td>
  </tr>
<tr>
    <td colspan="4">&nbsp;</td>
  </tr>


   <tr>
    <td colspan="4">Dengan ini menyatakan dengan sesungguhnya bahwa saya BELUM/SUDAH *) menikah.</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="4">Demikian surat pernyataan ini saya buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</td>
  </tr>

<tr><td></td><td></td><td><td></td>
<table width="400" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
          <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td align="center" class="pull pull-right"><?php echo $rd['desa'];?>, &nbsp;<?php echo IndonesiaTgl($r['tanggal']);?></td>
  </tr>    <tr>
    <td align="center" class="pull pull-right">Yang menyatakan,</td>
  </tr>
      <tr>
    <td>&nbsp;</td>
  </tr>
      <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"><u><b><?php echo $r['nama'];?></b></u></td>
  </tr>


</table>
</td>
</tr>

</table>
  <?php }} ?>
<table width="97%" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
   <tr>
  <td><font size="2">*) Coret yang tidak perlu</font></td>
</tr>
</table>
</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</html>