<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data=Category::all();
        return view('backend.category',compact('all_data'));
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
        $data = $request->all();
        $user = Auth::user();
        
        $this->validate($request, [
        'name'          => 'required',
       ]);

        
    
        
        $data_store = new Category();
        $data_store-> name = $data['name'];
        $data_store-> description = $data['description'];
        $data_store-> created_at = Carbon::now();
        $data_store-> updated_at = Carbon::now();

        $data_store->save();

        if($data_store)
        {
            return back()
            ->with('flash_notification.message', 'Data added Successfully')
            ->with('flash_notification.level', 'success');
        }else{
            return back()
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
        $data = $request->all();
        $user = Auth::user();
        
        $this->validate($request, [
        'name'          => 'required',
       ]);

        
    
        
        $data_store = Category::where('id',$id)->first();
        $data_store-> name = $data['name'];
        $data_store-> description = $data['description'];
        $data_store-> created_at = Carbon::now();
        $data_store-> updated_at = Carbon::now();

        $data_store->save();

        if($data_store)
        {
            return back()
            ->with('flash_notification.message', 'Data updated Successfully')
            ->with('flash_notification.level', 'success');
        }else{
            return back()
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
        $delete = Category::where('id', '=', $id)->first();
        if($delete->delete())
        {
            return back()
                ->with('flash_notification.message', 'Data Delete Successfully')
                ->with('flash_notification.level', 'success');
        }else
        {
            return back()
                ->with('flash_notification.message', 'Data Delete Unsuccessfully')
                ->with('flash_notification.level', 'danger');
        }
    }
}
