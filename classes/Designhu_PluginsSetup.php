<?php 

class Designhu_PluginsSetup {
    public $handle;
    public $src;
    public $deps;
    public $ver;
    public $in_footer;

    public function __construct()
    {
        $this->deps = array();
        $this->ver = false;
        $this->in_footer = false;
    }
}

 ?>