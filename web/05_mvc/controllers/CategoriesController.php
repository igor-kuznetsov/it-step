<?php

namespace controllers;

use core\Controller;
use models\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Category();
    }

    public function index()
    {
        $this->data['categories'] = $this->model->getList();
    }
}