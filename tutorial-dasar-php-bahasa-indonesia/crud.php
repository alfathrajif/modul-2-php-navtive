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
            <form action="simpan.php" method="post">
                <label for="">Nim</label>
                <input type="text" name="nim">
                <label for="">Nama</label>
                <input type="text" name="nama">
                <label for="">Jurusan</label>
                <select name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Informasi">Sistem Informasi</option>
                </select>
                <br>
                <button type="submit">Simpan</button>
            </form>
        </div>
    
    <table width="100%" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include 'conn.php';
                $no = 1;
                $query = mysqli_query($conn,"SELECT * from mahasiswa");
                while ($data = mysqli_fetch_object($query)) {
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data->nim ?></td>
                <td><?php echo $data->nama ?></td>
                <td><?php echo $data->jurusan ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data->id_mahasiswa ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $data->id_mahasiswa ?>">Hapus</a>
                </td>
            </tr>
            <?php
                $no++;
                }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>