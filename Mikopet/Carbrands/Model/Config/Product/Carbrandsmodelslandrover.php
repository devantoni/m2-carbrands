<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrandsmodelslandrover extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Defender', 'value' => 'Defender'];
    $this->_options[] = ['label' => 'Defender Hybrid', 'value' => 'Defender Hybrid'];
    $this->_options[] = ['label' => 'Discover sport (adj row)', 'value' => 'Discover sport adj row'];
    $this->_options[] = ['label' => 'Discover Sport Hybrid (adj row)', 'value' => 'Discover Sport Hybrid adj row'];
    $this->_options[] = ['label' => 'Discovery', 'value' => 'Discovery'];
    $this->_options[] = ['label' => 'Discovery Sport', 'value' => 'Discovery Sport'];
    $this->_options[] = ['label' => 'Discovery Sport Hybrid', 'value' => 'Discovery Sport Hybrid'];
    $this->_options[] = ['label' => 'Evoque', 'value' => 'Evoque'];
    $this->_options[] = ['label' => 'Evoque Hybrid', 'value' => 'Evoque Hybrid'];
    $this->_options[] = ['label' => 'Freelander', 'value' => 'Freelander'];
    $this->_options[] = ['label' => 'Freelander 2', 'value' => 'Freelander 2'];
    $this->_options[] = ['label' => 'Range Rover', 'value' => 'Range Rover'];
    $this->_options[] = ['label' => 'Range Rover Hybrid', 'value' => 'Range Rover Hybrid'];
    $this->_options[] = ['label' => 'Range Rover Sport', 'value' => 'Range Rover Sport'];
    $this->_options[] = ['label' => 'Range Rover Sport (adj row)', 'value' => 'Range Rover Sport adj row'];
    $this->_options[] = ['label' => 'Range Rover Sport Hybrid', 'value' => 'Range Rover Sport Hybrid'];
    $this->_options[] = ['label' => 'Range Rover Sport Hybrid (adj row)', 'value' => 'Range Rover Sport Hybrid adj row'];
    $this->_options[] = ['label' => 'Velar', 'value' => 'Velar'];
    $this->_options[] = ['label' => 'Velar Hybrid', 'value' => 'Velar Hybrid'];
    
    return $this->_options;
  }
}