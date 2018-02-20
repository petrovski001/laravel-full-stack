<?php

namespace App\Http\Controllers;
use App\User;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            $id = Auth::id();
            $slug = Category::where('slug',$id);
            $adm = User::where('id',$id)->first();
            $isAdmin = $adm->admin;
            if($isAdmin == 1)
            {
                return view('admin.admin');

            }
            else
            {
                $products = Product::paginate(4);
                $category = Category::all();
                return view('category.welcome')->with('products',$products)->with('category',$category)->with('slug',$slug);
            }

        }
        else
        {
            $slug = Category::where('slug',$id)->first();
            $products = Product::where('id_kat',$slug->id_kat)->paginate(4);

            $category = Category::all();
            return view('category.welcomeNotLogin')->with('products',$products)->with('category',$category)->with('slug',$slug);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
