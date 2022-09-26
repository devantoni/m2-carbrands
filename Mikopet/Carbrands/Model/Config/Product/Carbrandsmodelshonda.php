<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelshonda extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'CR-V', 'value' => 'CR-V'];
    $this->_options[] = ['label' => 'CR-V Hybrid', 'value' => 'CR-V Hybrid'];
    $this->_options[] = ['label' => 'Fit', 'value' => 'Fit'];
    $this->_options[] = ['label' => 'Insight', 'value' => 'Insight'];
    
    return $this->_options;
  }
}