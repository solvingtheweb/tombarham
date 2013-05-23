<?php
/*
Plugin Name: Thomas Barham CMS UI
Plugin URI: http://www.solvingtheweb.com/
Description: Customized Pods UI
Version: 0.1
Author: Solve Design LLC
Author URI: http://www.solvingtheweb.com
*/


/* Adds Home Pod to Wordpress Menu */

function pods_ui_homemenu()
{
  $icon = WP_PLUGIN_URL. '/TB CMS UI/gear.png';
  add_object_page('home', 'Home', 'read', 'homemenu', '', $icon);
  add_submenu_page('homemenu', ' Videos', 'Videos', 'read', 'homemenu', 'homevideos');
  add_submenu_page('homemenu', ' Reorder', 'Reorder', 'read', 'reorderhome', 'reorderhome');
}

function homevideos()
{
  $object = new Pod('Home');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
                    'vimeolink',
                    'image'
           );
  $object->ui = array(
                    'title'   => 'Home (Videos)',
                    'columns' => array(
                              'name'      => 'Name',
                              'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
                              ),
          'where'     => "t.vimeolink",
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields
          );
  pods_ui_manage($object);
}

function reorderhome()
{
  $object = new Pod('home');
  $add_fields = $edit_fields = array(
                    'name'
           );
  $object->ui = array(
                    'title'   => 'Reorder Home',
          'reorder' => 'homedisplayorder',
          'reorder_columns' => array(
                    'name'      => 'Name',
                'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
          ),
          'sort'    => 't.homedisplayorder ASC',
                    'columns' => array(
                              'name'      => 'Name',
                              'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
                              ),
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields,
          'disable_actions' => array( 'add', 'duplicate', 'delete')
          );
  pods_ui_manage($object);
}

add_action('admin_menu','pods_ui_homemenu');


/* Adds Commercials Pod to Wordpress Menu */

function pods_ui_commercialsmenu()
{
	$icon = WP_PLUGIN_URL. '/TB CMS UI/gear.png';
	add_object_page('Commercials', 'Commercials', 'read', 'commercialsmenu', '', $icon);
	add_submenu_page('commercialsmenu', ' Videos', 'Videos', 'read', 'commercialsmenu', 'commercialvideos');
	add_submenu_page('commercialsmenu', ' Reorder', 'Reorder', 'read', 'reordercomm', 'reordercomm');
}

function commercialvideos()
{
  $object = new Pod('commercials');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
					          'vimeolink',
                    'image'
					 );
  $object->ui = array(
                    'title'   => 'Commercials (Videos)',
                    'columns' => array(
                              'name'      => 'Name',
                              'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
                              ),
					'where'     => "t.vimeolink",
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields
					);
  pods_ui_manage($object);
}

function reordercomm()
{
  $object = new Pod('commercials');
  $add_fields = $edit_fields = array(
                    'name'
					 );
  $object->ui = array(
                    'title'   => 'Reorder Commercials',
					'reorder' => 'commercialdisplayorder',
					'reorder_columns' => array(
					          'name'      => 'Name',
							  'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
					),
					'sort'	  => 't.commercialdisplayorder ASC',
                    'columns' => array(
                              'name'      => 'Name',
                              'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
                              ),
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields,
					'disable_actions' => array( 'add', 'duplicate', 'delete')
					);
  pods_ui_manage($object);
}

add_action('admin_menu','pods_ui_commercialsmenu');


/* Adds Titles Pod to Wordpress Menu */

function pods_ui_titlesmenu()
{
	$icon = WP_PLUGIN_URL. '/TB CMS UI/gear.png';
	add_object_page('Titles', 'Titles', 'read', 'titlesmenu', '', $icon);
	add_submenu_page('titlesmenu', ' Videos', 'Videos', 'read', 'titlesmenu', 'titlesvideos');
	add_submenu_page('titlesmenu', ' Reorder', 'Reorder', 'read', 'reordertitles', 'reordertitles');
}

function titlesvideos()
{
  $object = new Pod('titles');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
					          'vimeolink',
                    'image'
					 );
  $object->ui = array(
                    'title'   => 'Titles (Videos)',
                    'columns' => array(
                              'name'      => 'Name',
                              'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
                              ),
					'where'     => "t.vimeolink",
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields
					);
  pods_ui_manage($object);
}

function reordertitles()
{
  $object = new Pod('titles');
  $add_fields = $edit_fields = array(
                    'name'
					 );
  $object->ui = array(
                    'title'   => 'Titles',
					'reorder' => 'titlesdisplayorder',
					'reorder_columns' => array(
					          'name'      => 'Name',
							  'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
					),
					'sort'	  => 't.titlesdisplayorder ASC',
                    'columns' => array(
                              'name'      => 'Name',
                              'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
                              ),
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields,
					'disable_actions' => array( 'add', 'duplicate', 'delete')
					);
  pods_ui_manage($object);
}

add_action('admin_menu','pods_ui_titlesmenu');

?>