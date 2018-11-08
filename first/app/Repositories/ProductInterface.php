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
    public function create ( array $data ) : bool ;
    public function edit (int $id, array $data) : bool ;
    public function delete (int $id) : bool ;
    public function get (int $id) : Product ;


}