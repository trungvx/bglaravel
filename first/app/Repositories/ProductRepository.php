<?php
/**
 * Created by PhpStorm.
 * User: trungvx
 * Date: 11/8/18
 * Time: 8:54 AM
 */

namespace App\Repositories;

use App\Product;

class ProductRepository implements ProductInterface
{
    /**
     * @var Product
     */
    protected $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function create (Product $product) : bool
    {
        //$this->model->sa
        return true;
    }
    public function edit (Product $product) : bool
    {

    }
    public function delete (Product $product) : bool
    {

    }
    public function get (int $id) :Product
    {

    }
}