<?php
/**
 * File
 *
 * @copyright Copyright © 2018 DevStone. All rights reserved.
 * @author    david@nnucomputerwhiz.com
 */

namespace DevStone\UsageCalculator\Block\Usage\View\Options\Type;

/**
 * Product options text type block
 *
 * @api
 * @since 100.0.2
 */
class File extends \DevStone\UsageCalculator\Block\Usage\View\Options\AbstractOptions
{
    /**
     * Returns info of file
     *
     * @return string
     */
    public function getFileInfo()
    {
        $info = $this->getProduct()->getPreconfiguredValues()->getData('options/' . $this->getOption()->getId());
        if (empty($info)) {
            $info = new \Magento\Framework\DataObject();
        } elseif (is_array($info)) {
            $info = new \Magento\Framework\DataObject($info);
        }
        return $info;
    }
}
