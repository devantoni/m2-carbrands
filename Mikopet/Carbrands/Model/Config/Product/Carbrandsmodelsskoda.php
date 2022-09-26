<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsskoda extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Enyaq', 'value' => 'Enyaq'];
    $this->_options[] = ['label' => 'Enyaq (lifted floor)', 'value' => 'Enyaq lifted floor'];
    $this->_options[] = ['label' => 'Fabia Station', 'value' => 'Fabia Station'];
    $this->_options[] = ['label' => 'Karoq', 'value' => 'Karoq'];
    $this->_options[] = ['label' => 'Kodiaq', 'value' => 'Kodiaq'];
    $this->_options[] = ['label' => 'Kodiaq (2 rows)', 'value' => 'Kodiaq 2 rows'];
    $this->_options[] = ['label' => 'Octavia', 'value' => 'Octavia'];
    $this->_options[] = ['label' => 'Octavia (lower floor)', 'value' => 'Octavia lower floor'];
    $this->_options[] = ['label' => 'Octavia Hybrid', 'value' => 'Octavia Hybrid'];
    $this->_options[] = ['label' => 'Rapid', 'value' => 'Rapid'];
    $this->_options[] = ['label' => 'Roomster', 'value' => 'Roomster'];
    $this->_options[] = ['label' => 'Roomster (1 row)', 'value' => 'Roomster 1 row'];
    $this->_options[] = ['label' => 'Roomster (2 rows)', 'value' => 'Roomster 2 rows'];
    $this->_options[] = ['label' => 'Scala', 'value' => 'Scala'];
    $this->_options[] = ['label' => 'Superb', 'value' => 'Superb'];
    $this->_options[] = ['label' => 'Superb (lower floor)', 'value' => 'Superb lower floor'];
    $this->_options[] = ['label' => 'Yeti', 'value' => 'Yeti'];
    $this->_options[] = ['label' => 'Yeti (1 row)', 'value' => 'Yeti 1 row'];
    $this->_options[] = ['label' => 'Yeti (2 rows)', 'value' => 'Yeti 2 rows'];

    return $this->_options;
  }
}