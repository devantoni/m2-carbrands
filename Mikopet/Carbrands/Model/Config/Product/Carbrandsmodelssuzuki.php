<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelssuzuki extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Across', 'value' => 'Across'];
    $this->_options[] = ['label' => 'Grand Vitara XC 7', 'value' => 'Grand Vitara XC 7'];
    $this->_options[] = ['label' => 'Grand Vitara XC 7 (1 row)', 'value' => 'Grand Vitara XC 7 1 row'];
    $this->_options[] = ['label' => 'Jimny (1 row)', 'value' => 'Jimny 1 row'];
    $this->_options[] = ['label' => 'Liana', 'value' => 'Liana'];
    $this->_options[] = ['label' => 'S-Cross SX4', 'value' => 'S-Cross SX4'];
    $this->_options[] = ['label' => 'Swace', 'value' => 'Swace'];
    $this->_options[] = ['label' => 'Vitara', 'value' => 'Vitara'];

    return $this->_options;
  }
}