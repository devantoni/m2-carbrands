<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsmitsubishi extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'ASX', 'value' => 'ASX'];
    $this->_options[] = ['label' => 'Eclipse Cross', 'value' => 'Eclipse Cross'];
    $this->_options[] = ['label' => 'Eclipse Cross PHEV', 'value' => 'Eclipse Cross PHEV'];
    $this->_options[] = ['label' => 'Grandis', 'value' => 'Grandis'];
    $this->_options[] = ['label' => 'i Miev (1 row)', 'value' => 'i Miev 1 row'];
    $this->_options[] = ['label' => 'Lancer Wagon', 'value' => 'Lancer Wagon'];
    $this->_options[] = ['label' => 'Outlander', 'value' => 'Outlander'];
    $this->_options[] = ['label' => 'Outlander PHEV', 'value' => 'Outlander PHEV'];
    $this->_options[] = ['label' => 'Outlander Sport (2 rows)', 'value' => 'Outlander Sport 2 rows'];
    $this->_options[] = ['label' => 'Pajero (1 rows)', 'value' => 'Pajero 1 rows'];
    $this->_options[] = ['label' => 'Pajero 5 door (2 rows)', 'value' => 'Pajero 5 door 2 rows'];
    $this->_options[] = ['label' => 'Pajero Sport', 'value' => 'Pajero Sport'];

    return $this->_options;
  }
}