<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;


class MainSearchComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $search;
    public $product_category;
    public $product_category_id;

    public function mount()
    {
        $this -> sorting = "default";
        $this -> pagesize = 12;

        $this -> fill(request()->only('search','product_category','product_category_id'));
    }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
        return redirect()->route('product.cart');
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
        
        
    }

    public function addToRequestedItemList($product_id, $product_name, $product_price)
    {
        Cart::instance('requesteditemlist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }
    public function addToMechanicPreferencelist($product_id, $product_name, $product_price)
    {
        Cart::instance('preferedmechaniclist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }


    use WithPagination;
    public function render()
    {
        if($this->sorting == "price-asc")
        {
            $products = Product::where('name','like','%'.$this->search .'%')->where ('category_id','like','%'.$this -> product_category_id.'%')->orderBy('regular_price','ASC')->paginate($this -> pagesize);

        }
        else if($this->sorting == "price-desc")
        {
            $products = Product::where('name','like','%'.$this->search .'%')->where ('category_id','like','%'.$this -> product_category_id.'%')->orderBy('regular_price','DESC')->paginate($this -> pagesize);

        }else 
        {
            $products = Product::where('name','like','%'.$this->search .'%')->where ('category_id','like','%'.$this -> product_category_id.'%')->paginate($this -> pagesize);
        }
        
        $catagories = Category::all();

        
        return view('livewire.main-search-component',['products'=> $products,'categories'=>$categories])->layout('layouts.base');
    }
}