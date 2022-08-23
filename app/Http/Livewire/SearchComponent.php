<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;
use Cart;

class SearchComponent extends Component
{
    public $search;
    public $product_category;
    public $product_category_id;
    public function mount()
    {
        $this -> product_category = 'All Category';
        $this -> fill(request()->only('search','product_category','product_category_id'));
    }
   
    public function render()
    {
         $categories = Category::all();
         
        return view('livewire.search-component',['categories'=>$categories]);
    }
}
