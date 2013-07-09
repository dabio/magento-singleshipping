<?php

class Dabio_SingleShipping_Model_Source_ShippingMethod
{
    /**
     * Returns all activated shipping methods.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->getAllShippingMethods();
    }

    /**
     * Returns all activated shipping methods.
     *
     * @return array
     */
    public function getAllShippingMethods()
    {
        $methods = Mage::getSingleton('shipping/config')->getActiveCarriers();
        $options = array();

        foreach($methods as $_code => $_carrier) {
            if (!$_carrier->getAllowedMethods())
                continue;

            if(!$_title = Mage::getStoreConfig("carriers/{$_code}/title"))
                $_title = $_code;
            array_push($options, array('value' => $_code, 'label' => $_title));
        }
        return $options;
    }

};
