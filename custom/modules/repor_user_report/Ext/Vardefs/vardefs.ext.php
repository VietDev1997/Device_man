<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-08-13 04:48:07
$dictionary["repor_user_report"]["fields"]["devic_device_repor_user_report_1"] = array (
  'name' => 'devic_device_repor_user_report_1',
  'type' => 'link',
  'relationship' => 'devic_device_repor_user_report_1',
  'source' => 'non-db',
  'module' => 'devic_device',
  'bean_name' => 'devic_device',
  'vname' => 'LBL_DEVIC_DEVICE_REPOR_USER_REPORT_1_FROM_DEVIC_DEVICE_TITLE',
  'id_name' => 'devic_device_repor_user_report_1devic_device_ida',
);
$dictionary["repor_user_report"]["fields"]["devic_device_repor_user_report_1_name"] = array (
  'name' => 'devic_device_repor_user_report_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DEVIC_DEVICE_REPOR_USER_REPORT_1_FROM_DEVIC_DEVICE_TITLE',
  'save' => true,
  'id_name' => 'devic_device_repor_user_report_1devic_device_ida',
  'link' => 'devic_device_repor_user_report_1',
  'table' => 'devic_device',
  'module' => 'devic_device',
  'rname' => 'name',
);
$dictionary["repor_user_report"]["fields"]["devic_device_repor_user_report_1devic_device_ida"] = array (
  'name' => 'devic_device_repor_user_report_1devic_device_ida',
  'type' => 'link',
  'relationship' => 'devic_device_repor_user_report_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DEVIC_DEVICE_REPOR_USER_REPORT_1_FROM_DEVIC_DEVICE_TITLE',
);

?>