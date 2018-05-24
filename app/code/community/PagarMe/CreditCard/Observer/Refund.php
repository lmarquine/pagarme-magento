<?php

class PagarMe_CreditCard_Observer_Refund{

    /**
     * @param Varien_Event_Observer $observer
     * @return $this
     */
    public function creditmemoRefund(Varien_Event_Observer $observer)
    {
       // $creditmemo = $observer->getEvent()->getCreditmemo();
       // if ($creditmemo->getFeeAmount()) {
       //     $order = $creditmemo->getOrder();
       //     $order->setFeeAmountRefunded($order->getFeeAmountRefunded() + $creditmemo->getFeeAmount());
       //     $order->setBaseFeeAmountRefunded($order->getBaseFeeAmountRefunded() + $creditmemo->getBaseFeeAmount());
       // }
        Mage::log('Passei aqui vacilão!!!');
        return $this;
    }
}
