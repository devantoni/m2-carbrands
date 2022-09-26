<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelstesla extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Model S', 'value' => 'Model S'];
    $this->_options[] = ['label' => 'Model X', 'value' => 'Model X'];
    $this->_options[] = ['label' => 'Model X (adj row)', 'value' => 'Model X adj row'];
    $this->_options[] = ['label' => 'Model Y', 'value' => 'Model Y'];

    return $this->_options;
  }
}