<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsbmw extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => '2er Active Tourer 2 rad', 'value' => '2er Active Tourer 2 rad'];
    $this->_options[] = ['label' => '2er Active Tourer Hybrid', 'value' => '2er Active Tourer Hybrid'];
    $this->_options[] = ['label' => '2er Grand Tourer (2seterader)', 'value' => '2er Grand Tourer 2seterader'];
    $this->_options[] = ['label' => '3er GT', 'value' => '3er GT'];
    $this->_options[] = ['label' => '3er Touring', 'value' => '3er Touring'];
    $this->_options[] = ['label' => '3er Touring E-Hybrid', 'value' => '3er Touring E-Hybrid'];
    $this->_options[] = ['label' => '5er GT', 'value' => '5er GT'];
    $this->_options[] = ['label' => '5er Touring', 'value' => '5er Touring'];
    $this->_options[] = ['label' => '5er Touring Hybrid', 'value' => '5er Touring Hybrid'];
    $this->_options[] = ['label' => 'iX', 'value' => 'iX'];
    $this->_options[] = ['label' => 'iX3', 'value' => 'iX3'];
    $this->_options[] = ['label' => 'X1', 'value' => 'X1'];
    $this->_options[] = ['label' => 'X1 Hybrid', 'value' => 'X1 Hybrid'];
    $this->_options[] = ['label' => 'X3', 'value' => 'X3'];
    $this->_options[] = ['label' => 'X4', 'value' => 'X4'];
    $this->_options[] = ['label' => 'X5 /X5 Hybrid', 'value' => 'X5 X5 Hybrid'];
    $this->_options[] = ['label' => 'X6', 'value' => 'X6'];
    $this->_options[] = ['label' => 'X7 2 seterader', 'value' => 'X7 2 seterader'];
   
    return $this->_options;
  }
}