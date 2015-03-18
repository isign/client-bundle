<?php

namespace Isign\ClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your
 * app/config files
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('isign_client');

        $rootNode
            ->children()
                ->scalarNode('api_key')
                   ->isRequired()
                ->end()
                ->booleanNode('sandbox')
                    ->defaultFalse()
                ->end()
            ->end();


        return $treeBuilder;
    }
}
