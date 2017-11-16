<?php

namespace controllers;

use core\Controller;
use models\Product;

class ProductsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Product();
    }

    public function index()
    {
        $this->data['products'] = $this->model->getList();
    }

    public function product()
    {
        $id = empty($this->params[0]) ? 0 : (int) $this->params[0];
        $this->data['product'] = $this->model->getById($id);
    }
}