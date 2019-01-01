<?php
namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use App\Models\Product AS ProductModel;
use App\Models\Category AS CategoryModel;
class Product extends Controller
{
    public function index()
    {
        $contents = Cart::getContent();
        $products = ProductModel::all();
        $cats = CategoryModel::all();
        $viewcats = array();
        foreach ($cats as $cat) {
            $viewcats[$cat->id] = $cat;
        }
        $data = array();
        $data['contents'] = $contents;
        $data['products'] = $products;
        $data['viewcats'] = $viewcats;
        return view('product.index', $data);
    }
    public function create()
    {
        $cats = CategoryModel::all();
        $data = array();
        $data['cats'] = $cats;
        return view('product.create', $data);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $product = new ProductModel;
        $product->name = $input['name'];
        $product->cat_id = $input['cat_id'];
        $product->price = $input['price'];
        $product->save();
        return redirect('/product');
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $product = ProductModel::find($id);
        $product->name = $input['name'];
        $product->cat_id = $input['cat_id'];
        $product->price = $input['price'];
        $product->save();
        return redirect('/product');
    }
    public function destroy($id)
    {
        $product = ProductModel::find($id);
        $product->delete();
        return redirect('/product');
    }
    public function edit($id)
    {
        $product = ProductModel::find($id);
        $data = array();
        $data['id'] = $id;
        $data['product'] = $product;
        $cats = CategoryModel::all();
        $data['cats'] = $cats;
        return view('product.edit', $data);
    }
    public function delete($id)
    {
        $data = array();
        $data['id'] = $id;
        return view('product.delete', $data);
    }
    public function addtocart(Request $request, $id)
    {
        $input = $request->all();
        $product = ProductModel::find($id);
        Cart::add(array(
            'id' => $id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $input['number'],
            'attributes' => array()
        ));
        return redirect('/product');
    }
    public function deleteCart($id)
    {
        Cart::remove($id);
        return redirect('/product');
    }
    public function editCart(Request $request,$id)
    {
        $input = $request->all();
        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $input['quantity']
            ),
        ));
        return redirect('/product');
    }
}