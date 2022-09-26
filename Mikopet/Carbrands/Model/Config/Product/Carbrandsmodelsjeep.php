<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsjeep extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Cherokee', 'value' => 'Cherokee'];
    $this->_options[] = ['label' => 'Compass', 'value' => 'Compass'];
    $this->_options[] = ['label' => 'Compass 4xe', 'value' => 'Compass 4xe'];
    $this->_options[] = ['label' => 'Grand Cherokee', 'value' => 'Grand Cherokee'];
    $this->_options[] = ['label' => 'Grand Cherokee hybrid', 'value' => 'Grand Cherokee hybrid'];
    $this->_options[] = ['label' => 'Liberty', 'value' => 'Liberty'];
    $this->_options[] = ['label' => 'Patriot', 'value' => 'Patriot'];
    $this->_options[] = ['label' => 'Renegade', 'value' => 'Renegade'];
    $this->_options[] = ['label' => 'Renegade 4xe', 'value' => 'Renegade 4xe'];
    $this->_options[] = ['label' => 'Wrangler 3 doors', 'value' => 'Wrangler 3 doors'];
    $this->_options[] = ['label' => 'Wrangler 5 doors', 'value' => 'Wrangler 5 doors'];
    $this->_options[] = ['label' => 'Wrangler 5 doors hybrid', 'value' => 'Wrangler 5 doors hybrid'];

    return $this->_options;
  }
}