<?php
 // created: 2018-08-08 11:57:01
$layout_defs["Users"]["subpanel_setup"]['users_devic_device_1'] = array (
  'order' => 100,
  'module' => 'devic_device',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_DEVIC_DEVICE_1_FROM_DEVIC_DEVICE_TITLE',
  'get_subpanel_data' => 'users_devic_device_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
