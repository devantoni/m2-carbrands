<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelslincoln extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'MKC', 'value' => 'MKC'];
    $this->_options[] = ['label' => 'MKC (adj seat)', 'value' => 'MKC adj seat'];
    $this->_options[] = ['label' => 'MKT (2 rows)', 'value' => 'MKT 2 rows'];
    $this->_options[] = ['label' => 'MKX (SUV)', 'value' => 'MKX SUV'];
    $this->_options[] = ['label' => 'Navigator (2 rows)', 'value' => 'Navigator 2 rows'];

    return $this->_options;
  }
}