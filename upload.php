<?php
include("koneksi.php");
$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];
$fileSize = $_FILES['uploadedFile']['size'];
$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));

$newFileName = md5(time(). $fileName) . '.' . $fileExtension;

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {

    $allowedfileExtensions = array('jpg', 'png');

    if(in_array($fileExtension, $allowedfileExtensions) === true){
        if($fileSize < 2048000){			
            $uploadFileDir = './uploaded_files/';
            $dest_path = $uploadFileDir . $newFileName;
            move_uploaded_file($fileTmpPath, $dest_path);
            $query = mysqli_query($kon, "insert into tb_gambar (id_gambar,nama_gambar,jenis_gambar,ukuran_gambar) values ('NULL', '$newFileName','$fileType','$fileSize')");
            if($query){
                echo 'Gambar berhasil di Upload. <br>';
                echo "<a href='tampil_gambar.php'>Klik disini</a> untuk melihat Gambar.";
            }else{
                echo 'Gambar gagal di Upload.';
            }
        }else{
            echo 'Ukuran file terlalu besar.';
        }
    }else{
        echo 'Jenis file yang di upload tidak didukung,';
    }
}
?>