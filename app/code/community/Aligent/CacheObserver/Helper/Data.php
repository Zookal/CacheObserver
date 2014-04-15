<?php

/**
 * @category   Aligent
 * @package    Aligent_CacheObserver
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Aligent_CacheObserver_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @var Mage_Core_Model_Store
     */
    protected $_store;

    /**
     * @param Mage_Core_Model_Store $store
     */
    public function __construct(Mage_Core_Model_Store $store = null)
    {
        $this->_store = $store;
    }

    /**
     * @return Mage_Core_Model_Store
     */
    public function getStore()
    {
        if (!$this->_store) {
            // @codeCoverageIgnoreStart
            $this->_store = Mage::app()->getStore();
        }
        // @codeCoverageIgnoreEnd
        return $this->_store;
    }

    /**
     * @return int
     */
    public function getCacheLifeTime()
    {
        return (int)$this->getStore()->getConfig('system/cacheobserver/cache_life_time');
    }
}
