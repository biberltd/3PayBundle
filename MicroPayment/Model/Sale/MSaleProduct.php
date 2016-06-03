<?php
namespace  MicroPayment\Model\Sale;
/**
 * MicroPayment library in PHP.
 *
 * @version   0.1.0
 */


use MicroPayment\Common\BaseModel;

class MSaleProduct extends BaseModel
{
    public function __construct(){
        $this->ProductId = 0;
        $this->Unit = 1;
    }
    public function setProductCategory($ProductCategory){
        $this->ProductCategory = $ProductCategory;
    }
    public function setProductDescription($ProductDescription){
        $this->ProductDescription = $ProductDescription;
    }
    public function setPrice($Price){
        $this->Price = (double)$Price;
    }
}