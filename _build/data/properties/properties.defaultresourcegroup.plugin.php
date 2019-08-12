<?php
/**
 * Properties file for DefaultResourceGroup plugin
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 07-26-2014
 *
 * @package defaultresourcegroup
 * @subpackage build
 */




$properties = array (
  'drg_groups' => 
  array (
    'name' => 'drg_groups',
    'desc' => 'Resource Group name or comma-separated list of Resource Group names to assign new resources to. Set to `Parent` to have new resources inherit their parent\'s resource groups.',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => NULL,
    'area' => '',
  ),
);

return $properties;

