<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsmazda extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => '5', 'value' => '5'];
    $this->_options[] = ['label' => '5 (2 rows)', 'value' => '5 2 rows'];
    $this->_options[] = ['label' => '6 Sport Wagon', 'value' => '6 Sport Wagon'];
    $this->_options[] = ['label' => 'CX 5', 'value' => 'CX 5'];
    $this->_options[] = ['label' => 'CX 7', 'value' => 'CX 7'];
    $this->_options[] = ['label' => 'CX9 (2 rows)', 'value' => 'CX9 2 rows'];
    $this->_options[] = ['label' => 'Monterey (2 rows)', 'value' => 'Monterey 2 rows'];
    $this->_options[] = ['label' => 'MX 30', 'value' => 'QMX 303'];
    $this->_options[] = ['label' => 'Tribute', 'value' => 'Tribute'];

    return $this->_options;
  }
}