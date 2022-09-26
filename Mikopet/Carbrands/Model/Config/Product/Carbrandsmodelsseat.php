<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsseat extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Alhambra', 'value' => 'Alhambra'];
    $this->_options[] = ['label' => 'Altea XL/Freetrack', 'value' => 'Altea XL/Freetrack'];
    $this->_options[] = ['label' => 'Ateca', 'value' => 'Ateca'];
    $this->_options[] = ['label' => 'Ateca (lower floor)', 'value' => 'Ateca lower floor'];
    $this->_options[] = ['label' => 'Exeo', 'value' => 'Exeo'];
    $this->_options[] = ['label' => 'Ibiza Station', 'value' => 'Ibiza Station'];
    $this->_options[] = ['label' => 'Leon ST', 'value' => 'Leon ST'];
    $this->_options[] = ['label' => 'Leon ST (lower floor)', 'value' => 'Leon ST lower floor'];
    $this->_options[] = ['label' => 'Tarraco (2 rows)', 'value' => 'Tarraco 2 rows'];
    $this->_options[] = ['label' => 'Tarraco (2 rows/lower floor)', 'value' => 'Tarraco 2 rows/lower floor'];

    return $this->_options;
  }
}