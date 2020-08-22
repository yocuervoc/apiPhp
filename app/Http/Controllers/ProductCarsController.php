<?php

namespace App\Http\Controllers;

use App\Product_cars;
use Illuminate\Http\Request;

class ProductCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product_cars::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_car = Product_cars::create($request->all());
        return $product_car;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_cars  $product_cars
     * @return \Illuminate\Http\Response
     */
    public function show(Product_cars $product_cars)
    {
        $product_cars = new Product_cars($product);
        return $product_car;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_cars  $product_cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_cars $product_cars)
    {
        $product_cars->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_cars  $product_cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_cars $product_cars)
    {
        //
    }
}
