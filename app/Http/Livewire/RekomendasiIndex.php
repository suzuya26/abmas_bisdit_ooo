<?php

namespace App\Http\Livewire;
use App\Models\Rekomendasi;


use Livewire\Component;

class RekomendasiIndex extends Component
{
    public $idtoko;
    public function mount($idtoko)
    {
        $this->idtoko = $idtoko;
    }
    public function render()
    {
        return view('livewire.rekomendasi-index', [
            'rekomendasi' => Rekomendasi::where(['idtoko' => $this->idtoko])->get(),
            'idtoko',
            'heart',
        ]);
    }
    public function unrekomendasi($idtoko)
    {
        if (Rekomendasi::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->exists()) {
            Rekomendasi::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->delete();
            $this->render();
        }
    }
    public function rekomendasi($idtoko)
    {
        if (!Rekomendasi::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->exists()) {
            Rekomendasi::create(['idtoko' => $idtoko, 'id' => auth()->user()->id]);
            $this->render();
        } else {
            $this->unrekomendasi($idtoko);
        }
    }
}
