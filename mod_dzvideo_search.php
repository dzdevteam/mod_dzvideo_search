<?php
/**
 * @version     1.0.0
 * @package     mod_dzvideo_search
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <dev@dezign.vn> - dezign.vn
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$search_itemid = $params->get('itemid');
if (!$search_itemid)
  return;
$search_link = JRoute::_('index.php?Itemid=' . (int) $search_itemid);

// Display template
require JModuleHelper::getLayoutPath('mod_dzvideo_search', $params->get('layout', 'default'));
