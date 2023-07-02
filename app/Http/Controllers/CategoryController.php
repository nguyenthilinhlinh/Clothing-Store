<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{

    public function search(){
        $search_text = $_GET['query'];
        $categories = Category::where('category_name', 'LIKE', '%'.$search_text.'%')->get();
        return view('/main/search', compact('categories'));
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = [
            'Category'=> Category::where('status','=',1)->get()
        ];    
        return view('admin/index')->with($data);
    }

     public function createCategory(Request $request){
                
           $c = new Category;
            
           $c->category_name = $request->input('category_name');  
           $c->status = 1;  

           $c->save();

          return redirect('admin/category');
    }

    public function updateCategory(Request $request){
        Category::where('id', $request->id)->update(['category_name'=>$request->input('category_name'),
                                                    'status'=>$request->input('status')]);

        return redirect('admin/category');
    }

    public function deleteCategory($id)
    {
        //Category::where('id',$id)->update(['status'=>'0']);
        Category::where('id',$id)->delete();
        return redirect('admin/category');
    }



}
?>
