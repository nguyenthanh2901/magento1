<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Used in creating options for Yes|No|Specified config value selection
 *
 */
namespace AHT\HelloWorld\Model\Config\Source;

/**
 * @api
 * @since 100.0.2
 */
class Test implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Thanh')],
            ['value' => 0, 'label' => __('No')],
            ['value' => 2, 'label' => __('One')]
        ];
    }
}
