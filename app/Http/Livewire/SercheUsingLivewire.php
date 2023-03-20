<?php

namespace App\Http\Livewire;
use App\Models\Post;

use Livewire\Component;

class SercheUsingLivewire extends Component

{
    public $inputeValue = '' ;
    public $returnValue ;
    // public $orderRemoved ;
    // protected $listeners = ['search'];

    public function render()
    {
        // $data = collect($this->inputeValue);
        if (!empty($this->inputeValue)) {
            $searchValue = trim($this->inputeValue);
            $this->returnValue = Post::where('title','LIKE',"%$searchValue%")->get();
        }

        return view('livewire.serche-using-livewire');

    }
    // public function search(){

    //         if ($this->inputeValue == null || $this->inputeValue == '  ') {
    //             $this->returnValue = [];
    //             $this->emit('search');
    //         } else {
    //             $searchValue = trim($this->inputeValue);
    //             $complet = Post::where('title','LIKE',"%$searchValue%")->get();
    //             $this->returnValue = $complet;
    //             $this->emit('search');
    //         }
            

    // }
}
