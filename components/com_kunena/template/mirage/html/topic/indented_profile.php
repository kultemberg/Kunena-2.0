<?php
/**
 * Kunena Component
 * @package Kunena.Template.Mirage
 * @subpackage Topic
 *
 * @copyright (C) 2008 - 2013 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

$this->cache = false;
$direction = $this->state->get('profile.direction');
$this->displayTemplateFile('topic', 'indented', "profile_{$direction}");

?>