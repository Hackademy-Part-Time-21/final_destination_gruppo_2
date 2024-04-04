<?php

namespace App\Livewire\Ads;

use App\Models\Ads;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Symfony\Contracts\Service\Attribute\Required;

class Create extends Component
{
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $description;


    #[Validate('required')]
    public $category_id;

    #[Validate('required')]
    public $user_id;

    #[Validate('required')]
    public $price;

    public function render()
    {
        return view('livewire.ads.create'); 
    }

    public function store()
    {
        
        
        
        
        

        $ads = Ads::create(['title'=>$this->title,
                     'description'=>$this->description,
                     'category_id'=>$this->category_id,
                     'user_id'=>Auth::user()->id,
                     'price'=>$this->price,
    ]);

    session()->flash('success','grissin bon');
    
    }
}
