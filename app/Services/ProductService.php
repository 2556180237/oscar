<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProductsWithRelation(string $relation)
    {
        return $this->productRepository->getAllWithRelations([$relation]);
    }

    public function createProduct(array $data)
    {
        return $this->productRepository->create($data);
    }

    public function updateProduct($productId, array $data)
    {
        $product = $this->productRepository->getById($productId);

        if (!$product) {
            return null;
        }

        return $this->productRepository->update($product, $data);
    }
}

