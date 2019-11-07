<?php
/**
 * Collection
 *
 * @copyright Copyright © 2018 DevStone. All rights reserved.
 * @author    david@nnucomputerwhiz.com
 */

namespace DevStone\UsageCalculator\Model\ResourceModel\MaxUsage;

/**
 * Class Collection
 * @package DevStone\UsageCalculator\Model\ResourceModel\MaxUsage
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\DevStone\UsageCalculator\Model\MaxUsage::class,
            \DevStone\UsageCalculator\Model\ResourceModel\MaxUsage::class);
    }
}
