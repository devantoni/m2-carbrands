<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelshyundai extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'i30 Wagon', 'value' => 'i30 Wagon'];
    $this->_options[] = ['label' => 'i40 Wagon', 'value' => 'i40 Wagon'];
    $this->_options[] = ['label' => 'Ix35', 'value' => 'Ix35'];
    $this->_options[] = ['label' => 'Santa Fe', 'value' => 'Santa Fe'];
    $this->_options[] = ['label' => 'Tucson', 'value' => 'Tucson'];
    
    return $this->_options;
  }
}