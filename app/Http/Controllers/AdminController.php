<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Feedback;
use App\Models\Contact;
use App\Models\ImageGallery;
use App\Models\VisitorCount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $data = [
            'fbcount' => Feedback::count(),
            'feedbacks' => Feedback::orderBy('created_date', 'asc')->take(4)->get(),
            'usercount' => User::where('type','=',0)->count(),
            'visitorcount' => VisitorCount::distinct()->count('ip')
        ];
        return view('admin/dashboard')->with($data);
        // return view('admin/dashboard')->with($data);
    }

    public function showProduct()
    {
        $data = [            
            'Product'=> Product::get(),
            'Category'=> Category::get()
        ];
        return view('admin/product')->with($data);
    }
    public function showCategory()
    {
        $data = [
            'Category'=> Category::get()
        ];
        return view('admin/category')->with($data);
    }

    public function showAccountList(){
        $data = [
            'admins'=> User::where('type','=',1)->get(),
            'guests'=> User::where('type','=',0)->get(),
        ];
        return view('admin/useraccount')->with($data);
    }

     public function signupAdmin(){
        return view('admin/register',["type" => 1]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin.signin');
    }

    public function createAdminAccount(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
         );
         $user = [
               'name'=>$request->input('name'),

               'email'=>$request->input('email'),

               'type'=>1,

               'password'=> bcrypt($request->input('password')),
            ];
          User::create($user);
          return redirect('admin/dashboard');
    }
public function contact(){
    // $data = [
    //     'contacts' => Contact::get()
    // ];
    return view('admin/contact');
}
public function updateContact(){
    // $data = [
    //     'contacts' => Contact::get()
    // ];
    return view('admin/contact');
}
public function demofeedback(){
    $data = [
        'feedbacks' => Feedback::get()
    ];
    return view('admin/demofeedback')->with($data);
}


public function deletefeedback(Request $request){
    Feedback::where('id','=',$request->id)->delete();
    return redirect('admin/feedback');
}

public function deletect(Request $request){
    Contact::where('id','=',$request->id)->delete();
    return redirect('admin/contact');
}
    
}
