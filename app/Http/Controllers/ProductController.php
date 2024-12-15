<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // сохраняем картинку товара и лепим водяной знак

        $imageName = uniqid() . '.' . $request->product_image->extension();
        $watermarkText = 'магазин стройматериалов "стройрай"';
        $img = imagecreatefromstring(file_get_contents($request->product_image));
        $watermarkColor = imagecolorallocate($img, 255, 0, 0);
        imagestring($img, 5, 0, 0, $watermarkText, $watermarkColor);
        imagepng($img, public_path('images/' . $imageName));
        imagedestroy($img);
        $product->primary_image = '/images/' . $imageName;

        $product->save();
        return redirect('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('product.show', [
            'product' => Product::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('product.edit', [
            'product' => Product::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->description = $request->input('description');

        $product->save();
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        Storage::delete($product->primary_image);
        $product->delete();
        return redirect('products');
    }
}
