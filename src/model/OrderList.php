<?php
namespace WalmartSellerAPI\model;

use WalmartSellerAPI\model\AbstractModel;

class OrderList extends AbstractModel {

    public function __construct($data = null) {
        parent::__construct(array(
            'orders/PurchaseOrderV3.3',
            'orders/list'
        ), $data);
    }
}
?>