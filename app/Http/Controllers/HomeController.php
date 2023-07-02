<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ImageGallery;
use App\Models\VisitorCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        if (!$request->session()->has('visit')) {
            $request->session()->put('visit', 1);
            VisitorCount::create([
                'ip' => $request->ip(),
                'sessionKey' => $request->session()->getId()
            ]);           
        }
        $data = [
            'feedbacks' => Feedback::whereNotNull('customer_id')->get(),
            'mainprd' => Product::where('status','=',3)->get()
        ];
        return view('main/index')->with($data);
    }

    public function test()
    {
        $data = [
            'test' => Product::where('status', '=', 1)->get()
        ];
        return view('test')->with($data);
    }
    public function feedback()
    {
        return view('main/feedback');
    }
    public function feedbackcustomer(Request $request)
    {
        $feedback = [
            'customer_name' => $request->input('fbname'),
            'email' => $request->input('fbemail'),
            'phone' => $request->input('fbphone'),
            'content' => $request->get('message'),
            'customer_id' => $request->input('id'),
        ];
        Feedback::create($feedback);
        return redirect('/');
    }

    public function signin()
    {
        if (Auth::check()) {
            return redirect('home');
        }
        return view('main/login');
    }

    public function signup()
    {
        if (Auth::check()) {
            return redirect('home');
        }
        return view('main/register');
    }
    public function signupnew()
    {
        return view('main/registernew');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function aboutus()
    {
        return view('main/aboutus');
    }
    public function contactus()
    {
        return view('main/contactus');
    }
    public function contactform(Request $request)
    {
        $contact = [
            'contact_name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'phone' => $request->input('phone'),
            'message' => $request->get('message'),
        ];
        Contact::create($contact);
        return redirect('/');
    }
    public function company()
    {
        return view('main/company');
    }
    public function sitemap()
    {
        return view('main/sitemap');
    }
    public function gallery()
    {
        return view('main/gallery');
    }
    public function getProductByCategoryId($cname)
    {
        $category = [
            'shirts' => 'Shirt',
            'skirts' => 'Skirts',
            't_shirts' => 'P.T. T-shirts',
            'pt_shorts' => 'P.T. shorts',
            'pt_trackpants' => 'P.T. track pants',
            'belts' => 'Belts',
            'ties' => 'Ties',
            'logos' => 'Logos',
            'frocks' => 'Frocks',
            'socks' => 'Socks',
        ];
        $c = Category::where('category_name', 'LIKE', '%' . $category[$cname] . '%')->first();
        $data = [
            'items' => Product::where('category_id', '=', $c->id)->where('status', '!=', 0)->get(),
            'bestimages' => Product::where('category_id', '=', $c->id)->where('status', '=', 2)->get('images'),
            'category_name' => $c->category_name,
        ];
        return view('main/gallery')->with($data);
        // return response()->json($data);
    }

    public function search(){
        $search_text = $_GET['query'];
        $categories = Product::where('product_name', 'LIKE', '%'.$search_text.'%')->get();
        return view('/search', compact('categories'));
    }

    public function detailsGallery($id)
    {
        $pts = Product::find($id);
        $product = [
            'pt' => Product::find($id),
            'detailsimg' => ImageGallery::where('product_id','=', $id)->get('file_path'),
            'relate' => Product::where('category_id', '=', $pts->category_id)->where('id','!=',$id)->where('status', '!=',0)->get(),
            'cat' => Category::where('id','=', $pts->category_id)->first(),
        ];
        return view('main/detailsgallery')->with($product);
    }
}
