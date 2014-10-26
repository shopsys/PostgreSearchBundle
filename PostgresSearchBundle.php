<?php

namespace Intaro\PostgresSearchBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PostgresSearchBundle extends Bundle
{
    public function boot()
    {
        $em = $this->container->get('doctrine')->getManager();
        $platform = $em->getConnection()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('tsvector', 'tsvector');
    }
}
