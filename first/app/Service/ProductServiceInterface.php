<?php
/**
 * Created by PhpStorm.
 * User: trungvx
 * Date: 11/9/18
 * Time: 12:22 AM
 */

namespace App\Service;


interface ProductServiceInterface
{
    public function create ( array $data ) : bool ;
    public function edit (int $id, array $data) : bool ;
    public function delete (int $id) : bool ;
    public function get (int $id) : Product ;
}