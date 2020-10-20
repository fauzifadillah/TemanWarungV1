<?php

namespace App\Http\Controllers;

use App\Order;
use DataTables;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }

    public function show($id)
    {
        $model = Order::find($id);
        return view('orders.show', ['model'=>$model]);
    }

    public function create()
    {
        $model = new Category();
        return view('orders.form', ['model' => $model]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'image' => 'required',
        ]);
        $model['name'] = $request->name;
        if($request->file('image')!=NULL){
            $directory = '/upload/';
            $filename = $request->name.'.'.$request->image->getClientOriginalExtension();
            $model['image'] = $directory.$filename;
            $request->image->move(public_path($directory), $filename);
        }
        $model = Category::create($model);
        return response()->json($model);
    }

    public function edit($id)
    {
        $model = Category::findOrFail($id);
        return view('orders.form', ['model' => $model]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'image' => 'required',
        ]);
        $model = Category::findOrFail($id);
        if ($request->file('image')!=NULL){
            if ($model->image !== NULL){
                unlink(public_path($model->image));
            }
        }
        $model = $request->all();
        if($request->file('image')!=NULL){
            $directory = '/upload/';
            $filename = $request->name.'.'.$request->image->getClientOriginalExtension();
            $model['image'] = $directory.$filename;
            $request->image->move(public_path($directory), $filename);
        }
        $model = Category::findOrFail($id)->update($model);
        return response()->json($model);
    }

    public function delete($id)
    {
        $model = Category::findOrFail($id)->delete();
        return response()->json($model);
    }

    public function datatable()
    {
        $model = Order::get();
        // dd($model);
        return DataTables::of($model)
            ->addColumn('product', function($model){
            	return $model->products->name;
            })
            ->addColumn('price', function($model){
            	if($model->installment==0){
	            	return 'Rp '.number_format($model->products->price, 0, ',', '.');
                }
                else if($model->installment==1){
	            	return 'Rp '.number_format($model->products->price, 0, ',', '.');
            	}
            	else if($model->installment==3){
	            	return 'Rp '.number_format($model->products->price3, 0, ',', '.');
            	}
            	else if($model->installment==6){
	            	return 'Rp '.number_format($model->products->price6, 0, ',', '.');
            	}
            	else if($model->installment==12){
	            	return 'Rp '.number_format($model->products->price12, 0, ',', '.');
            	}
            })
            ->editColumn('installment', function($model){
            	return $model->installment.'x';
            })
            ->addColumn('action', function($model){
                return view('layouts.action',[
                    'model' => $model,
                    'title' => 'Category',
                    'edit' => route('order.edit', $model->id),
                    'delete' => route('order.delete', $model->id)
                ]);
            })
            ->addIndexColumn()
            // ->removeColumn(['id','created_at','updated_at'])
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
