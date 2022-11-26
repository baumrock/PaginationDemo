<?php

namespace ProcessWire;

class ProcessPaginationDemo extends Process
{
  public static function getModuleInfo()
  {
    return [
      'title' => 'ProcessWire Backend Pagination Demo',
      'version' => '0.0.1',
      'summary' => '',
      'icon' => '',
      'requires' => [],
      'installs' => [],


      // name of permission required of users to execute this Process (optional)
      'permission' => 'foo',
      // permissions that you want automatically installed/uninstalled with this module (name => description)
      'permissions' => ['foo' => 'May run the foo module'],

      // page that you want created to execute this module
      'page' => [
        'name' => 'paginationdemo',
        'parent' => 'setup',
        'title' => 'Pagination Demo'
      ],
    ];
  }

  public function init()
  {
    parent::init(); // always remember to call the parent init
  }

  public function execute()
  {
    return $this->wire->files->render(__DIR__ . "/pagination.php");
  }
}
