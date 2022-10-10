<?php
namespace Abhay\Learning\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    protected $context;

    public function __construct(
      Context $context,
      \Abhay\Learning\Model\Config\Source\DisplayDropDown $dropdown,
      \Abhay\Learning\Model\Config\Source\MultiOption $multioption
    )
    {
        $this->context = $context;
        $this->dropdown = $dropdown;
        $this->multioption = $multioption;
        parent::__construct($context);
    }
    public function isEnable()
    {
        return $this->scopeConfig->getValue('learning/general/enable', ScopeInterface::SCOPE_STORE);
    }
    public function DisplayMessage()
    {
       return $this->scopeConfig->getValue('learning/general/display_text', ScopeInterface::SCOPE_STORE);
    }
    public function DisplayDropDown()
    {
       return $this->scopeConfig->getValue('learning/general/display_dropdown', ScopeInterface::SCOPE_STORE);
    }
    public function RadioButtton()
    {
       return $this->scopeConfig->getValue('learning/general/redio_button', ScopeInterface::SCOPE_STORE);
    }
    public function MultiSelect()
    {
       return $this->scopeConfig->getValue('learning/general/multi_option', ScopeInterface::SCOPE_STORE);
    }
    public function TextMsg()
    {
       return $this->scopeConfig->getValue('learning/general/text_area', ScopeInterface::SCOPE_STORE);
    }
    // to get drop down value in template
    public function getDropDownValue()
    {
      return $this->dropdown->toArray();
    }
    // to get multi option value in template
    public function getMultiOptionValue()
    {
      return $this->multioption->toOptionArray();
    }
}