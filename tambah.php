<?php session_start();

?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f3a0e80f3e.js" crossorigin="anonymous"></script>
    <title>Tambah Data</title>
</head>

<body id="signup-page">
    <main >
        <div class="container-fluid" id="tambah">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-6 m-auto">
                    <div class="card mt-5">
                        <h2 class="text-center mt-3">Tambah Data</h2>

                        <form action="tambahDB.php" method="post" class="row d-flex justify-content-center" enctype="multipart/form-data">
                            <div class="form-group col-10">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" aria-label="email" aria-describedby="basic-addon1" id="nama" name="nama" required>

                            </div>
                            <div class="form-group col-10">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" aria-label="nama" aria-describedby="basic-addon1" id="alamat" name="alamat" required>

                            </div>
                            <div class="form-group col-10">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" aria-label="foto" aria-describedby="basic-addon1" id="foto" name="foto">
                            </div>
                            <button type="submit" name="signup" class="form-group col-10 btn btn-success text-center">Tambah</button>
                            <a href="index.php" class="form-group col-10 btn btn-primary text-center">Kembali</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <div class="javascript">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </div>
</body>

</html>
