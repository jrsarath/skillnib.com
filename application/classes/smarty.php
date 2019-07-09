<?php
class newSmarty extends Smarty {
  function __construct()
  {
      parent::__construct();
      $this->template_dir = $_SERVER["DOCUMENT_ROOT"]."/application/templates";
      $this->config_dir = $_SERVER["DOCUMENT_ROOT"].'/application/conf';
      $this->compile_dir = $_SERVER["DOCUMENT_ROOT"]."/application/templates_cache";
      $this->caching = 0;
  }
}
$smarty = new newSmarty;
