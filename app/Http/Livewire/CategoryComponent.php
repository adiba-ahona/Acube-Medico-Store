<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Cart;
use App\Models\Category;

use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this -> sorting = "default";
        $this -> pagesize = 12;
        $this -> category_slug = $category_slug;
    }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
        return redirect()->route('product.cart');
    }

    public function addToRequestedItemList($product_id, $product_name, $product_price)
    {
        Cart::instance('requesteditemlist')->add($product_id, $product_name, 1,$product_price)->associate('App\Models\Product');
    }
    
    use WithPagination;
    public function render()
    {
        $category = Category::where('slug',$this -> category_slug)-> first();
        $category_id = $category->id;
        $category_name = $category->name;

        if($this->sorting == "price-asc")
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price','ASC')->paginate($this -> pagesize);

        }
        else if($this->sorting == "price-desc")
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price','DESC')->paginate($this -> pagesize);

        }else 
        {
            $products = Product::where('category_id', $category_id)->paginate($this -> pagesize);
        }
        
        $categories = Category::all();

        return view('livewire.category-component',['products'=> $products,'categories'=>$categories,'category_name'=> $category_name])->layout('layouts.base');
    }
}