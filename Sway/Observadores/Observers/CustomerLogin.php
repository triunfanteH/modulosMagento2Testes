<?php
namespace Sway\Observadores\Observers;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class CustomerLogin implements ObserverInterface {
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute(Observer $observer)
    {
        $this->logger->info('OLA  Observer Atingido',$observer->debug());
    }
}

