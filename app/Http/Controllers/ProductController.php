<?php
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // READ (All)
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // CREATE FORM
    public function create()
    {
        return view('products.create');
    }

    // STORE
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/products');
    }

    // EDIT FORM
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }

    // DELETE
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/products');
    }
}