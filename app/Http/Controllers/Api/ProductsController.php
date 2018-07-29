<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Cache::remember('product', 22*60, function() {
            return Product::latest()->paginate(25);
        });

        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), [  
			'name' => 'required|unique:products|max:255',
			'image' => 'required|active_url',
			'available_sizes' => 'required|max:255',
			'price' => 'required|numeric',
			'category' => 'required|alpha_num'
		]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()])->setStatusCode(422);
        }
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
         $validator = Validator::make(Input::all(), [            
            'image' => 'required|active_url',
            'available_sizes' => 'required|max:255',
            'price' => 'required|numeric',
            'category' => 'required|alpha_num',
            'name' => 'required|max:255|unique:products,name,'.$product->id
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()])->setStatusCode(422);
        }
        $product->update($request->all());

        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return response()->json(null, 204);
    }

    /**
     * Search the specified term.
     *
     * @param  varchar  $searchterm
     *
     * @return \Illuminate\Http\Response
     */
      /**
     * Search the specified term.
     *
     * @param  varchar  $searchterm
     *
     * @return \Illuminate\Http\Response
     */
    public function productsearch($searchterm)
    {
        $products = Product::where("name", "like", "%".$searchterm."%")
                            ->orWhere("category", "like", "%".$searchterm."%")
                            ->latest()->paginate(25);

        return $products;
    }
}
