<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelssaab extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => '9-3 SportCombi', 'value' => '9-3 SportCombi'];
    $this->_options[] = ['label' => '9-5 SportCombi', 'value' => '9-5 SportCombi'];
    $this->_options[] = ['label' => '9-7X', 'value' => '9-7X'];

    return $this->_options;
  }
}