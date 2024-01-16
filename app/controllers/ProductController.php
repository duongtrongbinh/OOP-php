<?php
namespace App\Controllers;
use App\Models\Product;
// include_once 'app/models/Product.php';
// include_once 'app/controllers/BaseController.php';
class ProductController extends BaseController{
    public $product;
    function __construct(){
        $this->product = new Product();
    }
    
    function getProduct(){
        // echo 123;
        // die;
        $products = $this->product->getListProduct();
        return $this->render('product.index',compact('products'));
    }
    function showAdd(){
        return $this->render('product.add');
    }
    function add(){
        if(isset($_POST['add'])){
            $this->product->add($_POST['ten_sp'],$_POST['gia']);
            $products = $this->product->getListProduct();
            return $this->render('product.index',compact('products'));
        }
    }
    function showone($id){
        $product=$this->product->edit($id);
        return $this->render('product.edit',compact('product'));
    }
    function update(){
        if(isset($_POST['edit'])){
            $this->product->update($_POST['ten_sp'],$_POST['gia'],$_POST['id']);
            $products = $this->product->getListProduct();
            return $this->render('product.index',compact('products'));
        }
    }
    function delete($id){
        $this->product->delete($id);
        $products = $this->product->getListProduct();
        return $this->render('product.index',compact('products'));
    }


}
