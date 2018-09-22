<?php

namespace App\Http\Controllers;

use App\market;
use App\order;
use App\orderProduct;
use Illuminate\Http\Request;

class DealerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isDealer');
    }

    public function showGalleryProduct()
    {
        return view('pages.delegate.gallery')->with([
            'markets' => market::orderBy('price')->get()
                ->where('country', '=', auth()->user()->country)
                ->groupBy('product'),
        ]);
    }


    public function showDealerOrder()
    {
        return view('pages.dealer.order')->with([
            'vegetables' => \App\vegetable::get(),
        ]);
    }


    public function submitDealerOrder(Request $request)
    {


        $this->validate($request, [
            'productName' => 'required',
            'productName.*' => 'required',
            'numberBox' => 'required',
            'numberBox.*' => 'required',
        ]);

        $order = new order();
        $order->user_id = auth()->user()->id;
        $order->save();

        for ($i = 0; $i < count($request->productName); $i++) {
            $orderProduct = new  orderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->productName = $request->productName[$i];
            $orderProduct->numberBox = $request->numberBox[$i];
            $orderProduct->save();
        }
        session()->flash('success', 'تم    ارسال الطلب  بنجاح!');
        return redirect('/dealerOrder');
    }


}
