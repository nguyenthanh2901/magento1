<?php
namespace AHT\HelloWorld\Model\Observer;
use Magento\Framework\Event\ObserverInterface;
class RegisterVisitObserver implements ObserverInterface
{
    protected $logger;
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
   	 $this->logger = $logger;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
   	 $this->logger->debug('Registered');
    }	
}