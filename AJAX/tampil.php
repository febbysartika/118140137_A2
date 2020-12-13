<table border="1" cellpadding="10px">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Action</th>
    </tr>
    <?php
    include "koneksiData.php";
    $hasil=mysqli_query($koneksi, "select * from mahasiswa order by nim asc");
    $no=0;
    while($data = mysqli_fetch_array($hasil)):
        $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button id="<?php echo $data['nim']; ?>" class="hapus"> Hapus </button>
            <button id="<?php echo $data['nim']; ?>" class="update"> Update </button>
        </td>
    </tr>
    <?php endwhile;?>

    <script type='text/javascript'>
    $(document).on('click', '.hapus', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "hapus.php",
            data: {
                id: id
            },
            success: function() {
                $('#tampil_data').load("tampil.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
    </script>
    <script type='text/javascript'>
    $(document).on('click', '.update', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "update.php",
            data: {
                id: id
            },
            success: function() {
                $('#tampil_data').load("tampil.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
    </script>
</table>