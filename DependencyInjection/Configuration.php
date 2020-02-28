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
            $tree->root('intaro_postgres_search')->end();
        } else {
            $tree->getRootNode()->end();
        }

        return $tree;
    }
}
