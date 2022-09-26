<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelslancia extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Grand voyager (2 rows)', 'value' => 'Grand voyager 2 rows'];
    $this->_options[] = ['label' => 'Phedra', 'value' => 'Phedra'];
    $this->_options[] = ['label' => 'Voyager (2 rows)', 'value' => 'Voyager 2 rows'];

    return $this->_options;
  }
}