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

<table align="center" class="table-list" width="95%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>

    <td width="50%">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>I.</td><td width="30%">Berangkat dari </td><td>:</td><td><?php echo $rd['desa'];?></td></tr>
          <tr><td></td><td>Ke</td><td>:</td><td><?php echo $dt[9];?></td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td><?php echo $dt[10];?></td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br> <br> <br><u><b><?php echo $dt[0];?></b></u></td></tr>
          <tr><td></td><td colspan="3">NIP. <?php echo $dt[1];?></td></tr>
        </table>
    </td>
  </tr>
    <tr>

    <td width="50%" valign="top">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>II.</td><td width="30%">Tiba di </td><td>:</td><td><?php echo $dt[10];?></td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td>____/_____/_______</td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br> <br><br> <br>_________________________</td></tr>
          <tr><td></td><td colspan="3">NIP. _____________________</td></tr>
        </table>
    </td>
    <td width="50%">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>&nbsp;&nbsp;</td><td width="30%">Berangkat dari </td><td>:</td><td>__________________</td></tr>
          <tr><td></td><td>Ke</td><td>:</td><td>__________________</td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td>____/_____/_______</td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br> <br> <br>_________________________</td></tr>
          <tr><td></td><td colspan="3">NIP. _____________________</td></tr>
        </table>
    </td>
  </tr>
  <tr>
    <td width="50%" valign="top">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>III.</td><td width="30%">Tiba di </td><td>:</td><td>__________________</td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td>____/_____/_______</td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br><br> <br> <br>_________________________</td></tr>
          <tr><td></td><td colspan="3">NIP. _____________________</td></tr>
        </table>
    </td>
    <td width="50%">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>&nbsp;&nbsp;</td><td width="30%">Berangkat dari </td><td>:</td><td>__________________</td></tr>
          <tr><td></td><td>Ke</td><td>:</td><td><?php echo $rd['desa'];?></td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td>____/_____/_______</td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br> <br> <br>_________________________</td></tr>
          <tr><td></td><td colspan="3">NIP. _____________________</td></tr>
        </table>
    </td>
  </tr>
  <tr>
    <td width="50%" valign="top">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>IV.</td><td width="30%">Tiba di </td><td>:</td><td>__________________</td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td>____/_____/_______</td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br><br> <br> <br>_________________________</td></tr>
          <tr><td></td><td colspan="3">NIP. _____________________</td></tr>
        </table>
    </td>
    <td width="50%">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>&nbsp;&nbsp;</td><td width="30%">Berangkat dari </td><td>:</td><td>__________________</td></tr>
          <tr><td></td><td>Ke</td><td>:</td><td><?php echo $rd['desa'];?></td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td>____/_____/_______</td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br> <br> <br>_________________________</td></tr>
          <tr><td></td><td colspan="3">NIP. _____________________</td></tr>
        </table>
    </td>
  </tr>
    <tr>
    <td width="50%" valign="top">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr><td>V.</td><td width="30%">Tiba di </td><td>:</td><td>__________________</td></tr>
          <tr><td></td><td>Pada Tanggal </td><td>:</td><td>____/_____/_______</td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br><br> <br><br> <br>_________________________</td></tr>
          <tr><td></td><td colspan="3">NIP. _____________________</td></tr>
        </table>
    </td>
    <td width="50%">
        <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
          <tr><td>&nbsp;&nbsp;</td><td colspan="2" rowspan="3" align="justify">Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya dan semata - mata untuk kepentingan jabatan dalam waktu yang sesingkat - singkatnya.</td></tr>
          <tr><td></td></tr>
          <tr><td></td></tr>
          <tr><td></td><td>Kepala SKPD</td></tr>
          <tr><td></td><td colspan="3"> <br> <br> <br> <br><u><b><?php echo $dt[0];?></b></u></td></tr>
          <tr><td></td><td colspan="3">NIP. <?php echo $dt[1];?></td></tr>
        </table>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr><td>V.</td><td width="100%" colspan="2">Catatan lain - lain </td></tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2">
      <table align="center" class="table-list" width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr><td>VI.</td><td width="100%" colspan="2">PERHATIAN </td></tr>
        <tr><td></td><td width="100%" colspan="2" align="justify">KPA yang menerbitkan SPPD, Pegawai yang melakukan perjalanan Dinas, para pejabat yang mengesahkan tanggal berangkat/tiba, serta bendahara pengeluaran bertanggung jawab berdasarkan peraturan - peraturan Keuangan Negara apabila Negara menderita rugi akibat kesalahan, kelalaian dan kealpaannya.</td></tr>
      </table></td>
  </tr>
</table>


<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>

<tr><td></td><td></td><td>

</td>
</tr>
</table>
  <?php } } ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</html>