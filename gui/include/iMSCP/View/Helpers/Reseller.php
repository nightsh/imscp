<?php
/**
 * i-MSCP a internet Multi Server Control Panel
 *
 * @copyright   2001-2006 by moleSoftware GmbH
 * @copyright   2006-2010 by ispCP | http://isp-control.net
 * @copyright   2010-2011 by i-MSCP | http://i-mscp.net
 * @version     SVN: $Id$
 * @link        http://i-mscp.net
 * @author      ispCP Team
 * @author      i-MSCP Team
 *
 * @license
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 *
 * The Original Code is "VHCS - Virtual Hosting Control System".
 *
 * The Initial Developer of the Original Code is moleSoftware GmbH.
 * Portions created by Initial Developer are Copyright (C) 2001-2006
 * by moleSoftware GmbH. All Rights Reserved.
 * Portions created by the ispCP Team are Copyright (C) 2006-2010 by
 * isp Control Panel. All Rights Reserved.
 * Portions created by the i-MSCP Team are Copyright (C) 2010 by
 * i-MSCP a internet Multi Server Control Panel. All Rights Reserved.
 */

/************************************************************************************
 * This file contains view helpers functions that are responsible to generate
 * template parts for reseller interface such as the main and left menus.
 */

/**
 * Helper function to generate the main menu from a partial template.
 *
 * @param  iMSCP_pTemplate $tpl Template engine
 * @param  string $menu_file Partial template file path
 * @return void
 */
function gen_reseller_mainmenu($tpl, $menu_file)
{
    /** @var $cfg iMSCP_Config_Handler_File */
    $cfg = iMSCP_Registry::get('config');

    /** @var $sql iMSCP_Database */
    $db = iMSCP_Registry::get('db');

    $tpl->define_dynamic('menu', $menu_file);
    $tpl->define_dynamic('isactive_support', 'menu');
    $tpl->define_dynamic('custom_buttons', 'menu');
    $tpl->define_dynamic('t_software_menu', 'menu');
    $tpl->assign(array(
                      'TR_MENU_GENERAL_INFORMATION' => tr('General information'),
                      'TR_MENU_CHANGE_PASSWORD' => tr('Change password'),
                      'TR_MENU_CHANGE_PERSONAL_DATA' => tr('Change personal data'),
                      'TR_MENU_HOSTING_PLANS' => tr('Manage hosting plans'),
                      'TR_MENU_ADD_HOSTING' => tr('Add hosting plan'),
                      'TR_MENU_MANAGE_USERS' => tr('Manage users'),
                      'TR_MENU_ADD_USER' => tr('Add user'),
                      'TR_MENU_E_MAIL_SETUP' => tr('Email setup'),
                      'TR_MENU_CIRCULAR' => tr('Email marketing'),
                      'TR_MENU_MANAGE_DOMAINS' => tr('Manage domains'),
                      'TR_MENU_DOMAIN_ALIAS' => tr('Domain alias'),
                      'TR_MENU_SUBDOMAINS' => tr('Subdomains'),
                      'TR_MENU_DOMAIN_STATISTICS' => tr('Domain statistics'),
                      'TR_MENU_QUESTIONS_AND_COMMENTS' => tr('Support system'),
                      'TR_MENU_NEW_TICKET' => tr('New ticket'),
                      'TR_MENU_LAYOUT_SETTINGS' => tr('Layout settings'),
                      'TR_MENU_LOGOUT' => tr('Logout'),
                      'TR_MENU_OVERVIEW' => tr('Overview'),
                      'TR_MENU_LANGUAGE' => tr('Language'),
                      'SUPPORT_SYSTEM_PATH' => $cfg->IMSCP_SUPPORT_SYSTEM_PATH,
                      'SUPPORT_SYSTEM_TARGET' => $cfg->IMSCP_SUPPORT_SYSTEM_TARGET,
                      'TR_MENU_ORDERS' => tr('Manage Orders'),
                      'TR_MENU_ORDER_SETTINGS' => tr('Order settings'),
                      'TR_MENU_ORDER_EMAIL' => tr('Order email setup'),
                      'TR_MENU_LOSTPW_EMAIL' => tr('Lostpw email setup')));

    $query = "
		SELECT
			*
		FROM
			`custom_menus`
		WHERE
			`menu_level` = 'reseller'
		OR
			`menu_level` = 'all'
	    ;
	";

    $rs = exec_query($db, $query);
    if ($rs->recordCount() == 0) {
        $tpl->assign('CUSTOM_BUTTONS', '');
    } else {
        global $i;
        $i = 100;

        while (!$rs->EOF) {
            $menu_name = $rs->fields['menu_name'];
            $menu_link = get_menu_vars($rs->fields['menu_link']);
            $menu_target = $rs->fields['menu_target'];

            if ($menu_target !== "") {
                $menu_target = 'target="' . tohtml($menu_target) . '"';
            }

            $tpl->assign(
                array(
                     'BUTTON_LINK' => tohtml($menu_link),
                     'BUTTON_NAME' => tohtml($menu_name),
                     'BUTTON_TARGET' => $menu_target,
                     'BUTTON_ID' => $i,
                )
            );

            $tpl->parse('CUSTOM_BUTTONS', '.custom_buttons');
            $rs->moveNext();
            $i++;
        }
    }

    $query = "
	    SELECT
		    `support_system`
	    FROM
		    `reseller_props`
	    WHERE
		    `reseller_id` = ?
		;
	";
    $rs = exec_query($db, $query, $_SESSION['user_id']);

    if (!$cfg->IMSCP_SUPPORT_SYSTEM || $rs->fields['support_system'] == 'no') {
        $tpl->assign('ISACTIVE_SUPPORT', '');
    }

    $tpl->parse('MAIN_MENU', 'menu');
}

/**
 * Helper function to generate the left menu from a partial template.
 *
 * @param  iMSCP_pTemplate $tpl Template engine
 * @param  $menu_file Partial template file path
 * @return void
 */
function gen_reseller_menu($tpl, $menu_file)
{
    /** @var $cfg iMSCP_Config_Handler_File */
    $cfg = iMSCP_Registry::get('config');

    /** @var $db iMSCP_Database */
    $db = iMSCP_Registry::get('db');

    $tpl->define_dynamic('menu', $menu_file);
    $tpl->define_dynamic('custom_buttons', 'menu');
    $tpl->define_dynamic('alias_menu', 'page');
    $tpl->assign(array(
                      'TR_MENU_GENERAL_INFORMATION' => tr('General information'),
                      'TR_MENU_CHANGE_PASSWORD' => tr('Change password'),
                      'TR_MENU_CHANGE_PERSONAL_DATA' => tr('Change personal data'),
                      'TR_MENU_HOSTING_PLANS' => tr('Manage hosting plans'),
                      'TR_MENU_ADD_HOSTING' => tr('Add hosting plan'),
                      'TR_MENU_MANAGE_USERS' => tr('Manage users'),
                      'TR_MENU_ADD_USER' => tr('Add user'),
                      'TR_MENU_E_MAIL_SETUP' => tr('Email setup'),
                      'TR_MENU_CIRCULAR' => tr('Email marketing'),
                      'TR_MENU_MANAGE_DOMAINS' => tr('Manage domains'),
                      'TR_MENU_DOMAIN_ALIAS' => tr('Domain alias'),
                      'TR_MENU_SUBDOMAINS' => tr('Subdomains'),
                      'TR_MENU_DOMAIN_STATISTICS' => tr('Domain statistics'),
                      'TR_MENU_QUESTIONS_AND_COMMENTS' => tr('Support system'),
                      'TR_MENU_NEW_TICKET' => tr('New ticket'),
                      'TR_MENU_LAYOUT_SETTINGS' => tr('Layout settings'),
                      'TR_MENU_LOGOUT' => tr('Logout'),
                      'TR_MENU_OVERVIEW' => tr('Overview'),
                      'TR_MENU_LANGUAGE' => tr('Language'),
                      'ALIAS_MENU' => (!check_reseller_permissions($_SESSION['user_id'], 'alias'))
                          ? '' : $tpl->parse('ALIAS_MENU', '.alias_menu'),
                      'SUPPORT_SYSTEM_PATH' => $cfg->IMSCP_SUPPORT_SYSTEM_PATH,
                      'SUPPORT_SYSTEM_TARGET' => $cfg->IMSCP_SUPPORT_SYSTEM_TARGET,
                      'TR_MENU_ORDERS' => tr('Manage Orders'),
                      'TR_MENU_ORDER_SETTINGS' => tr('Order settings'),
                      'TR_MENU_ORDER_EMAIL' => tr('Order email setup'),
                      'TR_MENU_LOSTPW_EMAIL' => tr('Lostpw email setup'),
                      'TR_MENU_IP_USAGE' => tr('IP usage'),
                      'TR_SOFTWARE_MENU' => tr('Application management'),
                      'VERSION' => $cfg->Version,
                      'BUILDDATE' => $cfg->BuildDate,
                      'CODENAME' => $cfg->CodeName));

    $query = "
		SELECT
			*
		FROM
			`custom_menus`
		WHERE
			`menu_level` = 'reseller'
		OR
			`menu_level` = 'all'
		;
	";

    $rs = exec_query($db, $query);
    if ($rs->recordCount() == 0) {
        $tpl->assign('CUSTOM_BUTTONS', '');
    } else {
        global $i;
        $i = 100;

        while (!$rs->EOF) {
            $menu_name = $rs->fields['menu_name'];
            $menu_link = get_menu_vars($rs->fields['menu_link']);
            $menu_target = $rs->fields['menu_target'];

            if ($menu_target !== '') {
                $menu_target = 'target="' . tohtml($menu_target) . '"';
            }

            $tpl->assign(array(
                              'BUTTON_LINK' => tohtml($menu_link),
                              'BUTTON_NAME' => tohtml($menu_name),
                              'BUTTON_TARGET' => $menu_target,
                              'BUTTON_ID' => $i));

            $tpl->parse('CUSTOM_BUTTONS', '.custom_buttons');
            $rs->moveNext();
            $i++;
        }
    }

    $query = "
	    SELECT
		    `support_system`
	    FROM
		    `reseller_props`
	    WHERE
		    `reseller_id` = ?
		;
	";
    $rs = exec_query($db, $query, $_SESSION['user_id']);

    if (!$cfg->IMSCP_SUPPORT_SYSTEM || $rs->fields['support_system'] == 'no') {
        $tpl->assign('ISACTIVE_SUPPORT', '');
    }

    if (isset($cfg->HOSTING_PLANS_LEVEL) && strtolower($cfg->HOSTING_PLANS_LEVEL) === 'admin') {
        $tpl->assign('HP_MENU_ADD', '');
    }

    $query = "
		SELECT
			`software_allowed`
		FROM
			`reseller_props`
		WHERE
			`reseller_id` = ?
		;
	";
    $rs = exec_query($db, $query, $_SESSION['user_id']);

    if ($rs->fields('software_allowed') == 'yes') {
        $tpl->assign(array('SOFTWARE_MENU' => tr('yes')));
        $tpl->parse('T_SOFTWARE_MENU', '.t_software_menu');
    } else {
        $tpl->assign('T_SOFTWARE_MENU', '');
    }

    $tpl->parse('MENU', 'menu');
}


/**
 * Generate IP list
 */
function generate_ip_list($tpl, $reseller_id)
{

    $cfg = iMSCP_Registry::get('config');
    $sql = iMSCP_Registry::get('db');
    global $domain_ip;

    $query = "
		SELECT
			`reseller_ips`
		FROM
			`reseller_props`
		WHERE
			`reseller_id` = ?
	";

    $res = exec_query($sql, $query, $reseller_id);

    $data = $res->fetchRow();

    $reseller_ips = $data['reseller_ips'];

    $query = "SELECT * FROM `server_ips`";

    $res = exec_query($sql, $query);

    while ($data = $res->fetchRow()) {
        $ip_id = $data['ip_id'];

        if (preg_match("/$ip_id;/", $reseller_ips) == 1) {
            $selected = ($domain_ip === $ip_id) ? $cfg->HTML_SELECTED : '';

            $tpl->assign(
                array(
                     'IP_NUM' => $data['ip_number'],
                     'IP_NAME' => tohtml($data['ip_domain']),
                     'IP_VALUE' => $ip_id,
                     'IP_SELECTED' => $selected
                )
            );

            $tpl->parse('IP_ENTRY', '.ip_entry');
        }
    } // end loop
} // end of generate_ip_list()

/**
 * Check validity of input data
 *
 * @todo check if we can remove out commented code block
 */
function check_ruser_data($tpl, $noPass)
{
    global $dmn_name, $hpid, $dmn_user_name;
    global $user_email, $customer_id, $first_name;
    global $last_name, $firm, $zip, $gender;
    global $city, $state, $country, $street_one;
    global $street_two, $mail, $phone;
    global $fax, $inpass, $domain_ip;

    $cfg = iMSCP_Registry::get('config');

    $user_add_error = '_off_';
    $inpass_re = '';
    // Get data for fields from previous page
    if (isset($_POST['userpassword']))
        $inpass = $_POST['userpassword'];

    if (isset($_POST['userpassword_repeat']))
        $inpass_re = $_POST['userpassword_repeat'];

    if (isset($_POST['domain_ip']))
        $domain_ip = $_POST['domain_ip'];

    if (isset($_POST['useremail']))
        $user_email = $_POST['useremail'];

    if (isset($_POST['useruid']))
        $customer_id = $_POST['useruid'];

    if (isset($_POST['userfname']))
        $first_name = $_POST['userfname'];

    if (isset($_POST['userlname']))
        $last_name = $_POST['userlname'];

    if (isset($_POST['userfirm']))
        $firm = $_POST['userfirm'];

    if (isset($_POST['userzip']))
        $zip = $_POST['userzip'];

    if (isset($_POST['usercity']))
        $city = $_POST['usercity'];

    if (isset($_POST['userstate']))
        $state = $_POST['userstate'];

    if (isset($_POST['usercountry']))
        $country = $_POST['usercountry'];

    if (isset($_POST['userstreet1']))
        $street_one = $_POST['userstreet1'];

    if (isset($_POST['userstreet2']))
        $street_two = $_POST['userstreet2'];

    if (isset($_POST['useremail']))
        $mail = $_POST['useremail'];

    if (isset($_POST['userphone']))
        $phone = $_POST['userphone'];

    if (isset($_POST['userfax']))
        $fax = $_POST['userfax'];

    if (isset($_POST['gender'])
        && get_gender_by_code($_POST['gender'], true) !== null
    ) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }
    //if (isset($_SESSION['local_data']))
    //	list($dmn_name, $hpid, $dmn_user_name) = explode(";", $_SESSION['local_data']);
    // Begin checking...
    if ('_no_' == $noPass) {
        if (('' === $inpass_re) || ('' === $inpass)) {
            $user_add_error = tr('Please fill up both data fields for password!');
        } else if ($inpass_re !== $inpass) {
            $user_add_error = tr("Passwords don't match!");
        } else if (!chk_password($inpass)) {
            if ($cfg->PASSWD_STRONG) {
                $user_add_error = sprintf(tr('The password must be at least %s long and contain letters and numbers to be valid.'), $cfg->PASSWD_CHARS);
            } else {
                $user_add_error = sprintf(tr('Password data is shorter than %s signs or includes not permitted signs!'), $cfg->PASSWD_CHARS);
            }
        }
    }

    if ($user_email == NULL) {
        $user_add_error = tr('Incorrect email length or syntax!');
    }
    /* we don't want to validate Customer ID, First and Second name and also ZIP

       else if (!imscp_limit_check($customer_id)) {
         $user_add_error = tr('Incorrect customer ID syntax!');
     } else if (!chk_username($first_name, 40)) {

         $user_add_error = tr('Incorrect first name length or syntax!');
     } else if (!chk_username($last_name, 40)) {

         $user_add_error = tr('Incorrect second name length or syntax!');
     } else if (!imscp_limit_check($zip)) {

         $user_add_error = tr('Incorrect post code length or syntax!');
     } */

    if ($user_add_error == '_off_') {
        // send data through session
        $_SESSION['Message'] = NULL;

        return true;
    } else {
        $_SESSION['Message'] = $user_add_error;

        return false;
    }
}

function gen_manage_domain_search_options($tpl, $search_for, $search_common,
    $search_status)
{

    $cfg = iMSCP_Registry::get('config');

    if ($search_for === 'n/a' && $search_common === 'n/a'
        && $search_status === 'n/a'
    ) {
        // we have no search and let's genarate search fields empty
        $domain_selected = $cfg->HTML_SELECTED;
        $customerid_selected = '';
        $lastname_selected = '';
        $company_selected = '';
        $city_selected = '';
        $state_selected = '';
        $country_selected = '';

        $all_selected = $cfg->HTML_SELECTED;
        $ok_selected = '';
        $suspended_selected = '';
    }
    if ($search_common === 'domain_name') {
        $domain_selected = $cfg->HTML_SELECTED;
        $customerid_selected = '';
        $lastname_selected = '';
        $company_selected = '';
        $city_selected = '';
        $state_selected = '';
        $country_selected = '';
    } else if ($search_common === 'customer_id') {
        $domain_selected = '';
        $customerid_selected = $cfg->HTML_SELECTED;
        $lastname_selected = '';
        $company_selected = '';
        $city_selected = '';
        $state_selected = '';
        $country_selected = '';
    } else if ($search_common === 'lname') {
        $domain_selected = '';
        $customerid_selected = '';
        $lastname_selected = $cfg->HTML_SELECTED;
        $company_selected = '';
        $city_selected = '';
        $state_selected = '';
        $country_selected = '';
    } else if ($search_common === 'firm') {
        $domain_selected = '';
        $customerid_selected = '';
        $lastname_selected = '';
        $company_selected = $cfg->HTML_SELECTED;
        $city_selected = '';
        $state_selected = '';
        $country_selected = '';
    } else if ($search_common === 'city') {
        $domain_selected = '';
        $customerid_selected = '';
        $lastname_selected = '';
        $company_selected = '';
        $city_selected = $cfg->HTML_SELECTED;
        $state_selected = '';
        $country_selected = '';
    } else if ($search_common === 'state') {
        $domain_selected = '';
        $customerid_selected = '';
        $lastname_selected = '';
        $company_selected = '';
        $city_selected = '';
        $state_selected = $cfg->HTML_SELECTED;
        $country_selected = '';
    } else if ($search_common === 'country') {
        $domain_selected = '';
        $customerid_selected = '';
        $lastname_selected = '';
        $company_selected = '';
        $city_selected = '';
        $state_selected = '';
        $country_selected = $cfg->HTML_SELECTED;
    }
    if ($search_status === 'all') {
        $all_selected = $cfg->HTML_SELECTED;
        $ok_selected = '';
        $suspended_selected = '';
    } else if ($search_status === 'ok') {
        $all_selected = '';
        $ok_selected = $cfg->HTML_SELECTED;
        $suspended_selected = '';
    } else if ($search_status === 'disabled') {
        $all_selected = '';
        $ok_selected = '';
        $suspended_selected = HTML_SELECTED;
    }

    if ($search_for === "n/a" || $search_for === '') {
        $tpl->assign(
            array('SEARCH_FOR' => "")
        );
    } else {
        $tpl->assign(
            array('SEARCH_FOR' => tohtml($search_for))
        );
    }

    $tpl->assign(
        array(
             'M_DOMAIN_NAME' => tr('Domain name'),
             'M_CUSTOMER_ID' => tr('Customer ID'),
             'M_LAST_NAME' => tr('Last name'),
             'M_COMPANY' => tr('Company'),
             'M_CITY' => tr('City'),
             'M_STATE' => tr('State/Province'),
             'M_COUNTRY' => tr('Country'),

             'M_ALL' => tr('All'),
             'M_OK' => tr('OK'),
             'M_SUSPENDED' => tr('Suspended'),
             'M_ERROR' => tr('Error'),
             // selected area
             'M_DOMAIN_NAME_SELECTED' => $domain_selected,
             'M_CUSTOMER_ID_SELECTED' => $customerid_selected,
             'M_LAST_NAME_SELECTED' => $lastname_selected,
             'M_COMPANY_SELECTED' => $company_selected,
             'M_CITY_SELECTED' => $city_selected,
             'M_STATE_SELECTED' => $state_selected,
             'M_COUNTRY_SELECTED' => $country_selected,

             'M_ALL_SELECTED' => $all_selected,
             'M_OK_SELECTED' => $ok_selected,
             'M_SUSPENDED_SELECTED' => $suspended_selected,
        )
    );
}


