<?php
require_once './autoload.php';
require_once("./views/includes/header.php");


$home = new HomeController();

$pages = ['home','cart','dashboard','updateProduct','deleteProduct','addProduct','emptyCart','show','cancelCart','register','login','checkout','logout','products','orders','addOrder','category','EditProduct','addProduct','Users','Profil','addCategory','ShowCategory','deletCategory','CommandeStatut'];
if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        if($page === "dashboard"|| $page === "addProduct" ||  $page === "deleteProduct" ||  $page === "products" ||  $page === "orders" || $page === "Users" || $page === "addCategory" || $page === "ShowCategory" || $page === "deletCategory"){
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
                $admin = new AdminController();
                $admin->index($page);
            }else{
                include('views/includes/404.php');
            }
        }else{
             $home->index($page);
        }
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index('home');
}
require_once("./views/includes/footer.php");
