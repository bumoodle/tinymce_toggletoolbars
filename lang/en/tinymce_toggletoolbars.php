<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin to hide uncommon toolbar options
 *
 * @package   tinymce_toggletoolbars
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Toggle Toolbars';

$string['hidetoolbars'] = 'Toolbars to Toggle';
$string['hidetoolbars_desc'] = 'The numbers of the toolbars to toggle, starting with one. "2, 3" will hide the second and third toolbars. You should not hide the toolbar that contains the toggletoolbars button!';
$string['initiallyhidden'] = 'Hide By Default';
$string['initiallyhidden_desc'] = 'If checked, the toggleable toolbars will be hidden by default, and must be explicitly shown by clicking the toggle button.'; 

/* All lang strings used from TinyMCE JavaScript code must be named 'pluginname:stringname', no need to create langs/en_dlg.js */
$string['moodlenolink:desc'] = $string['pluginname'];
