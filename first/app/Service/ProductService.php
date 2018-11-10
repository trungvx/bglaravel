<?php
/**
 * Created by PhpStorm.
 * User: trungvx
 * Date: 11/9/18
 * Time: 12:24 AM
 */

namespace App\Service;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;

class ProductService implements ProductServiceInterface
{
    /**
     * @var ProductServiceInterface
     */
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function create(array $data): bool
    {
        return $this->productRepository->create($data);
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
        return null;
    }


}