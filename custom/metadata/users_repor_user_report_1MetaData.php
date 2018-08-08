<?php
// created: 2018-08-08 11:55:25
$dictionary["users_repor_user_report_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'users_repor_user_report_1' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'repor_user_report',
      'rhs_table' => 'repor_user_report',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'users_repor_user_report_1_c',
      'join_key_lhs' => 'users_repor_user_report_1users_ida',
      'join_key_rhs' => 'users_repor_user_report_1repor_user_report_idb',
    ),
  ),
  'table' => 'users_repor_user_report_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'users_repor_user_report_1users_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'users_repor_user_report_1repor_user_report_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'users_repor_user_report_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'users_repor_user_report_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_repor_user_report_1users_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'users_repor_user_report_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_repor_user_report_1repor_user_report_idb',
      ),
    ),
  ),
);