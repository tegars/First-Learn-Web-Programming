<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CKEditor</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- <script src="//cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script> -->
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
    	<hr/>
    	<h2 align="center">Summernote Basic</h2>
    	<hr/>
    	
    	<div class="container">
            <form method="post" action="index.php">
                <textarea name="artikel"></textarea>
                <hr/>
                <p align="center"><button class="btn btn-warning" type="submit" name="upload">Upload Artikel</button></p>
            </form>
    	</div>
        
        
        <script>
            CKEDITOR.replace('artikel');
        </script>
    </body>
</html>
<?php 
    if(isset($_POST['upload'])){
        $artikel= $_POST['artikel'];
        $conn= new PDO('mysql:host=localhost; dbname=MyPlugin', 'root', '');
        $cek= $conn->query(" insert into ckeditor(coretan) values('$artikel'); ");
        if(!$cek){
            echo 'gagal simpan';
        }else{
            echo 'berhasil simpan';
        }

    }
?>