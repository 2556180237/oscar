<?php

namespace App\Repositories;

use App\Models\Store;

class StoreRepository
{
    public function getAll()
    {
        return Store::all();
    }

    public function getAllWithRelations($relations)
    {
        return Store::with($relations)->orderBy('created_at', 'desc')->get();
    }


    public function getById($id)
    {
        return Store::find($id);
    }

    public function create(array $data)
    {
        return Store::create($data);
    }

    public function update(Store $product, array $data)
    {
        $product->update($data);
        return $product;
    }

    public function delete(Store $product)
    {
        $product->delete();
    }

}
