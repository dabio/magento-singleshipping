<?php
 /**
 *
 *
 * PHP version 5.3
 *
 * @category  Dabio
 * @package   Dabio_SingleShipping
 * @author    Danilo Braband <dbraband@gmail.com>
 * @copyright 2013 Danilo Braband
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version   GIT: <0.1.0>
 * @link      http://dab.io/
 */

/**
 * Class Dabio_SingleShipping_Model_Observer
 *
 * @category Dabio
 * @package  Dabio_SingleShipping
 * @author    Danilo Braband <dbraband@gmail.com>
 * @license  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version  Release: <package_version>
 * @link      http://dab.io/
 */
class Dabio_SingleShipping_Model_Observer
{
    /**
     * Sets the default shipping method of the cart.
     *
     * @param Varien_Event_Observer $observer
     */
    public function applySingleShippingMethod(Varien_Event_Observer $observer)
    {
        $defaultShippingMethod = Mage::getStoreConfig('shipping/singleshipping/default_shipping_method');
        $defaultShippingCountry = Mage::getStoreConfig('shipping/singleshipping/default_shipping_country');

        $observer->getCart()->getQuote()
            ->getShippingAddress()
            ->setCountryId($defaultShippingCountry)
            ->setCollectShippingRates(true)
            ->setShippingMethod($defaultShippingMethod);
    }
}
