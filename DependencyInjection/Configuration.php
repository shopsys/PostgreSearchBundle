<?php

namespace Intaro\PostgresSearchBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $tree = new TreeBuilder('intaro_postgres_search');

        // Keep compatibility with symfony/config < 4.2
        if (!method_exists($tree, 'getRootNode')) {
            return $tree->root('jms_translation')->end();
        } else {
            return $tree->getRootNode()->end();
        }
    }
}
