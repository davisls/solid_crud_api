<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Services\ProductService;
use App\Interfaces\ProductInterface;


class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        try {
            $products = $this->productService->getAll();

            return response()->json([
                'success' => true,
                'products' => $products
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ]);
        }
    }

    public function store(ProductRequest $request)
    {
        try {
            $this->productService->create($request);

            return response()->json([
                'success' => true,
                'message' => 'Product stored succesfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ]);
        }
    }

    public function update(ProductRequest $request, $id)
    {
        try {
            $this->productService->update($id, $request);

            return response()->json([
                'success' => true,
                'message' => 'Product updated succesfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->productService->destroy($id);

            return response()->json([
                'success' => true,
                'message' => 'Product deleted succesfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ]);
        }
    }
}
