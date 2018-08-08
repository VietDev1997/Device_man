<?php
// created: 2018-08-08 11:55:25
$dictionary["repor_user_report"]["fields"]["users_repor_user_report_1"] = array (
  'name' => 'users_repor_user_report_1',
  'type' => 'link',
  'relationship' => 'users_repor_user_report_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_REPOR_USER_REPORT_1_FROM_USERS_TITLE',
  'id_name' => 'users_repor_user_report_1users_ida',
);
$dictionary["repor_user_report"]["fields"]["users_repor_user_report_1_name"] = array (
  'name' => 'users_repor_user_report_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_REPOR_USER_REPORT_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_repor_user_report_1users_ida',
  'link' => 'users_repor_user_report_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["repor_user_report"]["fields"]["users_repor_user_report_1users_ida"] = array (
  'name' => 'users_repor_user_report_1users_ida',
  'type' => 'link',
  'relationship' => 'users_repor_user_report_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_USERS_REPOR_USER_REPORT_1_FROM_USERS_TITLE',
);
