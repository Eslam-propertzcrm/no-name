<?php

namespace App\Http\Controllers;

use App\farmerLoan;
use App\farmerProduct;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isFarmer');
    }


    public function index()
    {
        return view('pages.farmer.index')->with([
            'farmerProducts' => farmerProduct::get(),
        ]);
    }


    public function create()
    {
        return view('pages.farmer.add');
    }


    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required',
            'numberBox' => 'required',
            'priceBox' => 'required',
        ]);
        $farmerProduct = new farmerProduct();
        $farmerProduct->user_id = auth()->user()->id;
        $farmerProduct->name = $request->name;
        $farmerProduct->numberBox = $request->numberBox;
        $farmerProduct->priceBox = $request->priceBox;


        $farmerProduct->save();
        session()->flash('success', 'تم   اضافه المنتج  بنجاح!');
        return redirect('/farmerProduct');
    }


    public function edit($id)
    {
        $farmerProduct = farmerProduct::find($id);
        return view('pages.farmer.update')->with([
            'farmerProduct' => $farmerProduct,
        ]);
    }


    public function update(Request $request, farmerProduct $farmerProduct)
    {


        $this->validate($request, [
            'name' => 'required',
            'numberBox' => 'required',
            'priceBox' => 'required',

        ]);

        $farmerProduct->name = $request->name;
        $farmerProduct->numberBox = $request->numberBox;
        $farmerProduct->priceBox = $request->priceBox;


        $farmerProduct->update();

        session()->flash('success', 'تم تعديل بيانات  المنتج بنجاح!');
        return redirect('/farmerProduct/' . $farmerProduct->id . '/edit/');
    }


    public function destroy(farmerProduct $farmerProduct)
    {
        $farmerProduct->delete();
        session()->flash('success', 'تم حذف المنتج  بنجاح!');
        return redirect('/farmerProduct');
    }


    public function showFarmerLoan()
    {
        return view('pages.farmer.farmerLoan');

    }


    public function submitFarmerLoan(Request $request)
    {
        $this->validate($request, [
            'amountLoan' => 'required',
            'currency' => 'required',
            'ownership' => 'required',
            'nationality' => 'required',
        ]);
        $farmerLoan = new farmerLoan();
        $farmerLoan->user_id = auth()->user()->id;

        $farmerLoan->amountLoan = $request->amountLoan;
        $farmerLoan->currency = $request->currency;
        $farmerLoan->ownership = $request->ownership;
        $farmerLoan->nationality = $request->nationality;


        $farmerLoan->save();

        session()->flash('success', 'تم ارسال طلب القرض الحسن بنجاح  !');
        return redirect('/farmerLoan');
    }


}
