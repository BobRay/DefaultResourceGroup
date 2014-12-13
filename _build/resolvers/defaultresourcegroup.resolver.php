<?php
/**
 * Resolver for DefaultResourceGroup extra
 *
 * Copyright 2012-2015 by Bob Ray <http://bobsguides.com>
 * Created on 12-13-2014
 *
 * DefaultResourceGroup is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * DefaultResourceGroup is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * DefaultResourceGroup; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 * @package defaultresourcegroup
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */

/* @var array $options */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx->log(modX::LOG_LEVEL_INFO,
                'Plugin is disabled -- right-click on it in the tree to activate');
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;