<?php

namespace App\Controller;

use Philo\Blade\Blade;

class BaseController
{
    private $views;
    private $cache;
    public $view;

    public function __construct()
    {
        $this->views = __DIR__ . '/../../resources/views';
        $this->cache = __DIR__ . '/../../storage/views';

    }

    public function view($view, array $args = array())
    {
        $blade = new Blade($this->views, $this->cache);
        return $blade->view()->make($view, $args)->render();
    }


}