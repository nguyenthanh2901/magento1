<?php
namespace AHT\HelloWorld\Model\Observer;
use Magento\Framework\Event\ObserverInterface;	
class CheckCartQtyObserver implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
   	 if ($observer->getProduct()->getQty() %2 != 0) {
   		throw new \Exception('Qty must be even');
   	 }
    }
}