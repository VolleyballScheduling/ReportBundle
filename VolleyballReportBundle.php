<?php
namespace Volleyball\Bundle\ReportBundle;

use \Symfony\Component\DependencyInjection\ContainerBuilder;
use \Sylius\Bundle\ResourceBundle\AbstractResourceBundle;
use \Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

class VolleyballReportBundle extends AbstractResourceBundle
{
    /**
     * {@inheritdoc}
     */
    public static function getSupportedDrivers()
    {
        return array(
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
    
    /**
     * {@inheritdoc}
     */
    protected function getBundlePrefix()
    {
        return 'volleyball_report';
    }
}
