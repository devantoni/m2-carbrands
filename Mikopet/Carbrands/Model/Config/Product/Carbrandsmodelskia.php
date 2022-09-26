<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelskia extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Carens', 'value' => 'Carens'];
    $this->_options[] = ['label' => 'Carens (2 adj. Rows/2 angep. Reihen)', 'value' => 'Carens 2 adj Rows 2 angep Reihen'];
    $this->_options[] = ['label' => 'Carens (2 rows)', 'value' => 'Carens 2 rows'];
    $this->_options[] = ['label' => 'Carnival', 'value' => 'Carnival'];
    $this->_options[] = ['label' => 'Ceed sportswagon', 'value' => 'Ceed sportswagon'];
    $this->_options[] = ['label' => 'Ceed sportswagon hybrid', 'value' => 'Ceed sportswagon hybrid'];
    $this->_options[] = ['label' => 'EV6', 'value' => 'EV6'];
    $this->_options[] = ['label' => 'Optima', 'value' => 'Optima'];
    $this->_options[] = ['label' => 'ProCeed', 'value' => 'ProCeed'];
    $this->_options[] = ['label' => 'Sedona (2 rows)', 'value' => 'Sedona 2 rows'];
    $this->_options[] = ['label' => 'Sorento', 'value' => 'Sorento'];
    $this->_options[] = ['label' => 'Sorento (2 rows)', 'value' => 'Sorento 2 rows'];
    $this->_options[] = ['label' => 'Sorento hybrid (2 rows)', 'value' => 'Sorento hybrid 2 rows'];
    $this->_options[] = ['label' => 'Sportage', 'value' => 'Sportage'];
    $this->_options[] = ['label' => 'Venga (adj row)', 'value' => 'Venga adj row'];
    
    return $this->_options;
  }
}