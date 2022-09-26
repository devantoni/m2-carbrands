<?php

namespace Mikopet\Carbrands\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
  private $eavSetupFactory;

  public function __construct(EavSetupFactory $eavSetupFactory)
  {
    $this->eavSetupFactory = $eavSetupFactory;
  }

  public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
  {
    $setup->startSetup();
    $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

    $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'carbrands',
        [
          'group' => 'Attributes',
          'label' => 'Car Brands',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrands',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

    $eavSetup->addAttribute(
      \Magento\Catalog\Model\Product::ENTITY,
      'cam_audi',
      [
        'group' => 'Attributes',
        'label' => 'Car Model (Audi)',
        'type' => 'text',
        'input' => 'multiselect',
        'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsaudi',
        'required' => false,
        'sort_order' => 30,
        'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
        'used_in_product_listing' => false,
        'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
        'visible_on_front' => true
      ]
    );

    $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_bmw',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (BMW)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsbmw',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_citroen',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Citroen)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelscitroen',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_fiat',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Fiat)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsfiat',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_ford',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Ford)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsford',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_honda',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Honda)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelshonda',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_hyundai',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Hyundai)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelshyundai',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_jeep',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Jeep)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsjeep',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_kia',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Kia)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelskia',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_lancia',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Lancia)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelslancia',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_land_rover',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Land Rover)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelslandrover',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_lexus',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Lexus)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelslexus',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_lincoln',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Lincoln)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelslincoln',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_maserati',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Maserati)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsmaserati',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_mazda',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Mazda)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsmazda',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_mercedes_benz',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Mercedes-Benz)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsmercedesbenz',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_mini',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Mini)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsmini',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_mitsubishi',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Mitsubishi)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsmitsubishi',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_nissan',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Nissan)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsnissan',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );

      $eavSetup->addAttribute(
        \Magento\Catalog\Model\Product::ENTITY,
        'cam_opel',
        [
          'group' => 'Attributes',
          'label' => 'Car Model (Opel)',
          'type' => 'text',
          'input' => 'multiselect',
          'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsopel',
          'required' => false,
          'sort_order' => 30,
          'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
          'used_in_product_listing' => false,
          'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
          'visible_on_front' => true
        ]
      );
  
      $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_peugeot',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Peugeot)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelspeugeot',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_pontiac',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Pontiac)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelspontiac',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_porsche',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Porsche)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsporsche',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_renault',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Renault)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsrenault',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_saab',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Saab)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelssaab',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_saturn',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Saturn)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelssaturn',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_seat',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Seat)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsseat',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_skoda',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Skoda)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsskoda',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_ssangyong',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (SsangYong)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsssangyong',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_subaru',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Subaru)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelssubaru',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_suzuki',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Suzuki)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelssuzuki',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_tesla',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Tesla)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelstesla',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_volvo',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (Volvo)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsvolvo',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
  
        $eavSetup->addAttribute(
          \Magento\Catalog\Model\Product::ENTITY,
          'cam_vw',
          [
            'group' => 'Attributes',
            'label' => 'Car Model (VW)',
            'type' => 'text',
            'input' => 'multiselect',
            'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelsvw',
            'required' => false,
            'sort_order' => 30,
            'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_STORE,
            'used_in_product_listing' => false,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible_on_front' => true
          ]
        );
   
    $setup->endSetup();
  }
}