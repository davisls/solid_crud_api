<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Http\Requests\ProductRequest;
use App\Interfaces\ProductInterface;

class ProductService implements ProductInterface
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->all();
    }

    public function create(ProductRequest $request)
    {
        $this->productRepository->store($request->all());
    }

    public function update($id, ProductRequest $request)
    {
        $this->productRepository->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->productRepository->destroy($id);
    }
}
