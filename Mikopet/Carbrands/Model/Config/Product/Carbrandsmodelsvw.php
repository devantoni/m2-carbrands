<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsvw extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Atlas (2 rows)', 'value' => 'Atlas 2 rows'];
    $this->_options[] = ['label' => 'Caddy', 'value' => 'Caddy'];
    $this->_options[] = ['label' => 'Caddy (2 rows)', 'value' => 'Caddy 2 rows'];
    $this->_options[] = ['label' => 'Golf Sportsvan (1 row)', 'value' => 'Golf Sportsvan 1 row'];
    $this->_options[] = ['label' => 'Golf Sportsvan (2 rows adapted)', 'value' => 'Golf Sportsvan 2 rows adapted'];
    $this->_options[] = ['label' => 'Golf Sportsvan (2 rows)', 'value' => 'Golf Sportsvan 2 rows'];
    $this->_options[] = ['label' => 'Golf Variant', 'value' => 'Golf Variant'];
    $this->_options[] = ['label' => 'ID 4', 'value' => 'ID 4'];
    $this->_options[] = ['label' => 'Jetta Station Wagon', 'value' => 'Jetta Station Wagon'];
    $this->_options[] = ['label' => 'Multivan', 'value' => 'Multivan'];
    $this->_options[] = ['label' => 'Multivan (1 or 2 rows)', 'value' => 'Multivan 1 or 2 rows'];
    $this->_options[] = ['label' => 'Passat Variant', 'value' => 'Passat Variant'];
    $this->_options[] = ['label' => 'Passat Variant (lower floor)', 'value' => 'Passat Variant lower floor'];
    $this->_options[] = ['label' => 'Sharan', 'value' => 'Sharan'];
    $this->_options[] = ['label' => 'Sharan (2 rows)', 'value' => 'Sharan 2 rows'];
    $this->_options[] = ['label' => 'T7 (1 row)', 'value' => 'T7 1 row'];
    $this->_options[] = ['label' => 'T7 (2 rows)', 'value' => 'T7 2 rows'];
    $this->_options[] = ['label' => 'Taigo', 'value' => 'Taigo'];
    $this->_options[] = ['label' => 'Tiguan', 'value' => 'Tiguan'];
    $this->_options[] = ['label' => 'Tiguan (adj row)', 'value' => 'Tiguan adj row'];
    $this->_options[] = ['label' => 'Tiguan Allspace (2 rows)', 'value' => 'Tiguan Allspace 2 rows'];
    $this->_options[] = ['label' => 'Touareg', 'value' => 'Touareg'];
    $this->_options[] = ['label' => 'Touran', 'value' => 'Touran'];
    $this->_options[] = ['label' => 'Touran (2 rows)', 'value' => 'Touran 2 rows'];

    return $this->_options;
  }
}