<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsmini extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Clubman Transport', 'value' => 'Clubman Transport'];
    $this->_options[] = ['label' => 'Countryman (adj row)', 'value' => 'Countryman adj row'];

    return $this->_options;
  }
}