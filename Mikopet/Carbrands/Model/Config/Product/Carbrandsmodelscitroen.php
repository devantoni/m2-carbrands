<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelscitroen extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Varebilene', 'value' => 'Varebilene'];
    $this->_options[] = ['label' => 'Picasso', 'value' => 'Picasso'];
    $this->_options[] = ['label' => 'C4', 'value' => 'C4'];
    $this->_options[] = ['label' => 'C4 Aircross', 'value' => 'C4 Aircross'];
    $this->_options[] = ['label' => 'C4 Cactus', 'value' => 'C4 Cactus'];
    $this->_options[] = ['label' => 'Grand Picasso 2 seterader', 'value' => 'Grand Picasso 2 seterader'];
    $this->_options[] = ['label' => 'C4 Picasso', 'value' => 'C4 Picasso'];
    $this->_options[] = ['label' => 'C5 Aircross', 'value' => 'C5 Aircross'];
    $this->_options[] = ['label' => 'Spacetourer 2 seterader', 'value' => 'Spacetourer 2 seterader'];
  
    return $this->_options;
  }
}