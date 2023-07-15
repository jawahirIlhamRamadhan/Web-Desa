<?php
include '../sesi.php';
include '../koneksi.php';
include_once "../assets/inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	.str { 
		mso-number-format:\@; 
	}
	</style>

<?php 

	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Penduduk.xls");

	?>
 
	<center>
		<h3>DATA PENDUDUK<br/>
			
	</center>

	<table border="1">
		<tr>			<th>No</th>
                        <th>Nkk</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Jk</th>
                        <th>Tmp. Lahir</th>
                        <th>Tgl. Lahir</th>
                        <th>Warga negara</th>
                        <th>Agama</th>
                        <th>Status</th>
                        <th>Pend</th>
                        <th>Kerjaan</th>
                        <th>Prov</th>
                        <th>Kab</th>
                        <th>Kec</th>
                        <th>Desa</th>
                        <th>Alamat</th>
                        <th>HP</th>
                        <th>SHDK</th>
                        <th>Foto</th>
                        <th>Ket</th>
                    </tr>
		<?php 
		$bc = "SELECT  * FROM t_penduduk order by nkk desc";
		$query = mysqli_query($con,$bc) or die (mysqli_error($con));
		$no = 1;
		while($d = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td class="str"><?php echo $d['nkk']; ?></td>
			<td class="str"><?php echo $d['nik']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['jk']; ?></td>
			<td><?php echo $d['tmp_lahir']; ?></td>
			<td class="str"><?php echo $d['tgl_lahir']; ?></td>
			<td><?php echo $d['kwng']; ?></td>
			<td><?php echo $d['agama']; ?></td>
			<td><?php echo $d['status']; ?></td>
			<td><?php echo $d['pend']; ?></td>
			<td><?php echo $d['kerjaan']; ?></td>
			<td><?php echo $d['prov']; ?></td>
			<td><?php echo $d['kab']; ?></td>
			<td><?php echo $d['kec']; ?></td>
			<td><?php echo $d['desa']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td class="str"><?php echo $d['hp']; ?></td>
			<td><?php echo $d['shdk']; ?></td>
			<td><?php echo $d['foto']; ?></td>
			<td><?php echo $d['ket']; ?></td>
			
		</tr>
		<?php }
		
		?>
	</table>
		<table border="0">
		<tr>
			<td colspan="5"></td><td colspan='2'>Petugas,</td>
		</tr>
		<?php 
		$uname=$_SESSION['uname'];
		$data = "SELECT  * FROM t_admin WHERE uname='$uname'";
		$query = mysqli_query($con, $data) or die (mysqli_error($con));
	
		$no = 1;
		while($e = mysqli_fetch_array($query)){
		?>
		<tr>
			<td colspan="5"></td><td colspan='2'><br><br><br><?php echo $e['uname']; ?><?php } ?></td>
		</tr>
	</table>
</body>
</html>