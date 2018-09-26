<?php

namespace App\Http\Controllers;

use App\DoneBuyProduct;
use App\DoneOrder;
use App\DoneOrderProduct;
use App\market;
use Illuminate\Http\Request;

class DelegateController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isDelegate');
    }

    public function index()
    {
        return view('pages.delegate.index')->with([
            'markets' => market::get()->where('user_id', '=', auth()->user()->id),
        ]);

    }

    public function create()
    {
        return view('pages.delegate.add')->with([
            'vegetables' => \App\vegetable::get(),
        ]);;
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'country' => 'required',
            'governorate' => 'required',
            'product' => 'required',
            'price' => 'required',

        ]);
        $market = new market();
        $market->user_id = auth()->user()->id;
        $market->country = $request->country;
        $market->governorate = $request->governorate;
        $market->product = $request->product;
        $market->price = $request->price;


        $market->save();
        session()->flash('success', 'تم    اضافه الصنف بنجاح!');
        return redirect('/priceUpdate');
    }


    public function edit($id)
    {
        $market = market::find($id);
        return view('pages.delegate.update')->with([
            'market' => $market,
            'vegetables' => \App\vegetable::get(),

        ]);
    }

    public function update(Request $request, $id)
    {


        $this->validate($request, [
            'country' => 'required',
            'governorate' => 'required',
            'product' => 'required',
            'price' => 'required',

        ]);
        $market = market::find($id);
        $market->user_id = auth()->user()->id;
        $market->country = $request->country;
        $market->governorate = $request->governorate;
        $market->product = $request->product;
        $market->price = $request->price;


        $market->update();
        session()->flash('success', 'تم    تعديل بيانات  الصنف بنجاح!');
        return redirect('/priceUpdate/' . $market->id . '/edit/');
    }

    public function destroy($id)
    {
        $market = market::find($id);
        $market->delete();
        session()->flash('success', 'تم حذف  الصنف بنجاح!');
        return redirect('priceUpdate');
    }

    public function showGalleryProduct()
    {

        return view('pages.delegate.gallery')->with([
            'markets' => market::orderBy('price')->get()
                ->where('country', '=', auth()->user()->country)
                ->groupBy('product'),
        ]);
    }


    public function delegateSale()
    {
        return view('pages.delegate.sale')->with([
            'vegetables' => \App\vegetable::get(),
            'users' => \App\User::where('type', '=', '2')->get(),
        ]);
    }


    public function submitDelegateDoneOrder(Request $request)
    {


        $this->validate($request, [
            'dealer_id' => 'required',
            'productName' => 'required',
            'productName.*' => 'required',
            'numberBox' => 'required',
            'numberBox.*' => 'required',
        ]);

        $order = new DoneOrder();
        $order->delegate_id = auth()->user()->id;
        $order->dealer_id = $request->dealer_id;
        $order->save();

        for ($i = 0; $i < count($request->productName); $i++) {
            $orderProduct = new  DoneOrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->productName = $request->productName[$i];
            $orderProduct->numberBox = $request->numberBox[$i];
            $orderProduct->save();
        }
        session()->flash('success', 'تم    ارسال الطلب  بنجاح!');
        return redirect('/delegateSale');
    }

    public function delegateBuy()
    {
        return view('pages.delegate.buy')->with([
            'users' => \App\User::where('type', '=', '3')->get(),
        ]);
    }


    public function submitDelegateDoneBuy(Request $request)
    {
        $this->validate($request, [
            'farmer_id' => 'required',
            'name' => 'required',
            'numberBox' => 'required',
            'priceBox' => 'required',
            'boxLoad' => 'required',
        ]);
        $farmerProduct = new DoneBuyProduct();
        $farmerProduct->user_id = auth()->user()->id;
        $farmerProduct->farmer_id = $request->farmer_id;
        $farmerProduct->name = $request->name;
        $farmerProduct->numberBox = $request->numberBox;
        $farmerProduct->priceBox = $request->priceBox;
        $farmerProduct->boxLoad = $request->boxLoad;


        $farmerProduct->save();
        session()->flash('success', 'تم   اضافه المنتج  بنجاح!');
        return redirect('/delegateBuy');
    }


}
