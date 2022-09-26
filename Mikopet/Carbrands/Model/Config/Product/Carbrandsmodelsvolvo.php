<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsvolvo extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'C40 Recharge', 'value' => 'C40 Recharge'];
    $this->_options[] = ['label' => 'V50', 'value' => 'V50'];
    $this->_options[] = ['label' => 'V60', 'value' => 'V60'];
    $this->_options[] = ['label' => 'V60 Plug In', 'value' => 'V60 Plug In'];
    $this->_options[] = ['label' => 'V60 Recharge', 'value' => 'V60 Recharge'];
    $this->_options[] = ['label' => 'V70', 'value' => 'V70'];
    $this->_options[] = ['label' => 'V90', 'value' => 'V90'];
    $this->_options[] = ['label' => 'V90 CC', 'value' => 'V90 CC'];
    $this->_options[] = ['label' => 'V90 Recharge', 'value' => 'V90 Recharge'];
    $this->_options[] = ['label' => 'XC40', 'value' => 'XC40'];
    $this->_options[] = ['label' => 'XC40 Recharge', 'value' => 'XC40 Recharge'];
    $this->_options[] = ['label' => 'XC60', 'value' => 'XC60'];
    $this->_options[] = ['label' => 'XC60 Recharge', 'value' => 'XC60 Recharge'];
    $this->_options[] = ['label' => 'XC70', 'value' => 'XC70'];
    $this->_options[] = ['label' => 'XC90', 'value' => 'XC90'];
    $this->_options[] = ['label' => 'XC90 (2 rows)', 'value' => 'XC90 2 rows'];
    $this->_options[] = ['label' => 'XC90 Recharge (2 rows)', 'value' => 'XC90 Recharge 2 rows'];

    return $this->_options;
  }
}