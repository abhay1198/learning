<?php
namespace Abhay\Learning\Model\Config\Source;

class DisplayRadioButton implements \Magento\Framework\Option\ArrayInterface {

    public function toOptionArray()
    {
        return [
          ['value' => 'left', 'label' => __('Left')],
          ['value' => 'right', 'label' => __('Right')],
        ];
    }
}