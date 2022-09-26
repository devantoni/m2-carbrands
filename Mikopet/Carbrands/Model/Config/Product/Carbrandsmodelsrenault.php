<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsrenault extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Arkana', 'value' => 'Arkana'];
    $this->_options[] = ['label' => 'Arkana Hybrid', 'value' => 'Arkana Hybrid'];
    $this->_options[] = ['label' => 'Clio Grand Tour', 'value' => 'Clio Grand Tour'];
    $this->_options[] = ['label' => 'Espace', 'value' => 'Espace'];
    $this->_options[] = ['label' => 'Espace (2 rows)', 'value' => 'Espace 2 rows'];
    $this->_options[] = ['label' => 'Grand Scenic', 'value' => 'Grand Scenic'];
    $this->_options[] = ['label' => 'Grand Scenic (2 rows)', 'value' => 'Grand Scenic 2 rows'];
    $this->_options[] = ['label' => 'Kadjar', 'value' => 'Kadjar'];
    $this->_options[] = ['label' => 'Kangoo', 'value' => 'Kangoo'];
    $this->_options[] = ['label' => 'Kangoo (1 row)', 'value' => 'Kangoo 1 row'];
    $this->_options[] = ['label' => 'Kangoo (2 rows)', 'value' => 'Kangoo 2 rows'];
    $this->_options[] = ['label' => 'Kangoo E-Tech (1row)', 'value' => 'Kangoo E-Tech 1row'];
    $this->_options[] = ['label' => 'Kangoo E-Tech (2 rows)', 'value' => 'Kangoo E-Tech 2 rows'];
    $this->_options[] = ['label' => 'Koleos', 'value' => 'Koleos'];
    $this->_options[] = ['label' => 'Laguna Grand Tour', 'value' => 'Laguna Grand Tour'];
    $this->_options[] = ['label' => 'Megane Grand Tour', 'value' => 'Megane Grand Tour'];
    $this->_options[] = ['label' => 'Megane Grand Tour (lower floor)', 'value' => 'Megane Grand Tour lower floor'];
    $this->_options[] = ['label' => 'Megane Grand Tour Hybrid', 'value' => 'Megane Grand Tour Hybrid'];
    $this->_options[] = ['label' => 'Scenic', 'value' => 'Scenic'];
    $this->_options[] = ['label' => 'Scenic ll', 'value' => 'Scenic ll'];
    $this->_options[] = ['label' => 'Scenic lll', 'value' => 'Scenic lll'];
    $this->_options[] = ['label' => 'Talisman GT', 'value' => 'Talisman GT'];

    return $this->_options;
  }
}