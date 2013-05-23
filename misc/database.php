<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Database Config
 * 
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License Version 3 (GPLv3)
 */

return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => getenv('OPENSHIFT_MYSQL_DB_HOST') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'),
			'database'   => getenv('OPENSHIFT_APP_NAME'),
			'username'   => getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
			'password'   => getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => TRUE,
	)
);
