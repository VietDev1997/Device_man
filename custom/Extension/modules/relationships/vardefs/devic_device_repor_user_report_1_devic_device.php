<?php
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
