<?php
/**
 * Created by PhpStorm.
 * User: trungvx
 * Date: 11/8/18
 * Time: 8:53 AM
 */

namespace App\Repositories;


use App\Product;
use phpDocumentor\Reflection\Types\Boolean;

Interface ProductInterface
{
    public function create (Product $product) : bool ;
    public function edit (Product $product) : bool ;
    public function delete (Product $product) : bool ;
    public function get (int $id) : Product ;


}