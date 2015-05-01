<?php defined('SYSPATH') or die('No direct script access.');

abstract class Page extends Controller_Template {
    public $themes = 'default';
    public $template = 'default';
    public function before() {
        Kohana::add_path('themes/'.$this->themes.'/'); 
        parent::before();
    }

}
