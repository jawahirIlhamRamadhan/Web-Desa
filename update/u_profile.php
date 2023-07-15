<?php
include '../koneksi.php';
    $id             = $_POST['id'];
	$kodedesa		= $_POST['kodedesa'];
	$desa			= $_POST['desa'];
	$kodekec		= $_POST['kodekec'];
	$kec 			= $_POST['kec'];
	$kodekab		= $_POST['kodekab'];
	$kab 			= $_POST['kab'];
    $kodeprov       = $_POST['kodeprov'];
    $prov           = $_POST['prov'];
	$kantor	 		= $_POST['kantor'];
	$telp			= $_POST['telp'];
	$kades			= $_POST['kades'];
	$nipkades		= $_POST['nipkades'];
	$sekdes 		= $_POST['sekdes'];
	$nipsekdes		= $_POST['nipsekdes'];
	$keu 			= $_POST['keu'];
	$email 			= $_POST['email'];

    $x				=$_POST['x'];
    $foto         	=$_FILES['logo']['tmp_name'];
    $foto_name     	=$_FILES['logo']['name'];
    $acak        	= rand(1,99);
    $tujuan_foto 	= $acak.$foto_name;
    $tempat_foto 	= '../images/'.$tujuan_foto;
           
    if (isset($_POST['update'])){
    if (!$foto==""){
        $buat_foto=$tujuan_foto;
        $d = '../images/'.$x;
        @unlink ("$d");
        copy ($foto,$tempat_foto);
    }else{
        $buat_foto=$x;
    }
                $qu=mysqli_query($con, "UPDATE t_desa SET
                id             ='$id',
                kodedesa       ='$kodedesa',
                desa           ='$desa',
                kodekec        ='$kodekec',
                kec            ='$kec',
                kodekab        ='$kodekab',
                kab            ='$kab',
                kodeprov       ='$kodeprov',
                prov           ='$prov',
                kantor         ='$kantor',
                telp           ='$telp',
                kades          ='$kades',
                nipkades       ='$nipkades',
                sekdes         ='$sekdes',
                nipsekdes      ='$nipsekdes',
                bendahara      ='$keu',
                email          ='$email',
                logo 		   ='$buat_foto'
                WHERE id='$id'")or die (mysqli_error());
               
        ?><script language="javascript">alert("Data Berhasil Diupdate")</script><?
        ?><script>document.location='../admin.php?page=profile';</script><?php
        }
    ?>