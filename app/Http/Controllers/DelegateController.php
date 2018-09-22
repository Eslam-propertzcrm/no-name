<?php

namespace App\Http\Controllers;

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


}
