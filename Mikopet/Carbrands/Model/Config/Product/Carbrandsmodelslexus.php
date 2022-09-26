<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelslexus extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'GX (2 rows)', 'value' => 'GX 2 rows'];
    $this->_options[] = ['label' => 'LX (2 rows)', 'value' => 'LX 2 rows'];
    $this->_options[] = ['label' => 'NX', 'value' => 'NX'];
    $this->_options[] = ['label' => 'RX', 'value' => 'RX'];
    $this->_options[] = ['label' => 'RX L', 'value' => 'RX L'];

    return $this->_options;
  }
}