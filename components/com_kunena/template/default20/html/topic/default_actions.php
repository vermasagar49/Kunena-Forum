<?php
/**
 * Kunena Component
 * @package Kunena.Template.Default20
 * @subpackage Topic
 *
 * @copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
		<div class="kbuttonbar-topic">
			<div class="kpaginationbar">
				<?php echo $this->getPagination(4) ?>
			</div>
			<ul class="kmessage-buttons">
				<li><?php echo implode('</li> <li>', $this->topicButtons->getProperties()) ?></li>
			</ul>
		</div>