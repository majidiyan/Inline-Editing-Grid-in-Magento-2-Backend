<?php

namespace Magentoyan\Holidays\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $installer = $setup;
        $installer->startSetup();

        $tableName = $installer->getTable('holiday_title');
        
         if (!$installer->tableExists('holiday_title')) {
            $table = $installer->getConnection()
                    ->newTable($tableName)
                    ->addColumn(
                            'id',
                            Table::TYPE_INTEGER,
                            null,
                            [
                                'identity' => true,
                                'unsigned' => true,
                                'nullable' => false,
                                'primary' => true
                            ],
                            'Data ID'
                    )

                    ->addColumn(
                        'holiday_date',
                        \Magento\Framework\DB\Ddl\Table::TYPE_DATE,
                        null,
                        [],
                        'Holiday Date'
                    )
                    
                     ->addColumn(
                            'holiday_title',
                            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                            255,
                            ['nullable' => true, 'default' => null],
                            'Holiday Title'
                    )
                    

                    ->addColumn(
                            'holiday_desc',
                            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                            1000,
                            ['nullable' => true, 'default' => null],
                            'Url Desc'
                    )
                   
                    ->setComment('Holiday Desc')

            ;
            $installer->getConnection()->createTable($table);
        }
        
        
        $installer->endSetup();
    }

}
