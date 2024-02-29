<?php

namespace App\Http\Controllers;

use App\Services\StoreService;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ApiController extends Controller
{

    protected $productService;
    protected $storeService;

    public function __construct(ProductService $productService, StoreService $storeService)
    {
        $this->productService = $productService;
        $this->storeService = $storeService;
    }


    public function getProductsWithStoresAndUsers()
    {
        try {
            $relation = 'store.user';
            $products = $this->productService->getAllProductsWithRelation($relation);
            return response()->json($products, 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function getStoresWithUsers()
    {
        try {
            $relation = 'user';
            $store = $this->storeService->getAllStores($relation);
            return response()->json($store, 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function getProductsWithUsersViaStore()
    {
        try {
            $relation = 'store.user';
            $products = $this->productService->getAllProductsWithRelation($relation)->map(function ($product) {
                $product['user'] = $product['store']['user'];
                unset($product['store']);
                return $product;
            });
            return response()->json($products, 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


//    public function getStoresWithUsers()
//    {
//        $stores = Store::with('user')->orderBy('created_at', 'desc')->get();
//
//        return response()->json($stores);
//    }

//    public function getProductsWithStoresAndUsers()
//    {
//        $products = Product::with('store.user')->orderBy('created_at', 'desc')->get();
//
//        return response()->json($products);
//    }

//    public function getProductsWithUsersViaStore()
//    {
//        $products = Product::with('user')->orderBy('created_at', 'desc')->get();
//
//        return response()->json($products);
//    }
}
