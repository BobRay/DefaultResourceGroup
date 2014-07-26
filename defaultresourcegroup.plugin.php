<?php

/**
 * DefaultResourceGroup
 *
 * Copyright 2011 Bob Ray
 *
 * @author Bob Ray
 * 1/20/12
 *
 * DefaultResourceGroup is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * DefaultResourceGroup is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * DefaultResourceGroup; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package defaultresourcegroup
 */
/**
 * MODx DefaultResourceGroup Snippet
 *
 * Description Adds resources to default resource group(s)
  *
 * @package defaultresourcegroup
 *
 * Connect to OnDocFormSave
 *
 * @property dug_groups (string) comma-separated list of resource groups
 */


/* only operate on new resources */
if ($mode != modSystemEvent::MODE_NEW) return;

$groupSetting = $modx->getOption('drg_groups', $scriptProperties, null);

if (!empty($groupSetting)) {
   $groups = explode(',',$groupSetting);

   foreach ($groups as $group) {
      $success = $resource->joinGroup(trim($group));
   }
}

return '';