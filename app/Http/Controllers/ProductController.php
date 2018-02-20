<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use App\Cart;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{


    public function najprodavani(){
        $products = DB::table('products')
            ->where('kolicina', '>', '10')
            ->get();

        return view('najprodavani')->with('products', $products);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            $id = Auth::id();

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
                return view('category.welcome')->with('products',$products)->with('category',$category);
            }

        }
        else
        {
            $products = Product::paginate(4);
            $category = Category::all();
            return view('category.welcomeNotLogin')->with('products',$products)->with('category',$category);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('ime','slug');

        return view('products.create')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
            'ime' => 'required|max:255',
            'id_kat' => 'required',
            'opis' => 'required',
            'cena' => 'required',
            'rok' => 'required',
            'slug' => 'required|max:15',
        ));
        $slag = Input::get('id_kat');

        $kat = Category::where('slug', $slag)->first();

        $kat = $kat->id_kat;
        $product = new Product();



        $product->id_kat = $kat;
        $product->ime = $request->ime;
        $product->opis = $request->opis;
        $product->kolicina = $request->kolicina;
        $product->slika = $request->slika;
        $product->cena = $request->cena;
        $product->rok = $request->rok;
        $product->slug = $request->slug;

        $product->save();

        return view('admin.dodadenProdukt')->with('product',$product);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('slug', $id)->first();
        $slug1 = $product->slug;
        $category = Category::all();

        return view('products.products')->with('product', $product)->with('slug1',$slug1)->with('category',$category);
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

    }

    //Vaa e drugata Mara
//    public function getIndex()
//    {
//        $products = Product::all();
//        return view('shop.index', ['products' => $products]);
//    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::where('id_p',$id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id_p);

        $request->session()->put('cart', $cart);
        return redirect()->route('products.index');
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_fwmVPdJfpkmwlQRedXec5IxR');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }


}

