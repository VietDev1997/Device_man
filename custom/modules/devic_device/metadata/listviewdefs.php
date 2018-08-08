<?php
$module_name = 'devic_device';
$listViewDefs [$module_name] = 
array (
  'CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'MONITOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MONITOR',
    'width' => '10%',
    'default' => true,
  ),
  'KEYBOARD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_KEYBOARD',
    'width' => '10%',
    'default' => true,
  ),
  'MOUSE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MOUSE',
    'width' => '10%',
    'default' => true,
  ),
  'CASE_DEVICE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CASE_DEVICE',
    'width' => '10%',
    'default' => true,
  ),
  'CONFIG' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONFIG',
    'width' => '10%',
    'default' => true,
  ),
  'QUANTYTI' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_QUANTYTI',
    'width' => '10%',
    'default' => true,
  ),
  'PRICE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'HISTORY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HISTORY',
    'width' => '10%',
    'default' => true,
  ),
  'USERS_DEVIC_DEVICE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_DEVIC_DEVICE_1_FROM_USERS_TITLE',
    'id' => 'USERS_DEVIC_DEVICE_1USERS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DEVIC_DEVICE_REPOR_USER_REPORT_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DEVIC_DEVICE_REPOR_USER_REPORT_1_FROM_REPOR_USER_REPORT_TITLE',
    'id' => 'DEVIC_DEVICE_REPOR_USER_REPORT_1REPOR_USER_REPORT_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'CATE_CATEGORY_DEVICE_DEVIC_DEVICE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CATE_CATEGORY_DEVICE_DEVIC_DEVICE_1_FROM_CATE_CATEGORY_DEVICE_TITLE',
    'id' => 'CATE_CATEGORY_DEVICE_DEVIC_DEVICE_1CATE_CATEGORY_DEVICE_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
