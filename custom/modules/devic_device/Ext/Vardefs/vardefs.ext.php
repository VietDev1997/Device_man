<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-08-13 04:48:07
$dictionary["devic_device"]["fields"]["devic_device_repor_user_report_1"] = array (
  'name' => 'devic_device_repor_user_report_1',
  'type' => 'link',
  'relationship' => 'devic_device_repor_user_report_1',
  'source' => 'non-db',
  'module' => 'repor_user_report',
  'bean_name' => 'repor_user_report',
  'vname' => 'LBL_DEVIC_DEVICE_REPOR_USER_REPORT_1_FROM_REPOR_USER_REPORT_TITLE',
  'id_name' => 'devic_device_repor_user_report_1repor_user_report_idb',
);
$dictionary["devic_device"]["fields"]["devic_device_repor_user_report_1_name"] = array (
  'name' => 'devic_device_repor_user_report_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DEVIC_DEVICE_REPOR_USER_REPORT_1_FROM_REPOR_USER_REPORT_TITLE',
  'save' => true,
  'id_name' => 'devic_device_repor_user_report_1repor_user_report_idb',
  'link' => 'devic_device_repor_user_report_1',
  'table' => 'repor_user_report',
  'module' => 'repor_user_report',
  'rname' => 'name',
);
$dictionary["devic_device"]["fields"]["devic_device_repor_user_report_1repor_user_report_idb"] = array (
  'name' => 'devic_device_repor_user_report_1repor_user_report_idb',
  'type' => 'link',
  'relationship' => 'devic_device_repor_user_report_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DEVIC_DEVICE_REPOR_USER_REPORT_1_FROM_REPOR_USER_REPORT_TITLE',
);


// created: 2018-08-08 12:00:18
$dictionary["devic_device"]["fields"]["cate_category_device_devic_device_1"] = array (
  'name' => 'cate_category_device_devic_device_1',
  'type' => 'link',
  'relationship' => 'cate_category_device_devic_device_1',
  'source' => 'non-db',
  'module' => 'cate_category_device',
  'bean_name' => 'cate_category_device',
  'vname' => 'LBL_CATE_CATEGORY_DEVICE_DEVIC_DEVICE_1_FROM_CATE_CATEGORY_DEVICE_TITLE',
  'id_name' => 'cate_category_device_devic_device_1cate_category_device_ida',
);
$dictionary["devic_device"]["fields"]["cate_category_device_devic_device_1_name"] = array (
  'name' => 'cate_category_device_devic_device_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CATE_CATEGORY_DEVICE_DEVIC_DEVICE_1_FROM_CATE_CATEGORY_DEVICE_TITLE',
  'save' => true,
  'id_name' => 'cate_category_device_devic_device_1cate_category_device_ida',
  'link' => 'cate_category_device_devic_device_1',
  'table' => 'cate_category_device',
  'module' => 'cate_category_device',
  'rname' => 'name',
);
$dictionary["devic_device"]["fields"]["cate_category_device_devic_device_1cate_category_device_ida"] = array (
  'name' => 'cate_category_device_devic_device_1cate_category_device_ida',
  'type' => 'link',
  'relationship' => 'cate_category_device_devic_device_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CATE_CATEGORY_DEVICE_DEVIC_DEVICE_1_FROM_DEVIC_DEVICE_TITLE',
);


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

?>