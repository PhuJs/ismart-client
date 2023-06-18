<?php 
require "./layout/header.php";
?>

<?php
$require = isset($_GET['page'])?$_GET['page']:'home';
$path = "./page/{$require}.php";
if(file_exists($path)){
    require $path;
}else{
    echo "Lỗi 404";
}
?>

<?php 
require "./layout/footer.php";
?>