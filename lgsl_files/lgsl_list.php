<?php

 /*----------------------------------------------------------------------------------------------------------\
 |                                                                                                            |
 |                      [ LIVE GAME SERVER LIST ] [ � RICHARD PERRY FROM GREYCUBE.COM ]                       |
 |                                                                                                            |
 |    Released under the terms and conditions of the GNU General Public License Version 3 (http://gnu.org)    |
 |                                                                                                            |
 \-----------------------------------------------------------------------------------------------------------*/

//------------------------------------------------------------------------------------------------------------+

  require("lgsl_class.php");

  $server_list = lgsl_query_group();
  $server_list = lgsl_sort_servers($server_list);

//------------------------------------------------------------------------------------------------------------+

  // require("lgsl_files/templates/lgsl_list-{$lgsl_config['theme']['list']}.php");
  require("lgsl_files/templates/lgsl_list-default.php");

//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
//------ PLEASE MAKE A DONATION OR SIGN THE GUESTBOOK AT GREYCUBE.COM IF YOU REMOVE THIS CREDIT ----------------------------------------------------------------------------------------------------+
  $output .= "<div style='text-align:center; font-family:tahoma; font-size:9px'><br /><br /><br /><a href='http://www.greycube.com' style='text-decoration:none'>".lgsl_version()."</a><br /></div>";
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+