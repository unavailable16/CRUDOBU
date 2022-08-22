<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>CRUD App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

        <div class="container mt-5">

            <?php include('message.php') ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambahkan Siswa
                                <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST">
                                
                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email Siswa</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Nomor Handphone</label>
                                    <input type="text" name="no_hp" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                                </div>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body> 
    
</html>