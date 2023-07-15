<?php
include '../koneksi.php';
	$nkk			= $_POST['nkk'];
	$nik			= $_POST['nik'];
	$nama 			= $_POST['nama'];
	$jk 			= $_POST['jk'];
	$tmpl 			= $_POST['tmp_lahir'];
	$tgll 			= $_POST['tgl_lahir'];
	$kwng	 		= $_POST['kwng'];
	$agama			= $_POST['agama'];
	$status			= $_POST['status'];
	$pend			= $_POST['pend'];
	$kerjaan 		= $_POST['kerjaan'];
    $desa           = $_POST['desa'];
    $kec            = $_POST['kec'];
    $kab            = $_POST['kab'];
    $prov           = $_POST['prov'];
	$almt 			= $_POST['almt'];
	$hp 			= $_POST['hp'];
	$shdk 			= $_POST['shdk'];
	$ket 			= $_POST['ket'];

    $x				=$_POST['x'];
    $foto         	=$_FILES['file']['tmp_name'];
    $foto_name     	=$_FILES['file']['name'];
    $acak        	= rand(1,99);
    $tujuan_foto 	= $acak.$foto_name;
    $tempat_foto 	= '../fotowarga/'.$tujuan_foto;
           
    if (isset($_POST['update'])){
    if (!$foto==""){
        $buat_foto=$tujuan_foto;
        $d = '../fotowarga/'.$x;
        @unlink ("$d");
        copy ($foto,$tempat_foto);
    }else{
        $buat_foto=$x;
    }
                $qu=mysqli_query($con, "UPDATE t_penduduk SET

                nkk 		='$nkk',
                nik 		='$nik',
                nama 		='$nama',
                jk 			='$jk',
                tmp_lahir	='$tmpl',
                tgl_lahir	='$tgll',
                kwng 		='$kwng',
                agama 		='$agama',
                status 		='$status',
                pend 		='$pend',
                kerjaan		='$kerjaan',
                prov        ='$prov',
                kab         ='$kab',
                kec         ='$kec',
                desa        ='$desa',
                alamat 		='$almt',
                hp 			='$hp',
                shdk 		='$shdk',
                ket 		='$ket',
                foto 		='$buat_foto'
                WHERE nik='$nik'")or die (mysqli_error());
               
        ?><script language="javascript">alert("Data Berhasil Diupdate")</script><?
        ?><script>document.location='../admin.php?page=penduduk';</script><?php
        }
    ?>