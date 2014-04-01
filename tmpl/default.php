<?php
/**
 * @version     1.0.0
 * @package     mod_dzvideo_search
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <dev@dezign.vn> - dezign.vn
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="dzvideo_search-module<?php echo $moduleclass_sfx; ?>">
  <form action="<?php echo $search_link; ?>" method="POST">
    <div class="input-append">
      <input type="text" name="filter-search" class="span10"/>
      <button class="btn" type="button"><i class="icon-search"></i></button>
    </div>
  </form>
</div>