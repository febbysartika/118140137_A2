<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas</title>
</head>
<body>
    <h1>
        DATA MAHASISWA<br>
        ======================================
    </h1>
    <h2>
        TAMBAH DATA
    </h2>
        <?php if(isset($_GET['tambahData']) && $_GET['tambahData'] == 1){ ?>
            <div class="alert alert-success" role="alert">
                Berhasil Menambahkan Data.
            </div>
        <?php } ?>

        <form action="tambah.php" method="post">
            <div class="form-group">
                <label>NRP</label>
                <input type="text" name="nrp" class="form-control">
            </div><br>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="nama" class="form-control">
            </div><br>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div><br>
            <div class="form-group">
                <label>Jurusan</label>
                <select class="form-control" name="jurusan">
                    <option value="IF123">Informatika</option>
                    <option value="DKV123">DKV</option>
                    <option value="SI123">Sistem Informasi</option>
                    <option value="AKT123">Aktuaria</option>
                    <option value="IK123">Ilmu Komputer</option>
                </select>
            </div><br>
            <input type="submit" class="w-100 btn btn-primary" name="submitData" value="Tambah Data">
        </form>

<hr>

        <?php include 'connect.php'; 

            if(isset($_GET['search'])){
                $cari = $_GET['search']; 
                $getData = mysqli_query($koneksi, "SELECT * FROM mahasiswa JOIN jurusan ON mahasiswa.jurusan = jurusan.id_jur WHERE nama LIKE '%".$cari."%'") or die(mysqli_error());
            } else {
                $getData = mysqli_query($koneksi, "SELECT * FROM mahasiswa, jurusan WHERE mahasiswa.jurusan = jurusan.id_jur ") or die(mysqli_error());
            }
        ?>

        <br>

    <h2>Data</h2>
        <table class="table">
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            <?php while($data = mysqli_fetch_array($getData)){ ?>
                <tr>
                    <th> <?php echo $data['nrp'] ?> </th>
                    <th> <?php echo $data['nama'] ?> </th>
                    <th> <?php echo $data['alamat'] ?> </th>
                    <th> <?php echo $data['nama_jurusan'] ?> </th>
                    <th> 
                    <a href="hapus.php?NRP=<?php echo $data['nrp']; ?>"> Delete </a>
                    </th>
                </tr>
            <?php } ?>
        </table>

        <?php if(isset($_GET['delete']) && $_GET['delete'] == 1){ ?>
            <div class="alert alert-success" role="alert">
                Berhasil Menghapus Data.
            </div>
        <?php } ?>

        <h2> CARI DATA </h2>
        <form action="" method="get" class="mb-5">
            <div class="form-group w-100">
                <input type="text" name="search" placeholder="Cari Nama" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" class="form-control">
            </div>
            <input class="w-100 btn btn-primary" type="submit" value="cari">
        </form>
        
</body>
</html>