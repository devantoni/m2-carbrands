<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelstoyota extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => '4Runner (2 rows)', 'value' => '4Runner 2 rows'];
    $this->_options[] = ['label' => 'Auris Station Hybrid', 'value' => 'Auris Station Hybrid'];
    $this->_options[] = ['label' => 'Avensis Kombi', 'value' => 'Avensis Kombi'];
    $this->_options[] = ['label' => 'C-HR', 'value' => 'C-HR'];
    $this->_options[] = ['label' => 'Corolla Touring Sports', 'value' => 'Corolla Touring Sports'];
    $this->_options[] = ['label' => 'Corolla Verso', 'value' => 'Corolla Verso'];
    $this->_options[] = ['label' => 'FJ Cruser', 'value' => 'FJ Cruser'];
    $this->_options[] = ['label' => 'Highlander (2 rows)', 'value' => 'Highlander 2 rows'];
    $this->_options[] = ['label' => 'IQ (1 row)', 'value' => 'IQ 1 row'];
    $this->_options[] = ['label' => 'Land Cruiser (2 rows)', 'value' => 'Land Cruiser 2 rows'];
    $this->_options[] = ['label' => 'Previa', 'value' => 'Previa'];
    $this->_options[] = ['label' => 'Prius+Wagon (2 rows)', 'value' => 'Prius+Wagon 2 rows'];
    $this->_options[] = ['label' => 'Prius V', 'value' => 'Prius V'];
    $this->_options[] = ['label' => 'Proace (1 row)', 'value' => 'Proace 1 row'];
    $this->_options[] = ['label' => 'Proace (2 rows)', 'value' => 'Proace 2 rows'];
    $this->_options[] = ['label' => 'Proace City (1 row)', 'value' => 'Proace City 1 row'];
    $this->_options[] = ['label' => 'Proace City (2 rows)', 'value' => 'Proace City 2 rows'];
    $this->_options[] = ['label' => 'Proace City Verso L1 (2 rows)', 'value' => 'Proace City Verso L1 2 rows'];
    $this->_options[] = ['label' => 'Proace City Verso L2 (2 rows)', 'value' => 'Proace City Verso L2 2 rows'];
    $this->_options[] = ['label' => 'Proace Electric (1 row)', 'value' => 'Proace Electric 1 row'];
    $this->_options[] = ['label' => 'Proace Electric (2 rows)', 'value' => 'Proace Electric 2 rows'];
    $this->_options[] = ['label' => 'Proace Verso L0-2 (2 rows)', 'value' => 'Proace Verso L0-2 2 rows'];
    $this->_options[] = ['label' => 'RAV4', 'value' => 'RAV4'];
    $this->_options[] = ['label' => 'RAV4 all models', 'value' => 'RAV4 all models'];
    $this->_options[] = ['label' => 'Sequoia', 'value' => 'Sequoia'];
    $this->_options[] = ['label' => 'Sienna (2 rows)', 'value' => 'Sienna 2 rows'];
    $this->_options[] = ['label' => 'Venza', 'value' => 'Venza'];
    $this->_options[] = ['label' => 'Verso (2 rows)', 'value' => 'Verso 2 rows'];
    $this->_options[] = ['label' => 'Verso S', 'value' => 'Verso S'];

    return $this->_options;
  }
}