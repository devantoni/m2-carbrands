<?php 

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
       $this->eavSetupFactory = $eavSetupFactory;
    }


    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    { 
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        if (version_compare($context->getVersion(), '0.1.6', '<')) {
            $eavSetup->removeAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'carbrands'
            );
            $eavSetup->removeAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'cam_jeep'
            );
            
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
                    'user_defined' => true,
                    'used_in_product_listing' => false,
                    'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                    'visible_on_front' => true,
                    'is_user_defined' => true
                ]
            );
            
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'cam_toyota',
                [
                    'group' => 'Attributes',
                    'label' => 'Car Model (Toyota)',
                    'type' => 'text',
                    'input' => 'multiselect',
                    'source' => 'Mikopet\Carbrands\Model\Config\Product\Carbrandsmodelstoyota',
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
                    'user_defined' => true,
                    'used_in_product_listing' => false,
                    'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                    'visible_on_front' => true,
                    'is_user_defined' => true
                ]
                );
        }
        
    }
}
