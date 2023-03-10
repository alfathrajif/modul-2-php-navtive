<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Mahasiswa</title>
    <style type="text/css">
        * {
            margin:0;
            padding:0;
            font-family: "segoe UI";
        }
        .table-wrapper {
            width:90%;
            margin:100px auto;
        }
        .from-wrapper{
            padding:20px 0;
        }
        label {
            display: block;
            padding: 5px 0;
        }
        input,select {
            padding:5px 10px;
            width:20%;
        }
        td {
            padding:10px;
        }
        button {
            margin-top:10px;
            padding:5px 10px;

        }
    </style>
</head>
<body>
    <div class="table-wrapper">
        <div class="from-wrapper">
            <?php 
                include 'conn.php';
                $id = $_GET['id'];
                $query = mysqli_query($conn,"select * from mahasiswa where id_mahasiswa = '$id'");
                while($data = mysqli_fetch_object($query)){

             
            ?>
            <form action="update.php?id=<?php echo $id?>" method="post">
                <label for="">Nim</label>
                <input type="text" name="nim" value="<?php echo $data->nim ?>">
                <label for="">Nama</label>
                <input type="text" name="nama" value="<?php echo $data->nama ?>>
                <label for=">Jurusan</label>
                <select name="jurusan">
                    <option value="Teknik Informatika" <?php if($data->jurusan == 'Teknik Informatika'){echo 'selected';}?>>Teknik Informatika</option>
                    <option value="Teknik Informasi" <?php if($data->jurusan == 'Teknik Informasi'){echo 'selected';}?>>Sistem Informasi</option>
                </select>
                <br>
                <button type="submit">Simpan</button>
            </form>
            <?php 
               }
            ?>
        </div>
        
    </div>
</body>
</html>