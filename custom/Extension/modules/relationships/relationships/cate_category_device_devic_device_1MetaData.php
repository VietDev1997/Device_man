<?php
// created: 2018-08-08 12:00:18
$dictionary["cate_category_device_devic_device_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cate_category_device_devic_device_1' => 
    array (
      'lhs_module' => 'cate_category_device',
      'lhs_table' => 'cate_category_device',
      'lhs_key' => 'id',
      'rhs_module' => 'devic_device',
      'rhs_table' => 'devic_device',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cate_category_device_devic_device_1_c',
      'join_key_lhs' => 'cate_category_device_devic_device_1cate_category_device_ida',
      'join_key_rhs' => 'cate_category_device_devic_device_1devic_device_idb',
    ),
  ),
  'table' => 'cate_category_device_devic_device_1_c',
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
      'name' => 'cate_category_device_devic_device_1cate_category_device_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cate_category_device_devic_device_1devic_device_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cate_category_device_devic_device_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cate_category_device_devic_device_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cate_category_device_devic_device_1cate_category_device_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cate_category_device_devic_device_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cate_category_device_devic_device_1devic_device_idb',
      ),
    ),
  ),
);