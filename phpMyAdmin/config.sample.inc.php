<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <http://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */

/*
 * Your phpMyAdmin url
 *
 * Complete the variable below with the full url ie
 *    https://www.your_web.net/path_to_your_phpMyAdmin_directory/
 *
 * It must contain characters that are valid for a URL, and the path is
 * case sensitive on some Web servers, for example Unix-based servers.
 *
 * In most cases you can leave this variable empty, as the correct value
 * will be detected automatically. However, we recommend that you do
 * test to see that the auto-detection code works in your system. A good
 * test is to browse a table, then edit a row and save it.  There will be
 * an error message if phpMyAdmin cannot auto-detect the correct value.
 *
 * If the auto-detection code does work properly, you can set to true the
 * $cfg['PmaAbsoluteUri_DisableWarning'] variable below.
 */
$cfg['PmaAbsoluteUri'] = '';

/*
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 * YOU MUST FILL IN THIS FOR COOKIE AUTH!
 */
$cfg['blowfish_secret'] = '';

/*
 * Disable the default warning about $cfg['PmaAbsoluteUri'] not being set
 * You should use this if and ONLY if the PmaAbsoluteUri auto-detection
 * works perfectly.
 */
$cfg['PmaAbsoluteUri_DisableWarning'] = false;

/*
 * Disable the default warning that is displayed on the DB Details Structure page if
 * any of the required Tables for the relationfeatures could not be found
 */
$cfg['PmaNoRelation_DisableWarning']  = false;

/*
 * Disable the default warning that is displayed if Suhosin is detected
 *
 * @global boolean $cfg['SuhosinDisableWarning']
 */
$cfg['SuhosinDisableWarning'] = true;

/*
 * Servers configuration
 */
$i = 0;

/*
 * First server
 */
$i++;
// MySQL hostname or IP address
$cfg['Servers'][$i]['host']                = 'localhost';

// MySQL port - leave blank for default port
$cfg['Servers'][$i]['port']                = '';

// Path to the socket - leave blank for default socket
$cfg['Servers'][$i]['socket']              = '';

// Use SSL for connecting to MySQL server?
$cfg['Servers'][$i]['ssl']                 = false;

// How to connect to MySQL server ('tcp' or 'socket')
$cfg['Servers'][$i]['connect_type']        = 'socket';

// The PHP MySQL extension to use ('mysql' or 'mysqli')
$cfg['Servers'][$i]['extension']           = 'mysqli';

// Use compressed protocol for the MySQL connection (requires PHP >= 4.3.0)
$cfg['Servers'][$i]['compress']            = false;

// Authentication method (config, http or cookie based)?
$cfg['Servers'][$i]['auth_type']           = 'cookie';

// MySQL user
$cfg['Servers'][$i]['user']                = 'root';

// MySQL password (only needed with 'config' auth_type)
$cfg['Servers'][$i]['password']            = '';

// Allow access without password
$cfg['Servers'][$i]['AllowNoPassword']     = false;

// whether to allow root login
$cfg['Servers'][$i]['AllowRoot']           = true;

// Session to use for 'signon' authentication method
$cfg['Servers'][$i]['SignonSession']       = '';

// URL where to redirect user to login for 'signon' authentication method
$cfg['Servers'][$i]['SignonURL']           = '';

// URL where to redirect user after logout
$cfg['Servers'][$i]['LogoutURL']           = '';

// If set to a db-name, only this db is displayed in left frame
// It may also be an array of db-names, where sorting order is relevant.
$cfg['Servers'][$i]['only_db']             = '';

// Verbose name for this host - leave blank to show the hostname
$cfg['Servers'][$i]['verbose']             = '';

// set to false if you know that your pma_* tables
// are up to date. This prevents compatibility
// checks and thereby increases performance.
$cfg['Servers'][$i]['verbose_check']       = true;

// Host authentication order, leave blank to not use
$cfg['Servers'][$i]['AllowDeny']['order']  = '';

// Host authentication rules, leave blank for defaults
$cfg['Servers'][$i]['AllowDeny']['rules']  = array();

/*
 * phpMyAdmin configuration storage settings.
 */
$cfg['Servers'][$i]['controlhost']         = 'localhost';

// MySQL control user settings (this user must have read-only
// access to the "mysql/user" and "mysql/db" tables).
// The controluser is also used for all relational features (pmadb)
$cfg['Servers'][$i]['controluser']         = '';

// The password needed for the controluser to login
// (see $cfg['Servers'][$i]['controluser'])
$cfg['Servers'][$i]['controlpass']         = '';

// Database used for Relation, Bookmark and PDF Features
// (see _docdir/examples/create_tables.sql)
//   - leave blank for no support
//     DEFAULT: 'phpmyadmin'
$cfg['Servers'][$i]['pmadb']               = 'phpmyadmin';

// Bookmark table
//   - leave blank for no bookmark support
//     DEFAULT: 'pma_bookmark'
$cfg['Servers'][$i]['bookmarktable']       = 'pma__bookmark';

// table to describe the relation between links (see doc)
//   - leave blank for no relation-links support
//     DEFAULT: 'pma_relation'
$cfg['Servers'][$i]['relation']            = 'pma__relation';

// table to describe the display fields
//   - leave blank for no display fields support
//     DEFAULT: 'pma_table_info'
$cfg['Servers'][$i]['table_info']          = 'pma__table_info';

// table to describe the tables position for the PDF schema
//   - leave blank for no PDF schema support
//     DEFAULT: 'pma_table_coords'
$cfg['Servers'][$i]['table_coords']        = 'pma__table_coords';

// table to describe pages of relationpdf
//   - leave blank if you don't want to use this
//     DEFAULT: 'pma_pdf_pages'
$cfg['Servers'][$i]['pdf_pages']           = 'pma__pdf_pages';

// table to store column information
//   - leave blank for no column comments/mime types
//     DEFAULT: 'pma_column_info'
$cfg['Servers'][$i]['column_info']         = 'pma__column_info';

// table to store SQL history
//   - leave blank for no SQL query history
//     DEFAULT: 'pma_history'
$cfg['Servers'][$i]['history']             = 'pma__history';

// Table to store user interface enhancement data.
//   - Leave blank to disable.
//     DEFAULT: 'pma_table_uiprefs'
$cfg['Servers'][$i]['table_uiprefs']       = 'pma__table_uiprefs';

// Table to store version/change tracking data
//   - leave blank to disable
//     DEFAULT: 'pma_tracking'
$cfg['Servers'][$i]['tracking']            = 'pma__tracking';

// Table in which to store information for the designer feature.
//     DEFAULT: 'pma_designer_coords'
$cfg['Servers'][$i]['designer_coords']     = 'pma__designer_coords';

// Table to store user preferences -- allows users to set most
// preferences by themselves and store them in the phpMyAdmin
// configuration storage database.
// If you don't allow for storing preferences in pmadb, users can
// still personalize phpMyAdmin, but settings will be saved in
// browser's local storage, or, it is is unavailable, until the end
// of session.
//    DEFAULT: 'pma_userconfig'
$cfg['Servers'][$i]['userconfig']          = 'pma__userconfig';

// Table to store a list of recently used tables to be shown in the
// left navigation frame. It helps you to jump across table directly,
// without the need to select the database, and then select the table.
// Using $cfg['LeftRecentTable'] you can configure the maximum number
// of recent tables shown.
// Without configuring the storage, you can still access the recently
// used tables, but it will disappear after you logout.
//   DEFAULT: 'pma_recent'
$cfg['Servers'][$i]['recent']              = 'pma__recent';

// You can create different user groups with menu items attached to them.
// Users can be assigned to these groups and the logged in user
// would only see menu items configured to the usergroup he is assigned to.
// To do this it needs two tables “usergroups” (storing allowed menu items for each user group)
// and “users” (storing users and their assignments to user groups).
//   DEFAULT: 'pma_users'
//   DEFAULT: 'pma_usergroups'
$cfg['Servers'][$i]['users']               = 'pma__users';
$cfg['Servers'][$i]['usergroups']          = 'pma__usergroups';

// You can hide/show items in the navigation tree.
//   DEFAULT: 'pma_navigationhiding'
$cfg['Servers'][$i]['navigationhiding']    = 'pma__navigationhiding';

/* Contrib / Swekey authentication */
// The name of the file containing Swekey ids and login names for
// hardware authentication. Leave the string empty to deactivate this
// feature.
// see _docdir/examples/swekey.sample.conf
//$cfg['Servers'][$i]['auth_swekey_config']  = '/etc/phpMyAdmin/swekey-pma.conf';


/***************************************
 * Second Server
 */

/*
$i++;
$cfg['Servers'][$i]['host']                = 'localhost';
$cfg['Servers'][$i]['port']                = '';
$cfg['Servers'][$i]['socket']              = '';
$cfg['Servers'][$i]['ssl']                 = false;
$cfg['Servers'][$i]['connect_type']        = 'socket';
$cfg['Servers'][$i]['extension']           = 'mysqli';
$cfg['Servers'][$i]['compress']            = false;
$cfg['Servers'][$i]['auth_type']           = 'cookie';
$cfg['Servers'][$i]['user']                = 'root';
$cfg['Servers'][$i]['password']            = '';
$cfg['Servers'][$i]['AllowNoPassword']     = false;
$cfg['Servers'][$i]['AllowRoot']           = true;
$cfg['Servers'][$i]['SignonSession']       = '';
$cfg['Servers'][$i]['SignonURL']           = '';
$cfg['Servers'][$i]['LogoutURL']           = '';
$cfg['Servers'][$i]['only_db']             = '';
$cfg['Servers'][$i]['verbose']             = '';
$cfg['Servers'][$i]['verbose_check']       = true;
$cfg['Servers'][$i]['AllowDeny']['order']  = '';
$cfg['Servers'][$i]['AllowDeny']['rules']  = array();
*/

/*
 * phpMyAdmin configuration storage settings.
 */

/*
$cfg['Servers'][$i]['controlhost']         = 'localhost';
$cfg['Servers'][$i]['controluser']         = '';
$cfg['Servers'][$i]['controlpass']         = '';
$cfg['Servers'][$i]['pmadb']               = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable']       = 'pma__bookmark';
$cfg['Servers'][$i]['relation']            = 'pma__relation';
$cfg['Servers'][$i]['table_info']          = 'pma__table_info';
$cfg['Servers'][$i]['table_coords']        = 'pma__table_cords';
$cfg['Servers'][$i]['pdf_pages']           = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info']         = 'pma__column_info';
$cfg['Servers'][$i]['history']             = 'pma__history';
$cfg['Servers'][$i]['table_uiprefs']       = 'pma__table_uiprefs';
$cfg['Servers'][$i]['tracking']            = 'pma__tracking';
$cfg['Servers'][$i]['designer_coords']     = 'pma__designer_coords';
$cfg['Servers'][$i]['userconfig']          = 'pma__userconfig';
$cfg['Servers'][$i]['recent']              = 'pma__recent';
$cfg['Servers'][$i]['users']               = 'pma__users';
$cfg['Servers'][$i]['usergroups']          = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding']    = 'pma__navigationhiding';
$cfg['Servers'][$i]['auth_swekey_config']  = '/etc/phpMyAdmin/swekey-pma_02.conf';
*/

// If you have more than one server configured, you can set $cfg['ServerDefault']
// to any one of them to autoconnect to that server when phpMyAdmin is started,
// or set it to 0 to be given a list of servers without logging in
// If you have only one server configured, $cfg['ServerDefault'] *MUST* be
// set to that server.

// Default server (0 = no default server)
$cfg['ServerDefault'] = 1;
$cfg['Server']        = '0';
unset($cfg['Servers'][0]);

/***************************************
 * End of servers configuration
 */

/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/**
 * Defines whether a user should be displayed a "show all (records)"
 * button in browse mode or not.
 * default = false
 */
//$cfg['ShowAll'] = true;

/**
 * Number of rows displayed when browsing a result set. If the result
 * set contains more rows, "Previous" and "Next".
 * default = 30
 */
//$cfg['MaxRows'] = 50;

/**
 * disallow editing of binary fields
 * valid values are:
 *   false    allow editing
 *   'blob'   allow editing except for BLOB fields
 *   'noblob' disallow editing except for BLOB fields
 *   'all'    disallow editing
 * default = blob
 */
//$cfg['ProtectBinary'] = 'false';

/**
 * Default language to use, if not browser-defined or user-defined
 * (you find all languages in the locale folder)
 * uncomment the desired line:
 * default = 'en'
 */
//$cfg['DefaultLang'] = 'en';
//$cfg['DefaultLang'] = 'de';

/**
 * default display direction (horizontal|vertical|horizontalflipped)
 */
//$cfg['DefaultDisplay'] = 'vertical';


/**
 * How many columns should be used for table display of a database?
 * (a value larger than 1 results in some information being hidden)
 * default = 1
 */
//$cfg['PropertiesNumColumns'] = 2;

/**
 * Set to true if you want DB-based query history.If false, this utilizes
 * JS-routines to display query history (lost by window close)
 *
 * This requires configuration storage enabled, see above.
 * default = false
 */
//$cfg['QueryHistoryDB'] = true;

/**
 * When using DB-based query history, how many entries should be kept?
 *
 * default = 25
 */
//$cfg['QueryHistoryMax'] = 100;

/**
 * Should error reporting be enabled for JavaScript errors
 *
 * default = 'ask' 
 */
//$cfg['SendErrorReports'] = 'ask';

/*
 * You can find more configuration options in the documentation
 * in the doc/ folder or at <http://docs.phpmyadmin.net/>.
 */
?>
