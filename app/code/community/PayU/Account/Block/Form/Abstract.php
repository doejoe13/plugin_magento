<?php

abstract class PayU_Account_Block_Form_Abstract extends Mage_Payment_Block_Form {


    protected function _construct()
    {
        $this->setTemplate('payu_account/form.phtml');

        parent::_construct();
    }

    /**
     * Prepare layout.
     * Add files to use PayU
     *
     * @return Mage_Core_Block_Abstract
     */
    protected function _prepareLayout()
    {
        if ($head = $this->getLayout()->getBlock('head')) {
            $head->addCss('css/payu/payu.css');
        }
        return parent::_prepareLayout();
    }

    /**
     * @return string
     */
    protected function getPayuLogo()
    {
        return $this->getSkinUrl('images/payu/payu_logo.png');
    }

    /**
     * @return string
     */
    protected function getCardLogos()
    {
        return $this->getSkinUrl('images/payu/payu_cards.png');
    }

}
