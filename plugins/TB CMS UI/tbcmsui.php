<?php
/*
Plugin Name: Thomas Barham CMS UI
Plugin URI: http://www.solvingtheweb.com/
Description: Customized Pods UI
Version: 0.1
Author: Solve Design LLC
Author URI: http://www.solvingtheweb.com
*/

function mytheme_enqueue_admin_style() {

     $admin_handle = 'mytheme_admin_stylesheet';
     $admin_stylesheet = get_template_directory_uri() . '/podsui.css';

     wp_enqueue_style( $admin_handle, $admin_stylesheet );
}
add_action('admin_print_styles', 'mytheme_enqueue_admin_style', 11 );


function pods_ui_commercialsmenu()
{
	$icon = WP_PLUGIN_URL. '/TB CMS UI/wp_icon_home.png';
	add_object_page('Commercials', 'Commercials', 'read', 'commercialsmenu', '', $icon);
	add_submenu_page('commercialsmenu', ' Videos', 'Videos', 'read', 'commercialsmenu', 'commercialvideos');
	add_submenu_page('commercialsmenu', ' Images', 'Images', 'read', 'commercialimages', 'commercialimages');
	add_submenu_page('commercialsmenu', ' Reorder', 'Reorder', 'read', 'reordercomm', 'reordercomm');
}

function commercialvideos()
{
  $object = new Pod('commercials');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
					'vimeolink'
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
function commercialimages()
{
  $object = new Pod('commercials');
  $vimeolink = $object->get_field('vimeolink');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
					'image',
					 );
  $object->ui = array(
                    'title'   => 'Commercials (Images)',
                    'columns' => array(
                              'name'      => 'Name',
							  'created'	  => 'Date Created',
							  'modified' => 'Last Modified'
                              ),
					'sort'	  => 't.commercialdisplayorder ASC',
					'where'     => "t.vimeolink IS NULL",
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

/* Adds Corporate Pod to Wordpress Menu */

function pods_ui_corporatemenu()
{
  $icon = WP_PLUGIN_URL. '/TB CMS UI/wp_icon_home.png';
  add_object_page('Corporate', 'Corporate', 'read', 'corporatemenu', '', $icon);
  add_submenu_page('corporatemenu', ' Videos', 'Videos', 'read', 'corporatemenu', 'corporatevideos');
  add_submenu_page('corporatemenu', ' Images', 'Images', 'read', 'corporateimages', 'corporateimages');
  add_submenu_page('corporatemenu', ' Reorder', 'Reorder', 'read', 'reordercorp', 'reordercorp');
}

function corporatevideos()
{
  $object = new Pod('corporate');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
          'vimeolink'
           );
  $object->ui = array(
                    'title'   => 'Corporate (Videos)',
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
function corporateimages()
{
  $object = new Pod('corporate');
  $vimeolink = $object->get_field('vimeolink');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
          'image',
           );
  $object->ui = array(
                    'title'   => 'Corporate (Images)',
                    'columns' => array(
                              'name'      => 'Name',
                'created'   => 'Date Created',
                'modified' => 'Last Modified'
                              ),
          'sort'    => 't.corporatedisplayorder ASC',
          'where'     => "t.vimeolink IS NULL",
                    'add_fields'  => $add_fields,
                    'edit_fields' => $edit_fields
          );
  pods_ui_manage($object);
}

function reordercorp()
{
  $object = new Pod('corporate');
  $add_fields = $edit_fields = array(
                    'name'
           );
  $object->ui = array(
                    'title'   => 'Reorder Corporate',
          'reorder' => 'corporatedisplayorder',
          'reorder_columns' => array(
                    'name'      => 'Name',
                'created'   => 'Date Created',
                              'modified'  => 'Last Modified'
          ),
          'sort'    => 't.corporatedisplayorder ASC',
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

add_action('admin_menu','pods_ui_corporatemenu');


/* Adds Titles Pod to Wordpress Menu */

function pods_ui_titlesmenu()
{
	$icon = WP_PLUGIN_URL. '/TB CMS UI/wp_icon_home.png';
	add_object_page('Titles', 'Titles', 'read', 'titlesmenu', '', $icon);
	add_submenu_page('titlesmenu', ' Videos', 'Videos', 'read', 'titlesmenu', 'titlesvideos');
	add_submenu_page('titlesmenu', ' Images', 'Images', 'read', 'titlesimages', 'titlesimages');
	add_submenu_page('titlesmenu', ' Reorder', 'Reorder', 'read', 'reordertitles', 'reordertitles');
}

function titlesvideos()
{
  $object = new Pod('titles');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
					'vimeolink'
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
function titlesimages()
{
  $object = new Pod('titles');
  $add_fields = $edit_fields = array(
                    'name',
                    'slug',
					'image',
					 );
  $object->ui = array(
                    'title'   => 'Titles (Images)',
                    'columns' => array(
                              'name'      => 'Name',
							  'created'	  => 'Date Created',
							  'modified' => 'Last Modified'
                              ),
					'sort'	  => 't.titlesdisplayorder ASC',
					'where'     => "t.vimeolink IS NULL",
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
	$icon = WP_PLUGIN_URL. '/TB CMS UI/wp_icon_home.png';
	add_object_page('Concept', 'Concept', 'read', 'conceptmenu', '', $icon);
	add_submenu_page('conceptmenu', ' Concepts', 'Concepts', 'read', 'conceptmenu', 'conceptimages');
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
                    'title'   => 'Concept',
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
                    'title'   => 'Concept',
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