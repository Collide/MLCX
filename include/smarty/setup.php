<?php
class Smarty_MLA extends Smarty {
  function __construct()
  {
    parent::__construct();
    $this->setTemplateDir(RUTA_THEME);
    $this->setCompileDir(RUTA_THEME . '/compile');
    $this->setConfigDir(RUTA_THEME . '/config');
    $this->setCacheDir(RUTA_THEME . '/cache');

    $this->caching = false;
    $this->assign('url', WWW);
    $this->assign('url_theme', WWW . '/template');
    $this->assign('app_name', NOMBRE_SITIO);
    $this->assign('arraySessions', $_SESSION);
  }
}
?>