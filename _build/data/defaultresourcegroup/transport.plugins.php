<?php
/**
 * plugins transport file for DefaultResourceGroup extra
 *
 * Copyright 2012-2017 Bob Ray <https://bobsguides.com>
 * Created on 07-26-2014
 *
 * @package defaultresourcegroup
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $plugins */


$plugins = array();

$plugins[1] = $modx->newObject('modPlugin');
$plugins[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'DefaultResourceGroup',
  'description' => 'Assigns new resources to one or more Resource Groups',
  'disabled' => true,
), '', true, true);
$plugins[1]->setContent(file_get_contents($sources['source_core'] . '/elements/plugins/defaultresourcegroup.plugin.php'));


$properties = include $sources['data'].'properties/properties.defaultresourcegroup.plugin.php';
$plugins[1]->setProperties($properties);
unset($properties);

return $plugins;
