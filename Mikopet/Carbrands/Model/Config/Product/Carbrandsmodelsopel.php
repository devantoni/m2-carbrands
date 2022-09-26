<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsopel extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Antara', 'value' => 'Antara'];
    $this->_options[] = ['label' => 'Astra', 'value' => 'Astra'];
    $this->_options[] = ['label' => 'Astra Sports Tourer', 'value' => 'Astra Sports Tourer'];
    $this->_options[] = ['label' => 'Combo', 'value' => 'Combo'];
    $this->_options[] = ['label' => 'Combo-E', 'value' => 'Combo-E'];
    $this->_options[] = ['label' => 'Frontera', 'value' => 'Frontera'];
    $this->_options[] = ['label' => 'Grandland X', 'value' => 'Grandland X'];
    $this->_options[] = ['label' => 'Grandland X Hybrid', 'value' => 'Grandland X Hybrid'];
    $this->_options[] = ['label' => 'Insignia Country Tourer', 'value' => 'Insignia Country Tourer'];
    $this->_options[] = ['label' => 'Insignia Sports Tourer', 'value' => 'Insignia Sports Tourer'];
    $this->_options[] = ['label' => 'Meriva', 'value' => 'Meriva'];
    $this->_options[] = ['label' => 'Meriva (1 row)', 'value' => 'Meriva 1 row'];
    $this->_options[] = ['label' => 'Meriva (2 rows)', 'value' => 'Meriva 2 rows'];
    $this->_options[] = ['label' => 'Signum', 'value' => 'Signum'];
    $this->_options[] = ['label' => 'Vectra Caravan', 'value' => 'Vectra Caravan'];
    $this->_options[] = ['label' => 'Zafira', 'value' => 'Zafira'];
    $this->_options[] = ['label' => 'Zafira (1 row)', 'value' => 'Zafira 1 row'];
    $this->_options[] = ['label' => 'Zafira (2 rows)', 'value' => 'Zafira 2 rows'];
    $this->_options[] = ['label' => 'Zafira Life + E (1 row)', 'value' => 'Zafira Life + E 1 row'];
    $this->_options[] = ['label' => 'Zafira Life + E (2 rows)', 'value' => 'Zafira Life + E 2 rows'];

    return $this->_options;
  }
}