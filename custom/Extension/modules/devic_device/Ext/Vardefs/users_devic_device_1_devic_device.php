<?php
// created: 2018-08-08 11:57:01
$dictionary["devic_device"]["fields"]["users_devic_device_1"] = array (
  'name' => 'users_devic_device_1',
  'type' => 'link',
  'relationship' => 'users_devic_device_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_DEVIC_DEVICE_1_FROM_USERS_TITLE',
  'id_name' => 'users_devic_device_1users_ida',
);
$dictionary["devic_device"]["fields"]["users_devic_device_1_name"] = array (
  'name' => 'users_devic_device_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_DEVIC_DEVICE_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_devic_device_1users_ida',
  'link' => 'users_devic_device_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["devic_device"]["fields"]["users_devic_device_1users_ida"] = array (
  'name' => 'users_devic_device_1users_ida',
  'type' => 'link',
  'relationship' => 'users_devic_device_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_DEVIC_DEVICE_1_FROM_DEVIC_DEVICE_TITLE',
);
