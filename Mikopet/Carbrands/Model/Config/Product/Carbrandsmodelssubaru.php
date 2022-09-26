<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelssubaru extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Ascent (2 rows)', 'value' => 'Ascent (2 rows)'];
    $this->_options[] = ['label' => 'Forester', 'value' => 'Forester'];
    $this->_options[] = ['label' => 'Impreza 5-Turer', 'value' => 'Impreza 5-Turer'];
    $this->_options[] = ['label' => 'Impreza E-Boxer', 'value' => 'Impreza E-Boxer'];
    $this->_options[] = ['label' => 'Legacy', 'value' => 'Legacy'];
    $this->_options[] = ['label' => 'Levorg', 'value' => 'Levorg'];
    $this->_options[] = ['label' => 'Outback', 'value' => 'Outback'];
    $this->_options[] = ['label' => 'Tribeca', 'value' => 'Tribeca'];
    $this->_options[] = ['label' => 'XV', 'value' => 'XV'];

    return $this->_options;
  }
}