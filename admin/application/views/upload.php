<!DOCTYPE html>
<html>
<head>
    <title>Multiple Upload</title>
</head>
<body>
<div class="container">
    <h2>Multiple Upload</h2>
    <form action="<?php echo base_url().'file/upload_image'?>" method="post" enctype="multipart/form-data">
        <?php for ($i=1; $i <=5 ; $i++) :?>
            <input type="file" name="filefoto<?php echo $i;?>"><br/>
        <?php endfor;?>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
</body>
</html>