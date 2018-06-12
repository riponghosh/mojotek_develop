<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with('category','subcategory','product_image','user')->get();
        return view('frontend.index',compact('products'));
    }

    public function howitworks()
    {
        return view('frontend.how_it_works');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function cart()
    {
        return view('frontend.cart');
    }

    public function mission()
    {
        return view('frontend.mission');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function disclosure()
    {
        return view('frontend.disclosure');
    }

    public function infoboard()
    {
        return view('frontend.infoboard');
    }

    public function termsandconditions()
    {
        return view('frontend.terms_and_conditions');
    }

    public function privacypolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function allproduct()
    {
        $products=Product::with('category','subcategory','product_image','user')->get();
        return view('frontend.product',compact('products'));
    }
    public function productcategory($id)
    {
        $products=Product::with('category','subcategory','product_image','user')->where('category_id',$id)->get();
        return view('frontend.product',compact('products'));
    }
    public function productsubcategory($id)
    {
        $products=Product::with('category','subcategory','product_image','user')->where('subcategory_id',$id)->get();
        return view('frontend.product',compact('products'));
    }

    public function productdetails($id)
    {
        $product=Product::with('category','subcategory','product_image','user')->where('id',$id)->first();
        $member_products=Product::with('category','subcategory','product_image','user')->where('user_id',$product->user_id)->get();
        $similar_products=Product::with('category','subcategory','product_image','user')->where('category_id',$product->category_id)->get();
        return view('frontend.product_details',compact('product','member_products','similar_products'));
    }

    public function sign()
    {
        return view('frontend.sign');
    }
    public function signin()
    {
        return view('frontend.sign_in');
    }
    public function signup()
    {
        return view('frontend.sign_up');
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
        //
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
