<?php

namespace App\Interfaces;
use App\Http\Requests\ProductRequest;

interface ProductInterface
{
    public function getAll();
    public function create(ProductRequest $request);
    public function update($id, ProductRequest $request);
    public function destroy($id);
}
