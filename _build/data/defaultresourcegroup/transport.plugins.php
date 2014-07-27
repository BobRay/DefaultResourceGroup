<?php
/**
 * plugins transport file for DefaultResourceGroup extra
 *
 * Copyright 2013-2014 by Bob Ray <http://bobsguides.com>
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
  'description' => 'Assigns all new Resources to designated resource group(s)',
  'name' => 'DefaultResourceGroup',
), '', true, true);
$plugins[1]->setContent(file_get_contents($sources['source_core'] . '/elements/plugins/defaultresourcegroup.plugin.php'));

return $plugins;
