<?php

namespace App\Http\Controllers;


use App\Menu;

class MainController extends Controller
{

    public $data;

    public function __construct(Menu $modelMenu)
    {
        $this->data = [];

        $this->data['menu']['left'] = $modelMenu->getLeftMenu();
        $this->data['menu']['right'] = $modelMenu->getRightMenu();

    }

}