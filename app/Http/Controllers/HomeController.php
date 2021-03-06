<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Str;
class HomeController extends Controller
{
    public function digitalIndex() // Digital Product
    {
    	$model = Category::where('id', '>','14')->get();
        return view('digital', ['model'=>$model]);
    }

    public function index()
    {
    	$model = Category::where('id', '<','14')->get();
        return view('home', ['model'=>$model]);
    }

    public function detail($id)
    {
    	$model = Product::where('categories_id', $id)->orderBy('price','ASC')->get();
    	$bagi = $id%3;
    	if($bagi==1){
    		$row=($id+2)/3;
    	}
    	elseif($bagi==2){
    		$row=($id+1)/3;
    	}
    	elseif($bagi==0){
    		$row=$id/3;
    	}
        $table = '<tr id="detail-product" class="row'.$row.' image'.$id.'"><td colspan="7"><div class="card-body border-temanwarung mt-4"><table class="table-hover" width="100%">';
		foreach($model as $a){
			$table .= '<tr><td style="width: 5%"><a data-fancybox="gallery" data-caption="'.Str::limit($a->name,25,$end='...').'" href="'.asset($a->image).'" ><img src="'.asset($a->image).'" width="20" height="20"/></a></td>';
			$table .= '<td style="line-height: 0.75rem">'.Str::limit($a->name,25,$end='...').'</td>';
			$table .= '<td style="width: 28%" class="font-weight-bold">Rp '.number_format($a->price, 0, ',', '.').'</td>';
			$table .= '<td>'.$a->desc.'</td>';
			$table .= '<td style="width: 5%"><a href="'.route('product',$a->id).'" class="btn btn-primary-temanwarung btn-sm modal-show">Beli</a></td></tr>';
        }
        // dd($a);
		$table .= '</table></div></td></tr>';
        return $table;
    }
    public function product($id)
    {
    	$model = Product::find($id);
        return view('form',['model'=>$model]);
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'phone_number' => ['required'],
            'installment' => ['required']
        ]);
        return response()->json($request);
    }
    public function save(Request $request)
    {
        $model = Order::create([
            'products_id' => $request->id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'installment' => $request->installment
        ]);
        $product = Product::find($model->products_id);
        if($model->installment==3){
            $price = 'Rp '.number_format($product->price3, 0, ',', '.');
        }
        else if($model->installment==1){
            $price = 'Rp '.number_format($product->price, 0, ',', '.');
        }
        else if($model->installment==6){
            $price = 'Rp '.number_format($product->price6, 0, ',', '.');
        }
        else if($model->installment==12){
            $price = 'Rp '.number_format($product->price12, 0, ',', '.');
        }
        $whatsapp = 'Halo%20saya%20'.$model->name.'%20dengan%20nomor%20telepon%20'.$model->phone_number.'.%0A%0ASaya%20mau%20order%20'.$product->name.'%20dengan%20cicilan%20sebanyak%20'.$model->installment.'x%20seharga%20'.$price.'.';
        return json_encode($whatsapp);
    }

}
