<?php

namespace website\controllers;

use website\core\Controller;
use website\models\Product;

class ProductsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Product();
    }

    public function index()
    {
        $category = empty($this->params['category']) ? 0 : (int) $this->params['category'];
        $this->data['products'] = $this->model->getListByCategory($category);
    }

    public function product()
    {
        $id = empty($this->params['id']) ? 0 : (int) $this->params['id'];
        $this->data['product'] = $this->model->getById($id);
    }
}