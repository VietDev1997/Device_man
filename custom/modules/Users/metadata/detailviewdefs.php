<?php
$viewdefs ['Users'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'useTabs' => true,
    'tabDefs' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'full_name',
          1 => 'user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        2 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'UserType',
            'customCode' => '{$USER_TYPE_READONLY}',
          ),
        ),
        3 => 
        array (
          0 => 'phone_mobile',
        ),
        4 => 
        array (
          0 => 'photo',
          1 => 
          array (
            'name' => 'users_repor_user_report_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
