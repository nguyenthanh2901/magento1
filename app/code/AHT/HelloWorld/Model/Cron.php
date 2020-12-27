<?php
namespace AHT\HelloWorld\Model;

class Cron
{
    protected $objectManager;
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        $this->logger = $logger;
        $this->objectManager = $objectManager;
    }
    public function checkSubscriptions()
    {
        $subscription = $this->objectManager->create("AHT\HelloWorld\Model\Subscription");
        $subscription->setFirstname("Cron");
        $subscription->setLastname("Job");
        $subscription->setEmail("cron.job@example.com");
        $subscription->setMessage("Created from cron");
        $subscription->save();
        $this->logger->debug("Test subscription added");
    }
}
