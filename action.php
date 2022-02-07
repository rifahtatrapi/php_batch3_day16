<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Pattern;

if (isset($_GET['pages']))
{

    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'detail')
    {
        $product = new Product();
        $result = $product->getAllProductById($_GET['id']);
        include 'pages/detail.php';
    }
    elseif ($_GET['pages'] == 'pattern')
    {
        include  'pages/pattern.php';
    }
}
elseif (isset($_POST['pattern_btn']))
{
    $pattern = new Pattern($_POST);
    $pattern->index();
    include 'pages/pattern.php';

}
