<?
$COM_CONF['site_url'] = "http://localhost";  // Without trailing slash

$COM_CONF['dbhost'] = "localhost";
$COM_CONF['dbuser']="root";
$COM_CONF['dbpassword']="";
$COM_CONF['dbname']="winsor";
$COM_CONF['dbtablespreffix'] = "comments_";
$COM_CONF['dbmaintable'] = "{$COM_CONF['dbtablespreffix']}data";
$COM_CONF['dbemailstable'] = "{$COM_CONF['dbtablespreffix']}subscribes";
$COM_CONF['dbbannedipstable'] = "{$COM_CONF['dbtablespreffix']}banned";
$COM_CONF['dbjunktable'] = "{$COM_CONF['dbtablespreffix']}junk";

$COM_CONF['script_dir'] = "/winsor/comments";
$COM_CONF['admin_name'] = "admin";
$COM_CONF['admin_passw'] = "admin";
$COM_CONF['email_admin'] = "";
$COM_CONF['email_from'] = "leebirir@gmail.com";
$COM_CONF['admin_script_url']="{$COM_CONF['script_dir']}/admin.php";

$COM_CONF['script_url']="{$COM_CONF['script_dir']}/comments.php";
$COM_CONF['template']="default";
$COM_CONF['lang']="en";
$COM_CONF['sort_order']="";      // If you want newest comments at the beginig use "desc"
				 // otherwise leave blank

$COM_CONF['anti_flood_pause'] = '60';  // in seconds

$COM_CONF['akismet_apikey'] = "";
$COM_CONF['ckeck_for_spam'] = 0;


$COM_CONF['copy_random_seed'] = "yN1k4hBA5V"; // Was generated during install.
						 // Using in email notifications for unsubscribing.
						 // Don't change it!
?>