<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');
   }
 /**
* Display a listing of the resource.
*/
 public function index() : View
 {
    return view('products.index', [
        'products' => Product::latest()->paginate(4)
    ]);
 }

 /**
* Show the form for creating a new resource.
*/
 public function create() : View
 {
    return view('products.create');
 }

 /**
* Store a newly created resource in storage.
*/
 public function store(StoreProductRequest $request) : RedirectResponse
 {

// \Log::info('Product creation request data:', $request->all());
// dd($request);

$validated = $request->validated();

$path = $request->file('imgurl')->store('products', 'public');
$validated['imgurl'] = 'products/' . basename($path);


Product::create($validated);
    return redirect()->route('products.index')->withSuccess('New product is added successfully.');
 }

 /**
* Display the specified resource.
*/
 public function show(Product $product) : View
 {
    return view('products.show', compact('product'));
 }

 /**
* Show the form for editing the specified resource.
*/
 public function edit(Product $product) : View
 {
    return view('products.edit', compact('product'));
 }

 /**
* Update the specified resource in storage.
*/
 public function update(UpdateProductRequest $request, Product $product) : RedirectResponse
 {
    $product->update($request->validated());
    return redirect()->back()->withSuccess('Product is updated successfully.');
 }

 /**
* Remove the specified resource from storage.
*/
 public function destroy(Product $product) : RedirectResponse
 {
    $product->delete();
    return redirect()->route('products.index')->withSuccess('Product is deleted successfully.');
 }
}