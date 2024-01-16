<?php
// require_once 'app/models/BaseModel.php';
namespace App\Models;

class Product extends BaseModel{
    function getListProduct() {
        $sql = "select * from product";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function add($ten_sp,$gia){
        $sql = "INSERT INTO `product` (`ten_sp`, `gia`) VALUES (?,?);";
        $this->setQuery($sql);
        return $this->execute([$ten_sp,$gia]);
    }
    function edit($id){
        $sql = "select *from product where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    function update($ten_sp,$gia,$id){
        $sql = "UPDATE `product` SET `ten_sp` = ?, `gia` = ? WHERE `product`.`id` = ?";
        $this->setQuery($sql);
        return $this->execute([$ten_sp,$gia,$id]);
    }
    function delete($id){
        $sql = "DELETE FROM product WHERE `product`.`id` = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}

?>