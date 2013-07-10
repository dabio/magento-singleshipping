<?php

class Dabio_SingleShipping_Model_Source_ShippingMethod
    extends Mage_Adminhtml_Model_System_Config_Source_Shipping_Allmethods
{
    /**
     * Returns all active methods.
     *
     * @param bool $isActiveOnlyFlag
     *
     * @return array
     */
    public function toOptionArray($isActiveOnlyFlag = true)
    {
        // true for only active methods
        $isActiveOnlyFlag = true;

        // get all methods from the parent model
        $methods = parent::toOptionArray($isActiveOnlyFlag);

        // Shift the first method from the array. First element is empty.
        array_shift($methods);

        return $methods;
    }
};
