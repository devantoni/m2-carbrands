<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsaudi extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'A4/S4 Avant', 'value' => 'A4-S4 Avant'];
    $this->_options[] = ['label' => 'A4/S4 Avant G-tron', 'value' => 'A4-S4 Avant G-tron'];
    $this->_options[] = ['label' => 'A6/S6 Avant', 'value' => 'A6-S6 Avant'];
    $this->_options[] = ['label' => 'E-tron', 'value' => 'E-tron'];
    $this->_options[] = ['label' => 'E-tron Sportback', 'value' => 'E-tron Sportback'];
    $this->_options[] = ['label' => 'G-tron A4 Avant', 'value' => 'G-tron A4 Avant'];
    $this->_options[] = ['label' => 'Q3', 'value' => 'Q3'];
    $this->_options[] = ['label' => 'Q4 E-tron', 'value' => 'Q4 E-tron'];
    $this->_options[] = ['label' => 'Q4 Sportback E-tron', 'value' => 'Q4 Sportback E-tron'];
    $this->_options[] = ['label' => 'Q5', 'value' => 'Q5'];
    $this->_options[] = ['label' => 'Q5 Sportsback', 'value' => 'Q5 Sportsback'];
    $this->_options[] = ['label' => 'Q7 3 seterader', 'value' => 'Q7 3 seterader'];
    $this->_options[] = ['label' => 'Q7 2 seterader', 'value' => 'Q7 2 seterader'];
   
    return $this->_options;
  }
}