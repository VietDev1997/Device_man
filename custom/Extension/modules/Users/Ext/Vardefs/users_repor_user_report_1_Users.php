<?php
// created: 2018-08-08 11:55:25
$dictionary["User"]["fields"]["users_repor_user_report_1"] = array (
  'name' => 'users_repor_user_report_1',
  'type' => 'link',
  'relationship' => 'users_repor_user_report_1',
  'source' => 'non-db',
  'module' => 'repor_user_report',
  'bean_name' => 'repor_user_report',
  'vname' => 'LBL_USERS_REPOR_USER_REPORT_1_FROM_REPOR_USER_REPORT_TITLE',
  'id_name' => 'users_repor_user_report_1repor_user_report_idb',
);
$dictionary["User"]["fields"]["users_repor_user_report_1_name"] = array (
  'name' => 'users_repor_user_report_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_REPOR_USER_REPORT_1_FROM_REPOR_USER_REPORT_TITLE',
  'save' => true,
  'id_name' => 'users_repor_user_report_1repor_user_report_idb',
  'link' => 'users_repor_user_report_1',
  'table' => 'repor_user_report',
  'module' => 'repor_user_report',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["users_repor_user_report_1repor_user_report_idb"] = array (
  'name' => 'users_repor_user_report_1repor_user_report_idb',
  'type' => 'link',
  'relationship' => 'users_repor_user_report_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_USERS_REPOR_USER_REPORT_1_FROM_REPOR_USER_REPORT_TITLE',
);
