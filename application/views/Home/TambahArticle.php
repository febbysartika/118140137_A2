<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Article</title>
</head>
<body>    
    <div class="text-center-title banner">
        <h1>Tambah Article</h1>
    </div>

    <div class="container mt-5">
        <?php echo form_open_multipart('setting/AksitambahArticles'); ?>
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="title" placeholder="Judul Artikel">
            </div>
            <div class="form-group">
                <label>Artikel</label>
                <textarea class="form-control" name="article" rows="4"></textarea>
            </div>
            <br>
            <input type="submit" value="Tambah Artikel" class="">
        </form>
</body>
</html>