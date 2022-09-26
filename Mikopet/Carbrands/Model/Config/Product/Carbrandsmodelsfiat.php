<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsfiat extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Doblo', 'value' => 'Doblo'];
    $this->_options[] = ['label' => 'Tipo', 'value' => 'Tipo'];
    $this->_options[] = ['label' => 'Tipo Stasjonsvogn', 'value' => 'Tipo Stasjonsvogn'];

    return $this->_options;
  }
}