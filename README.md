WebMaster
============
Warning
----------
The PHP version of WebMaster is now depreciated and no longer in development. This branch is for historical and reference purposes only.

Introduction
--------------
WebMaster is an open-source all-purpose website content managment system (CMS) that is currently in development by [Alias Host](http://www.aliashost.com) in partnership with [MyRuneLog's Development Team](http://www.myrunelog.com/forum/).

Brief History
---------------
Originally dreamed up by David Schiehsl as a CMS to bring together several independent
CMS's and allow them to interface together including [Invision Power Board](http://www.invisionpower.com/)
and a On-line Radio Control Panel such as [Centova Cast](http://www.centova.com/pages/cast).

It soon developed into something far larger than originally thought of as David and a friend, now Lead
Developer Devon McAvoy, realized that it not only had potential to link and utilize information from
various CMS's it could also be used as CMS in and of itself allow the alteration of website templates
and other basic website management functions.

This potential was also recognized [MyRuneLog.com](http://www.myrunelog.com/) owner Harley Dishon, 
friend of David's, who was looking for a CMS for his website. Harley took it upon himself to assemble the
current MyRuneLog Development Team, headed by Devon McAvoy, to undertake the daunting task of writing 
WebMaster.

Running
---------
Running WebMaster currently requires

  * PHP 5.3.8 (Untested on other versions)
	
PHP Extensions:

  * SPL Support - Compiled with PHP 5.3.0+
  * SPL_Types 0.4.0-dev - This is an experimental PHP extension, as such some web hosting services may 
		refuse to install it. We will replace the functionality of this extension by the full release.

Installation
--------------
WebMaster is currently in development and cannot install

To install PHP please follow the 
[PHP Installation and Configuration](http://www.php.net/manual/en/install.php) instructions for your
system and configuration

To install SPL_Types 0.4.0-dev please use the following commands after installing 
[Subversion](http://subversion.apache.org/) on your system.

  * Navigate to a temporary directory such as `\tmp`
  * Then issue the following commands
  * `svn checkout http://svn.php.net/repository/pecl/spl_types/trunk SPL_Types`
  * `pecl package SPL_Types/package.xml`
  * `pecl install SPL_Types-0.3.0.tgz`
  * Then add the following line to your `php.ini` file, located in `/etc` or the php
		install directory specified upon compilation, using your favorite text editor
  * `extension = spl_types.so`
  * Restart your PHP service
	
Documentation
--------------
[phpDocs](http://www.phpdocs.org/) may be generated using the `phpdocs` program in the terminal. 
This may need to be installed on your system.

For documentation on WebMaster se the
[WebMaster phpDocs](http://pd.dev.myrunelog.com/).

Credits
-------
  * [PHP](http://php.net) - and everyone else who has contributed to PHP.
  * Harley Dishon and [MyRuneLog Community](http://myrunelog.com/forums) - for sponsoring the 
	creation of WebMaster and providing MyRuneLog's Development Team
  * David Schiehsl - for the great idea
  * All the people behind SPL_Types and [phpDocumentor](http://www.phpdocs.org)
  * [Spout Development Team](http://www.spout.org) - for coming up with a great license.
  
Copyright
---------
WebMaster is open-source software released under the Alias License Version 1 which is the LGPLv3 license, but with a provision that files are released under the MIT license 365 days after they are published. Please see the `LICENSE.txt` file for details.

Copyright Disclaimers are described in `COPYRIGHT_DISCLAIMERS.txt`