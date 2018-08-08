<?php
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
