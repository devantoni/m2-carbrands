<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelspeugeot extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => '206 SW', 'value' => '206 SW'];
    $this->_options[] = ['label' => '207 SW', 'value' => '207 SW'];
    $this->_options[] = ['label' => '3008', 'value' => '3008'];
    $this->_options[] = ['label' => '3008 Hybrid', 'value' => '3008 Hybrid'];
    $this->_options[] = ['label' => '307 SW', 'value' => '307 SW'];
    $this->_options[] = ['label' => '308 SW', 'value' => '308 SW'];
    $this->_options[] = ['label' => '4007', 'value' => '4007'];
    $this->_options[] = ['label' => '4008', 'value' => '4008'];
    $this->_options[] = ['label' => '407 SW', 'value' => '407 SW'];
    $this->_options[] = ['label' => '5008 (2 rows)', 'value' => '5008 2 rows'];
    $this->_options[] = ['label' => '508 RXH', 'value' => '508 RXH'];
    $this->_options[] = ['label' => '508 SW', 'value' => '508 SW'];
    $this->_options[] = ['label' => '807', 'value' => '807'];
    $this->_options[] = ['label' => 'Boxer', 'value' => 'Boxer'];
    $this->_options[] = ['label' => 'Expert', 'value' => 'Expert'];
    $this->_options[] = ['label' => 'Partner', 'value' => 'Partner'];
    $this->_options[] = ['label' => 'Partner (1 row)', 'value' => 'Partner 1 row'];
    $this->_options[] = ['label' => 'Partner (2 row)', 'value' => 'Partner 2 row'];
    $this->_options[] = ['label' => 'Rifter (2 rows)', 'value' => 'Rifter 2 rows'];
    $this->_options[] = ['label' => 'Rifter E (2 rows)', 'value' => 'Rifter E 2 rows'];
    $this->_options[] = ['label' => 'Traveller (1 row)', 'value' => 'Traveller 1 row'];
    $this->_options[] = ['label' => 'Traveller (2 rows)', 'value' => 'Traveller 2 rows'];
    $this->_options[] = ['label' => 'Traveller E (1 row)', 'value' => 'Traveller E 1 row'];
    $this->_options[] = ['label' => 'Traveller E (2 rows)', 'value' => 'Traveller E 2 rows'];

    return $this->_options;
  }
}