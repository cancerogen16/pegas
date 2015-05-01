<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Basic Controller Page
**/
abstract class Controller_Page extends Controller_Template {
    public $template = 'default';
    public $main_config;
    public $title;
    public $keywords;
    public $description;
  
    public function before()
    {
    /**
    * Получение основных настроек
    **/
    $this->main_config = Kohana::$config->load('main');
     
    Kohana::add_path('themes/'.$this->main_config->get('web_theme').'/');
    parent::before();
     
     
    $this->template->styles = array('main');
    //$this->template->scripts = '';
    }
     
    public function after()
    {
    View::set_global(array(
        'title' => !isset($this->title)?$this->main_config->get('title'):$this->title,
    'keywords' => !isset($this->keywords)?$this->main_config->get('keywords'):$this->keywords,
        'description' => !isset($this->description)?$this->main_config->get('description'):$this->description
    ));
     
    parent::after();
    }
     
}