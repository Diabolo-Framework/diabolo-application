<?php
return array(
  'document_root' => __DIR__.'/..',
  'module_path' => array(),
  'service_path' => array(),
  'library_path' => array(),
  'modules' => array(
    'Welcome' => array(
      'enable' => true,
      'default' => true,
      'params' => array(),
    ),
    'Deditor' => array(
      'enable' => true,
      'default' => true,
      'params' => array(),
    )
  ),
  'services' => array(
    'XAction' => array(
      'class' => '\\X\\Service\\XAction\\Service',
      'enable' => true,
      'delay' => true,
      'params' => array(
        'ActionParamName' => 'action',
        'CommonViewPath' => 'View',
      ),
    ),
  ),
  'params' => array(),
);
