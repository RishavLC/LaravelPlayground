<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        return "This is product in table";
    }

    // Show form to create product
    public function create()
    {
        return "Product create form";
    }

    // Store product in database
    public function store(Request $request)
    {
        return "Product stored";
    }

    // Show single product
    public function show($id)
    {
        return "Product id: " . $id;
    }

    // Show edit form
    public function edit($id)
    {
        return "Edit product id: " . $id;
    }

    // Update product
    public function update(Request $request, $id)
    {
        return "Product updated " . $id;
    }

    // Delete product
    public function destroy($id)
    {
        return "Product deleted " . $id;
    }
}