<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsford extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    
    $this->_options = [];
    $this->_options[] = ['label' => 'Bronco', 'value' => 'Bronco'];
    $this->_options[] = ['label' => 'C-Max 2 seterader', 'value' => 'C-Max 2 seterader'];
    $this->_options[] = ['label' => 'Ecosport 1 seterad', 'value' => 'Ecosport 1 seterad'];
    $this->_options[] = ['label' => 'Edge', 'value' => 'Edge'];
    $this->_options[] = ['label' => 'Escape', 'value' => 'Escape'];
    $this->_options[] = ['label' => 'Expedition 2 seterader', 'value' => 'Expedition 2 seterader'];
    $this->_options[] = ['label' => 'Expedition 3 seterader', 'value' => 'Expedition 3 seterader'];
    $this->_options[] = ['label' => 'Explorer', 'value' => 'Explorer'];
    $this->_options[] = ['label' => 'Flex 2 seterader', 'value' => 'Flex 2 seterader'];
    $this->_options[] = ['label' => 'Galaxy / 2 seterader', 'value' => 'Galaxy 2 seterader'];
    $this->_options[] = ['label' => 'Kuga', 'value' => 'Kuga'];
    $this->_options[] = ['label' => 'Limited', 'value' => 'Limited'];
    $this->_options[] = ['label' => 'Mondeo Stasjonsvogn /ikke Hybrid', 'value' => 'Mondeo Stasjonsvogn ikke Hybrid'];
    $this->_options[] = ['label' => 'Mondeo Stasjonsvogn Hybrid', 'value' => 'Mondeo Stasjonsvogn Hybrid'];
    $this->_options[] = ['label' => 'S-Max 2 seterader', 'value' => 'S-Max 2 seterader'];
    $this->_options[] = ['label' => 'Tourneo 2 seterader', 'value' => 'Tourneo 2 seterader'];

   
    return $this->_options;
  }
}