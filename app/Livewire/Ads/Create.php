<?php

namespace App\Livewire\Ads;

use App\Models\Ads;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Validate('required',message:'Il titolo è obbligatorio.')]
    #[Validate('min:10',message:'Il titolo deve essere lungo almeno 10 caratteri.')]
    #[Validate('max:100',message:'Il titolo deve essere lungo masssimo 100 caratteri')]
    public $title;

    #[Validate('min:10',message:'la descrizione deve essere lungo almeno 10 caratteri.')]
    #[Validate('max:200',message:'la descrizione deve essere lungo masssimo 200 caratteri')]
    public $description;

    #[Validate('required',message:'Si prega di selezionare una categoria.')]
    public $category_id;

    public $user_id;

    #[Validate('required',message:'Il prezzo è obbligatorio.')]
    public $price;

    // #[Validate('image', 'custom_messages')]
    // public $picture;

    public function render()
    {
        return view('livewire.ads.create');
    }

    public function store()
    {
        $this->validate();

        $ads = Ads::create(['title'=>$this->title,
            'description'=>$this->description,
            'category_id'=>$this->category_id,
            'user_id'=>Auth::user()->id,
            'price'=>$this->price,
        ]);
        $this->reset();

        // $asdPath ='public/ads/'. $ads->id;

        // $ads->picture=$this->picture->storeAs(path:  $asdPath, name: 'cover.jpg');
        // $ads->save();

        session()->flash('success','il tuo annuncio è stato creato con successo!');
    }
}
