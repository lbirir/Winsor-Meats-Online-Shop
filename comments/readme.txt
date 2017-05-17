ScriptsMill Comments Script v1.04 ReadMe

Requirements:

-PHP 3 or PHP 4
-MySql database: Create a Mysql database on your server (UNLESS you already have one!)
 to store the necessary tables.

========================================================================
Installation instructions:

1. Unpack the script files to a directory on your hard disk.

2. Upload all the script files to a directory on your server
   eg: /comments

   Make sure you keep the exact file structure.

3. Open install.php in your browser and follow the instructions.

4. Edit config.php if needed.

========================================================================

========================================================================
Upgrading instructions for users of Comments Script v1.03

Replace your comments.php and admin.php with files from this package.

========================================================================

========================================================================
Upgrading instructions for users of Comments Script v1.02

1. Replace your comments.php with comments.php from this package.

2. Add Spanish and Portuguese lang files if you need them.
========================================================================


========================================================================
Upgrading instructions for users of Comments Script v1.0 or v.1.01

1. Replace your comments.php, admin.php and all files from templates/admin
   with files from this package.

2. Upload akismet-class.php.

2. Upload update.php and open it in your browser.

3. Delete update.php on a server.
========================================================================

========================================================================
How to use

To show the comments on a page copy and paste the following code:

If your site uses php:

 <?php require("/path/to/your/www-home/comments/comments.php"); ?>

                 OR

 <?php virtual("/comments/comments.php"); ?>
 (doesn't work on some server configurations)

 You can find out what is path to your www-home with code like that:
 <?php echo dirname(__FILE__); ?>

 DO NOT use this script like that: require("http://yoursite.com/comments/comments.php").
 In this case you'll get the same comments for all your pages.

If your site uses SSI:

 <!--#include virtual="/comments/comments.php" -->

If your site uses ASP:

 <!--#include file="/comments/comments.php" -->
 (not tested)

The script recognizes itself the page where it is included and displays comments for this page.

You can create your own templates in "./templates" folder or edit existing files to customize
appearance of the comments. You can find several language files in "./lang" folder and you can
create your own language file there. Don't forget to edit "config.php" in order to use your
tempalte or language file. Please send me your templates and language files to info@scriptsmill.com,
I will include them to the packadge.
========================================================================

For support and new versions please visit http://www.scriptsmill.com/
