<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use App\ProductImage;
use App\Lib\FileUpload;
use Carbon\Carbon;
use Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type==1){
             $all_data=Product::with('category','subcategory','user')->get();
        }
        else{
            $all_data=Product::where('user_id',Auth::user()->id)->with('category','subcategory','user')->get();
        }
        return view('backend.product',compact('all_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        $subcategory=SubCategory::all();

        return view('backend.product_create',compact('category','subcategory'));
    }

    public function createbyid($id)
    {
        $category=Category::all();
        $subcategory=SubCategory::where('category_id',$id)->get();
        $category_id=$id;
        return view('backend.product_create',compact('category','subcategory','category_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        
        $this->validate($request, [
        'name'          => 'required',
        'category_id'     => 'required',
        'subcategory_id'     => 'required',
       ]);
            $data_store = new Product();
            $data_store-> name = $data['name'];
            $data_store-> price = $data['price'];
            $data_store-> brand = $data['brand'];
            $data_store-> condition = $data['condition'];
            $data_store-> color = $data['color'];
            $data_store-> description = $data['description'];
            $data_store-> category_id = $data['category_id'];
            $data_store-> subcategory_id = $data['subcategory_id'];
            $data_store-> user_id = $user->id;
            $data_store-> created_at = Carbon::now();
            $data_store-> updated_at = Carbon::now();

            $data_store->save();
            if ($data_store) {
                $product=Product::where('name',$data['name'])->orderBy('id', 'desc')->first();
                $product_id=$product->id;

                $file   = $request->file('image');
                foreach ($file as $key => $value) {
                    $prefix = 'product';
                    $path   = 'uploads/images/product';
                    $file_upload = new FileUpload;

                    $upload = $file_upload->upload($file[$key], $prefix, $path);

                    $image=new ProductImage;
                    $image->image=$upload['file_name'];
                    $image->product_id=$product_id;

                    $image->save();

                }
            }

        if($data_store)
        {
            return redirect('admin/product')
            ->with('flash_notification.message', 'Data added Successfully')
            ->with('flash_notification.level', 'success');
        }else{
            return redirect(route('admin/product'))
            ->with('flash_notification.message', 'Data added Unsuccessfully')
            ->with('flash_notification.level', 'danger');
        }
        
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
        $category=Category::all();
        $subcategory=SubCategory::all();
        $data=Product::with('category','subcategory','user','product_image')->find($id);

        return view('backend.product_edit',compact('category','subcategory','data'));
    }
    public function editcategorybyid($product_id,$id)
    {
        $category=Category::all();
        $subcategory=SubCategory::where('category_id',$id)->get();
        $data=Product::with('category','subcategory','user','product_image')->find($product_id);
        $category_id=$id;

        return view('backend.product_edit',compact('category','subcategory','data','category_id'));
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
        $data = $request->all();
        $user = Auth::user();
        
        $this->validate($request, [
        'name'          => 'required',
        'category_id'     => 'required',
        'subcategory_id'     => 'required',
       ]);
            $data_store = Product::find($id);
            $data_store-> name = $data['name'];
            $data_store-> price = $data['price'];
            $data_store-> brand = $data['brand'];
            $data_store-> condition = $data['condition'];
            $data_store-> color = $data['color'];
            $data_store-> description = $data['description'];
            $data_store-> category_id = $data['category_id'];
            $data_store-> subcategory_id = $data['subcategory_id'];
            $data_store-> user_id = $user->id;
            $data_store-> created_at = Carbon::now();
            $data_store-> updated_at = Carbon::now();

            $data_store->update();
            if ($data_store) {
                
                $product_id=$id;
                $file   = $request->file('image');
                if ($file) {
                    foreach ($file as $key => $value) {
                        // if (array_key_exists($key,$data['image']))
                        //   {
                        //   return $key;
                        //   }
                        $prefix = 'product';
                        $path   = 'uploads/images/product';
                        $file_upload = new FileUpload;
                        if (isset($data_store->product_image[$key])) {
                            $file_rev=$data_store->product_image[$key]->image;
                            $remove = $file_upload->remove($file_rev, $path);

                            $upload = $file_upload->upload($file[$key], $prefix, $path);

                            // $image=new ProductImage;
                            $data_store->product_image[$key]->image=$upload['file_name'];
                            // $image->product_id=$product_id;

                            $data_store->product_image[$key]->update();
                        }
                        else{

                            $upload = $file_upload->upload($file[$key], $prefix, $path);

                            $image_store=new ProductImage;
                            $image_store->image=$upload['file_name'];
                            $image_store->product_id=$product_id;

                            $image_store->save();
                        }
                        

                    }
                }
                
            }

        if($data_store)
        {
            return redirect('admin/product')
            ->with('flash_notification.message', 'Data updated Successfully')
            ->with('flash_notification.level', 'success');
        }else{
            return redirect(route('admin/product'))
            ->with('flash_notification.message', 'Data updated Unsuccessfully')
            ->with('flash_notification.level', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::with('product_image')->find($id);
        $file_remove = new FileUpload;
        $path = 'uploads/images/product/';
        foreach ($product->product_image as $data) {
            $file=$data->image;
            $remove = $file_remove->remove($file, $path);
        }
        

        if($product->delete())
        {
            return redirect(route('admin_product'))
            ->with('flash_notification.message', 'Data deleted successfully')
            ->with('flash_notification.level', 'danger');
        }
    }

    public function destroyimage($id)
    {
        $product_image = ProductImage::find($id);
        $file_remove = new FileUpload;
        $path = 'uploads/images/product/';
        $file=$product_image->image;
        $remove = $file_remove->remove($file, $path);
        

        if($product_image->delete())
        {
            return back()
            ->with('flash_notification.message', 'image deleted successfully')
            ->with('flash_notification.level', 'danger');
        }
    }
}
