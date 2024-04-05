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

    #[Validate('required|min:10|max:100', 'custom_messages')]
    public $title;

    #[Validate('min:10|max:150', 'custom_messages')]
    public $description;

    #[Validate('required', 'custom_messages')]
    public $category_id;

    public $user_id;

    #[Validate('required', 'custom_messages')]
    public $price;

    #[Validate('image', 'custom_messages')]
    public $picture;

    protected $customMessages = [
        'title.required' => 'Il titolo è obbligatorio.',
        'title.min' => 'Il titolo deve essere lungo almeno :min caratteri.',
        'title.max' => 'Il titolo non può superare :max caratteri.',
        'description.min' => 'La descrizione deve essere lunga almeno :min caratteri.',
        'description.max' => 'La descrizione non può superare :max caratteri.',
        'category_id.required' => 'Si prega di selezionare una categoria.',
        'price.required' => 'Il prezzo è obbligatorio.',
        'picture.image' => 'Il file caricato deve essere un\'immagine.',
    ];

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

        $asdPath ='public/ads/'. $ads->id;

        $ads->picture=$this->picture->storeAs(path:  $asdPath, name: 'cover.jpg');
        $ads->save();

        session()->flash('success','il tuo annuncio è stato creato con successo!');
    }
}
