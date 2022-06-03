<?php

namespace App\Http\Livewire;

use App\Models\listToko;
use Livewire\Component;

class ListTokoIndex extends Component
{
    public $idtoko;
    public function mount($idtoko)
    {
        $this->idtoko = $idtoko;
    }
    public function render()
    {
        return view('livewire.list-toko-index', [
            'lists' => listToko::where(['idtoko' => $this->idtoko])->get(),
            'idtoko',
            'heart',
        ]);
    }
    public function unlistToko($idtoko)
    {
        if (listToko::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->exists()) {
            listToko::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->delete();
            $this->render();
        }
    }
    public function listToko($idtoko)
    {
        if (!listToko::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->exists()) {
            listToko::create(['idtoko' => $idtoko, 'id' => auth()->user()->id]);
            $this->render();
        } else {
            $this->unlistToko($idtoko);
        }
    }
}
