<?php
include '../koneksi.php';
	$id			    = $_POST['id'];
	$uname			= $_POST['uname'];
	$email 			= $_POST['email'];
	$hp 			= $_POST['hp'];
	$desa 			= $_POST['desa'];
	$level 			= $_POST['level'];

    $x				=$_POST['x'];
    $foto         	=$_FILES['file']['tmp_name'];
    $foto_name     	=$_FILES['file']['name'];
    $acak        	= rand(1,99);
    $tujuan_foto 	= $acak.$foto_name;
    $tempat_foto 	= '../foto/'.$tujuan_foto;
           
    if (isset($_POST['update'])){
    if (!$foto==""){
        $buat_foto=$tujuan_foto;
        $d = '../foto/'.$x;
        @unlink ("$d");
        copy ($foto,$tempat_foto);
    }else{
        $buat_foto=$x;
    }
                $qu=mysqli_query($con, "UPDATE t_admin SET

                uname 	   ='$uname',
                email 	   ='$email',
                hp 		   ='$hp',
                desa 	   ='$desa',
                foto        ='$buat_foto',
                level	   ='$level'
              WHERE id='$id'")or die (mysqli_error());
               
        ?><script language="javascript">alert("Data Berhasil diupdate")</script><?
        ?><script>document.location='../staff.php?page=stafff&id=$id';</script><?php
        }
    ?>