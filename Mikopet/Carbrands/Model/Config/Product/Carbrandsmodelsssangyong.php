<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsssangyong extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Kyron', 'value' => 'Kyron'];
    $this->_options[] = ['label' => 'Rexton', 'value' => 'Rexton'];
    $this->_options[] = ['label' => 'Rodius', 'value' => 'Rodius'];
    $this->_options[] = ['label' => 'XLV', 'value' => 'XLV'];

    return $this->_options;
  }
}