<?php

namespace Mikopet\Carbrands\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Carbrands extends AbstractSource
{
  protected $optionFactory;
  public function getAllOptions()
  {
    $this->_options = [];
    $this->_options[] = ['label' => 'Audi', 'value' => 'Audi'];
    $this->_options[] = ['label' => 'BMW', 'value' => 'BMW'];
    $this->_options[] = ['label' => 'Citroen', 'value' => 'Citroen'];
    $this->_options[] = ['label' => 'Fiat', 'value' => 'Fiat'];
    $this->_options[] = ['label' => 'Ford', 'value' => 'Ford'];
    $this->_options[] = ['label' => 'Honda', 'value' => 'Honda'];
    $this->_options[] = ['label' => 'Hyundai', 'value' => 'Hyundai'];
    $this->_options[] = ['label' => 'Jeep', 'value' => 'Jeep'];
    $this->_options[] = ['label' => 'Kia', 'value' => 'Kia'];
    $this->_options[] = ['label' => 'Lancia', 'value' => 'Lancia'];
    $this->_options[] = ['label' => 'Land Rover', 'value' => 'Land Rover'];
    $this->_options[] = ['label' => 'Lexus', 'value' => 'Lexus'];
    $this->_options[] = ['label' => 'Lincoln', 'value' => 'Lincoln'];
    $this->_options[] = ['label' => 'Maserati', 'value' => 'Maserati'];
    $this->_options[] = ['label' => 'Mazda', 'value' => 'Mazda'];
    $this->_options[] = ['label' => 'Mercedes-Benz', 'value' => 'Mercedes-Benz'];
    $this->_options[] = ['label' => 'Mini', 'value' => 'Mini'];
    $this->_options[] = ['label' => 'Mitsubishi', 'value' => 'Mitsubishi'];
    $this->_options[] = ['label' => 'Nissan', 'value' => 'Nissan'];
    $this->_options[] = ['label' => 'Opel', 'value' => 'Opel'];
    $this->_options[] = ['label' => 'Peugeot', 'value' => 'Peugeot'];
    $this->_options[] = ['label' => 'Pontiac', 'value' => 'Pontiac'];
    $this->_options[] = ['label' => 'Porsche', 'value' => 'Porsche'];
    $this->_options[] = ['label' => 'Renault', 'value' => 'Renault'];
    $this->_options[] = ['label' => 'Saab', 'value' => 'Saab'];
    $this->_options[] = ['label' => 'Saturn', 'value' => 'Saturn'];
    $this->_options[] = ['label' => 'Seat', 'value' => 'Seat'];
    $this->_options[] = ['label' => 'Skoda', 'value' => 'Skoda'];
    $this->_options[] = ['label' => 'SsangYong', 'value' => 'SsangYong'];
    $this->_options[] = ['label' => 'Subaru', 'value' => 'Subaru'];
    $this->_options[] = ['label' => 'Suzuki', 'value' => 'Suzuki'];
    $this->_options[] = ['label' => 'Tesla', 'value' => 'Tesla'];
    $this->_options[] = ['label' => 'Toyota', 'value' => 'Toyota'];
    $this->_options[] = ['label' => 'Volvo', 'value' => 'Volvo'];
    $this->_options[] = ['label' => 'VW', 'value' => 'VW'];
    return $this->_options;
  }
}