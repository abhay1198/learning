<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Abhay\Learning\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class DisplayDropDown implements ArrayInterface
{

    const PENDING     = '0';
    const APPROVED    = '1';
    const DISAPPROVED = '2';

    public function toOptionArray()
    {
        $options = [];
        foreach ($this->toArray() as $value => $label) {
            $options[] = [
                'value' => $value,
                'label' => $label
            ];
        }
        return $options;
    }

    public function toArray()
    {
        return [
            self::PENDING     => __('Pending'),
            self::APPROVED    => __('Approved'),
            self::DISAPPROVED => __('Disapproved')
        ];
    }
}