<?php

namespace AM\AffiliateMember\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        // Seeding Affiliate Members
        $installer->getConnection()->insert(
            $installer->getTable('affiliate_members'),
            [
                'name' => 'Ahmad',
                'image_url' => 'http://something.com/1',
                'status' => 1,
                'created_at' => '2017-10-18 03:43:05',
                'update_time' => '2017-10-19 03:43:05',
            ]
        );
        $installer->getConnection()->insert(
            $installer->getTable('affiliate_members'),
            [
                'name' => 'Faraz',
                'image_url' => 'http://something.com/2',
                'status' => 0,
                'created_at' => '2017-10-18 03:43:05',
                'update_time' => '2017-10-19 03:43:05',
            ]
        );

        $installer->endSetup();

    }
}
