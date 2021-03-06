<?php

namespace Pear\NumbersWordsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 *
 * @author Vaka Software (vaka.pl)
 * @author Jakub Roszkiewicz <j.roszkiewicz@vaka.pl>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('pear_numbers_words');

        $rootNode
            ->children()
                ->scalarNode('locale')->defaultValue(false)->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
