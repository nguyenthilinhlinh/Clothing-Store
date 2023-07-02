<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\ImageGallery;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /////////////////////Product//////////////////////////////////

    public function createProduct(Request $request)
    {

        $product = new Product;

        $product->product_name = $request->input('product_name');

        $product->category_id = $request->input('category_id');

        $product->price = $request->input('price');

        $product->description = $request->input('description');

        $product->quantity = $request->input('quantity');

        $product->status = 1;

        $product->save();

        if ($request->hasfile('photos')) {
            foreach ($request->photos as $photo) {
                $filename = time().rand(1,100).'.'.$photo->extension();
                $photo->storeAs('photos',$filename);
                ImageGallery::create([
                'product_id' => $product->id,
                'file_path' => $filename
                ]);
            }
            $product->images = $filename;
            $product->save();
        }
        return redirect('admin/product');
    }

    public function updateProduct(Request $request)
    {
        $data = [
            'product_name' => $request->input('product_name'),

            'category_id' => $request->get('category_id'),

            'price' => $request->input('price'),

           'quantity' => $request->input('quantity'), 

           'status' => request()->get('status'),           
        ];
        Product::where('id', $request->id)->update($data);
        return redirect('admin/product');
    }

    public function updateImage(Request $request){       
        if ($request->hasfile('photos')){
            foreach ($request->photos as $photo) {
                $filename = time().rand(1,100).'.'.$photo->extension();
                $photo->storeAs('photos',$filename);
                ImageGallery::create([
                'product_id' => $request->imgpkr,
                'file_path' => $filename
                ]);
                Product::find($request->imgpkr)->update(['images'=>$filename]);  
            }
           }
        return redirect('admin/product');
    }

    public function deleteImage($imgid){       
        ImageGallery::whereIn('id', $imgid)->delete();
        ImageGallery::where('id', $imgid)->update(['status' => '0']);
        return redirect('admin/product');
    }

    public function deleteProduct($id){
        Product::where('id',$id)->delete();
        // Product::where('id', $id)->update(['status' => '0']);
        return redirect('admin/product');
    }
}
