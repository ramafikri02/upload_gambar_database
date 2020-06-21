<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Data Gambar</title>
    <style>
    .edit, .hapus, .tambah {
        color: white;
    }
    </style>
</head>
<body>
    <?php 
        include("koneksi.php");
        $result=mysqli_query($kon,"SELECT * FROM tb_gambar");
    ?>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID Gambar</th>
            <th scope="col">Nama Gambar</th>
            <th scope="col">Jenis Gambar</th>
            <th scope="col">Ukuran Gambar</th>
            <th scope="col">Gambar</th>
            </tr>
        </thead>
        <?php while($data=mysqli_fetch_array($result)){ ?>
        <tr>
            <td scope="row"> <?php echo $data['id_gambar'] ?> </td>
            <td> <?php echo $data['nama_gambar'] ?> </td>
            <td> <?php echo $data['jenis_gambar'] ?> </td>
            <td> <?php echo $data['ukuran_gambar'] ?> </td>
            <td><img src=" ./uploaded_files/<?php echo $data['nama_gambar'] ?>"style='width: 100px;' alt='Image'></td>
        </tr>
        <?php  } ?>  
    </table>
    <center>
    <button type="button" class="btn btn-success btn-tmbh"><a href="index.php" class="tambah">Upload Gambar</a></button>
    </center>
    <br>
    <br>
</body>
</html>