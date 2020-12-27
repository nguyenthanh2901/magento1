<?php
namespace AHT\HelloWorld\Controller\Index;
class Collection extends \Magento\Framework\App\Action\Action {
    // public function execute() {
    //     $productCollection = $this->_objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection')->setPageSize(10,1);
    //     print_r($productCollection->getData());
    // }
    public function execute() {
        $productCollection = $this->_objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addFieldToSelect([
                'name',
                'price',
                'image',
            ])
            ->setPageSize(10,1);
            // $test = $productCollection;
            // print_r($test->getData());

            foreach($productCollection as $pro)
            {
                print_r("<pre>" . print_r($pro->getData()). "</pre>");
            }
       
    }
}