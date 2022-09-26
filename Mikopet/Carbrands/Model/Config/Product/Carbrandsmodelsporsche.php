<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsporsche extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Cayenne', 'value' => 'Cayenne'];
    $this->_options[] = ['label' => 'Cayenne (adj row)', 'value' => 'Cayenne adj row'];
    $this->_options[] = ['label' => 'Cayenne Coupe', 'value' => 'Cayenne Coupe'];
    $this->_options[] = ['label' => 'Cayenne Coupe Hybrid', 'value' => 'Cayenne Coupe Hybrid'];
    $this->_options[] = ['label' => 'Cayenne Habrid (adj row)', 'value' => 'Cayenne Habrid adj row'];
    $this->_options[] = ['label' => 'Cayenne Hybrid', 'value' => 'Cayenne Hybrid'];
    $this->_options[] = ['label' => 'Macan', 'value' => 'Macan'];
    $this->_options[] = ['label' => 'Panamera', 'value' => 'Panamera'];
    $this->_options[] = ['label' => 'Panamera Executive', 'value' => 'Panamera Executive'];
    $this->_options[] = ['label' => 'Panamera Executive Hybrid', 'value' => 'Panamera Executive Hybrid'];
    $this->_options[] = ['label' => 'Panamera Sport Limousine', 'value' => 'Panamera Sport Limousine'];
    $this->_options[] = ['label' => 'Panamera Sport Limousine Hybrid', 'value' => 'Panamera Sport Limousine Hybrid'];
    $this->_options[] = ['label' => 'Panamera Sport Tourismo', 'value' => 'Panamera Sport Tourismo'];
    $this->_options[] = ['label' => 'Panamera Sport Tourismo Hybrid', 'value' => 'Panamera Sport Tourismo Hybrid'];
    $this->_options[] = ['label' => 'Taycan Turismo', 'value' => 'Taycan Turismo'];

    return $this->_options;
  }
}