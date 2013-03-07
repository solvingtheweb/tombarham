<?php
/*
Plugin Name: Thomas Barham CMS UI
Plugin URI: http://www.solvingtheweb.com/
Description: Customized Pods UI
Version: 0.1
Author: Solve Design LLC
Author URI: http://www.solvingtheweb.com
*/




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


function pods_ui_conceptmenu()
{
	$icon = WP_PLUGIN_URL. '/TB CMS UI/gear.png';
	add_object_page('Concept Galleries', 'Concept Galleries', 'read', 'conceptmenu', '', $icon);
	add_submenu_page('conceptmenu', ' Concept Galleries', 'Concept Galleries', 'read', 'conceptmenu', 'conceptimages');
	add_submenu_page('conceptmenu', ' Reorder', 'Reorder', 'read', 'reorderconcept', 'reorderconcept');
}

function conceptimages()
{
  $object = new Pod('concept');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
					'image',
					'caption',
					'image2',
					'caption2',
					'image3',
					'caption3',
					'image4',
					'caption4',
					'image5',
					'caption5',
					'image6',
					'caption6',
					'image7',
					'caption7',
					'image8',
					'caption8',
					'image9',
					'caption9',
					'image10',
					'caption10',
					 );
  $object->ui = array(
                    'title'   => 'Concept Galleries',
                    'columns' => array(
                              'name'      => 'Name',
							  'created'	  => 'Date Created',
							  'modified' => 'Last Modified'
                              ),
					'sort'	  => 't.conceptdisplayorder ASC',
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields
					);
  pods_ui_manage($object);
}

function reorderconcept()
{
  $object = new Pod('concept');
  $add_fields = $edit_fields = array(
                    'name'
					 );
  $object->ui = array(
                    'title'   => 'Concept Galleries',
					'reorder' => 'conceptdisplayorder',
					'reorder_columns' => array(
					          'name'      => 'Name',
							  'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
					),
					'sort'	  => 't.conceptdisplayorder ASC',
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

add_action('admin_menu','pods_ui_conceptmenu');

?>