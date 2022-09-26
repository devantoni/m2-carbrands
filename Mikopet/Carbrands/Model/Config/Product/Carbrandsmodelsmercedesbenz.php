<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelsmercedesbenz extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'B Klasse Sporst Tourer', 'value' => 'B Klasse Sporst Tourer'];
    $this->_options[] = ['label' => 'B Klasse Sporst Tourer Hybrid', 'value' => 'B Klasse Sporst Tourer Hybrid'];
    $this->_options[] = ['label' => 'C-Klasse T-Modell', 'value' => 'C-Klasse T-Modell'];
    $this->_options[] = ['label' => 'CLA Shooting Brake', 'value' => 'CLA Shooting Brake'];
    $this->_options[] = ['label' => 'CLA Shooting Brake Hybrid', 'value' => 'CLA Shooting Brake Hybrid'];
    $this->_options[] = ['label' => 'CLS', 'value' => 'CLS'];
    $this->_options[] = ['label' => 'E Klasse T-Modell', 'value' => 'E Klasse T-Modell'];
    $this->_options[] = ['label' => 'E Klasse T-Modell Hybrid', 'value' => 'E Klasse T-Modell Hybrid'];
    $this->_options[] = ['label' => 'EQA', 'value' => 'EQA'];
    $this->_options[] = ['label' => 'EQB', 'value' => 'EQB'];
    $this->_options[] = ['label' => 'EQS', 'value' => 'EQS'];
    $this->_options[] = ['label' => 'EQV (2 rows)', 'value' => 'EQV 2 rows'];
    $this->_options[] = ['label' => 'EQV Long (2 rows)', 'value' => 'EQV Long 2 rows'];
    $this->_options[] = ['label' => 'G-Klasse', 'value' => 'G-Klasse'];
    $this->_options[] = ['label' => 'GL', 'value' => 'GL'];
    $this->_options[] = ['label' => 'GLA SUV', 'value' => 'GLA SUV'];
    $this->_options[] = ['label' => 'GLB SUV', 'value' => 'GLB SUV'];
    $this->_options[] = ['label' => 'GLB SUV (lower floor)', 'value' => 'GLB SUV (lower floor)'];
    $this->_options[] = ['label' => 'GLC SUV', 'value' => 'GLC SUV'];
    $this->_options[] = ['label' => 'GLC SUV hybrid', 'value' => 'GLC SUV hybrid'];
    $this->_options[] = ['label' => 'GLE Coupe', 'value' => 'GLE Coupe'];
    $this->_options[] = ['label' => 'GLE SUV', 'value' => 'GLE SUV'];
    $this->_options[] = ['label' => 'GLE SUV Hybrid', 'value' => 'GLE SUV Hybrid'];
    $this->_options[] = ['label' => 'GLK', 'value' => 'GLK'];
    $this->_options[] = ['label' => 'GLS SUV (2 rows)', 'value' => 'GLS SUV 2 rows'];
    $this->_options[] = ['label' => 'ML', 'value' => 'ML'];
    $this->_options[] = ['label' => 'R-Model', 'value' => 'R-Model'];
    $this->_options[] = ['label' => 'V-Klasse Extra Long (2 rows)', 'value' => 'V-Klasse Extra Long 2 rows'];
    $this->_options[] = ['label' => 'V-Klasse Kompakt (2 rows)', 'value' => 'V-Klasse Kompakt 2 rows'];
    $this->_options[] = ['label' => 'V-Klasse Long (2 rows)', 'value' => 'V-Klasse Long 2 rows'];
    $this->_options[] = ['label' => 'Vaneo', 'value' => 'Vaneo'];
    $this->_options[] = ['label' => 'Viano', 'value' => 'Viano'];
    $this->_options[] = ['label' => 'Vito', 'value' => 'Vito'];

    return $this->_options;
  }
}