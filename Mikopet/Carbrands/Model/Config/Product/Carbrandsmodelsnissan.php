<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsnissan extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Almera Tino', 'value' => 'Almera Tino'];
    $this->_options[] = ['label' => 'Armada (2 rows)', 'value' => 'Armada 2 rows'];
    $this->_options[] = ['label' => 'Murano', 'value' => 'Murano'];
    $this->_options[] = ['label' => 'NV 200', 'value' => 'NV 200'];
    $this->_options[] = ['label' => 'NV 200 Evalia', 'value' => 'NV 200 Evalia'];
    $this->_options[] = ['label' => 'Pathfinder', 'value' => 'Pathfinder'];
    $this->_options[] = ['label' => 'Patrol', 'value' => 'Patrol'];
    $this->_options[] = ['label' => 'Qashqai', 'value' => 'Qashqai'];
    $this->_options[] = ['label' => 'Qashqai +2', 'value' => 'Qashqai 2'];
    $this->_options[] = ['label' => 'Rogue', 'value' => 'Rogue'];
    $this->_options[] = ['label' => 'Townstar (1 row)', 'value' => 'Townstar 1 row'];
    $this->_options[] = ['label' => 'Townstar (2 row)', 'value' => 'Townstar 2 row'];
    $this->_options[] = ['label' => 'X-Trail', 'value' => 'X-Trail'];

    return $this->_options;
  }
}