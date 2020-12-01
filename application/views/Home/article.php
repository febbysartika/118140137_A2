<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>Document</title>
</head>
<body>
    
    <div class="title">
        <h2>Daftar Article</h2>
        <a href=" <?php echo base_url('index.php/home/TambahArticle'); ?> ">Tambah Article</a>
    </div>

    <div class="container">
        <div class="infoUser">
            <p>Selamat Datang, <b><?php echo $this->session->userdata('username'); ?></b></p>
            <?php echo anchor('setting/logout', 'Logout', ['class' => 'redDelete']); ?>	
        </div>

        <div class="d-flex">

            <?php foreach($article as $data){ ?>
                <div class="card">
                    <div class="card-body">
                        <a href=""><?php echo $data->title; ?></a>
                        <br><br>
                        <p> <?php echo substr($data->article, 0, 120) ?> </p>
                    </div>
                    <?php if($this->session->userdata('role') == 1111 || $data->user_id == $this->session->userdata('id')){ ?>
                        <div class="card-footer">
                            <div class="d-flex space-around">
                                <?php echo anchor('setting/updateArticle/'.$data->id, 'Update', ['class' => '']); ?>	
                                <?php echo anchor('setting/HapusArticle/'.$data->id, 'Hapus', ['class' => 'redDelete']); ?>	
                            </div> 
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>

</body>
</html>