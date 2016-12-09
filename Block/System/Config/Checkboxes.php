<?php

namespace Magebuzz\Christmasdecoration\Block\System\Config;
 
class Checkboxes extends \Magento\Config\Block\System\Config\Form\Field
{
    const CONFIG_PATH = 'christmasdecoration/snowfall/pattern';
 
    protected $_template = 'Magebuzz_Christmasdecoration::system/config/checkboxes.phtml';
 
    protected $_values = null;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $this->setNamePrefix($element->getName())
            ->setHtmlId($element->getHtmlId());
 
        return $this->_toHtml();
    }
     
    public function getValues()
    {
        $values = [];
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
 
        foreach ($objectManager->create('Magebuzz\Christmasdecoration\Model\Config\Source\SnowfallPattern')->toOptionArray() as $value) {
            $values[$value['value']] = $value['label'];
        }
 
        return $values;
    }

    public function getIsChecked($name)
    {
        return in_array($name, $this->getCheckedValues());
    }
    /**
     * 
     *get the checked value from config
     */
    public function getCheckedValues()
    {
        if (is_null($this->_values)) {
            $data = $this->getConfigData();
            if (isset($data[self::CONFIG_PATH])) {
                $data = $data[self::CONFIG_PATH];
            } else {
                $data = '';
            }
            $this->_values = explode(',', $data);
        }
 
        return $this->_values;
    }
    
}