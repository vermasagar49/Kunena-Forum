<?php
/**
 * Kunena Component
 * @package     Kunena.Template.Crypsis
 * @subpackage  Layout.Widget
 *
 * @copyright   (C) 2008 - 2013 Kunena Team. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        http://www.kunena.org
 **/
defined('_JEXEC') or die;

/** @var KunenaLayout $this */
?>
<div id="kunena" class="layout">
	<?php
	echo $this->subLayout('Widget/MenuBar');

	// Display current view/layout
	echo $this->content;

	echo $this->subLayout('Widget/Footer');
	?>
</div>
