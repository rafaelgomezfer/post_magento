<?php
namespace Custom\NttBlogs\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $connection = $setup->getConnection();
        $tableName = $setup->getTable('post');

        // Agregar registros por defecto
        $data = [
            ['nombre' => 'Post 1', 'contenido' => 'Descripción del Post 1', 'imagen' => 'imagen1.jpg'],
            ['nombre' => 'Post 2', 'contenido' => 'Descripción del Post 2', 'imagen' => 'imagen2.jpg'],
            ['nombre' => 'Post 3', 'contenido' => 'Descripción del Post 3', 'imagen' => 'imagen3.jpg']
        ];
        $connection->insertMultiple($tableName, $data);

        $setup->endSetup();
    }
}
