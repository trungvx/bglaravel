<?php
/**
 * Created by PhpStorm.
 * User: trungvx
 * Date: 11/8/18
 * Time: 8:54 AM
 */

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var Product
     */
    protected $model;

    function __construct(Product $model, int $data)
    {
        $this->model = $model;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function create(array $data): bool
    {
        //dd($data);
        return (boolean)$this->model->create($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function edit(int $id, array $data): bool
    {
        // TODO: Implement edit() method.
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param int $id
     * @return Product
     */
    public function get(int $id): Product
    {
        // TODO: Implement get() method.
    }


}