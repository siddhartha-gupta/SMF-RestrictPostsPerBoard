<?php

/**
* @package manifest file for Restrict Boards per post
* @version 1.2
* @author Joker (http://www.simplemachines.org/community/index.php?action=profile;u=226111)
* @copyright Copyright (c) 2012, Siddhartha Gupta
* @license http://www.mozilla.org/MPL/MPL-1.1.html
*/

/*
* Version: MPL 1.1
*
* The contents of this file are subject to the Mozilla Public License Version
* 1.1 (the "License"); you may not use this file except in compliance with
* the License. You may obtain a copy of the License at
* http://www.mozilla.org/MPL/
*
* Software distributed under the License is distributed on an "AS IS" basis,
* WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
* for the specific language governing rights and limitations under the
* License.
*
* The Initial Developer of the Original Code is
*  Joker (http://www.simplemachines.org/community/index.php?action=profile;u=226111)
* Portions created by the Initial Developer are Copyright (C) 2012
* the Initial Developer. All Rights Reserved.
*
* Contributor(s):
*
*/

global $txt;

$txt['rp_menu'] = 'Restrict Posts Per Board';
$txt['rp_admin_panel'] = 'Restrict Posts admin panel';
$txt['rp_general_desc'] = 'This is the admin panel for the Restrict Posts per Board mod.';

$txt['rp_post_settings'] = 'Restrict Posts';
$txt['rp_basic_post_settings_desc'] = 'This section allows you to put restriction on each membergroup on per board per post basis.';
$txt['rp_general_settings'] = 'General Settings';
$txt['rp_general_settings_desc'] = 'This section allows you to handle global settings for the mod.';

// Strings for post area
$txt['rp_max'] = 'Max ';
$txt['rp_time_limit'] = 'Time Limit (in days)';
$txt['rp_limit_reached'] = 'Oops, it looks like you have reached your posting limit.';
$txt['rp_no_groups_found'] = 'Please add some groups in the board.';

// Strings for generic settings
$txt['rp_mod_enable'] = 'Enable restrict posts mod';
$txt['rp_mod_enable_calendar'] = 'Enable  restrict posts mod settings on calendar';
$txt['rp_enable_disable_mod'] = 'Global permission to enable/disable mod';
$txt['rp_enable_disable_calendar'] = 'Permission, whether to use the mod settings while making calendar event or not';
$txt['rp_restrict_method'] = 'Restrict posts by number of:';
$txt['rp_restrict_by_topics'] = 'topics';
$txt['rp_restrict_by_replies'] = 'replies';

$txt['rp_submit'] = 'Submit';

// text strings for admin section
$txt['rp_invalid_session'] = 'Opps! It seems your session is invalid, please try again';
$txt['rp_err_cleaning_rp_data'] = 'Opps! There seems to be an error in cleaning the database';
$txt['rp_err_updating_db'] = 'Opps! There seems to be an error in updating the database';
$txt['rp_err_unvalid_data'] = 'Opps! The data seems to be invalid';
$txt['rp_database_updated'] = 'Data saved successfully';

?>
