<?php

namespace App\Http\Livewire;
use App\Models\Rekomendasioleh;

use Livewire\Component;

class RekomendasiolehIndex extends Component
{
    public $idoleh;
    public function mount($idoleh)
    {
        $this->idoleh = $idoleh;
    }
    public function render()
    {
        return view('livewire.rekomendasioleh-index', [
            'rekomendasioleh' => Rekomendasioleh::where(['idoleh' => $this->idoleh])->get(),
            'idoleh',
            'heart',
        ]);
    }
    public function unrekomendasioleh($idoleh)
    {
        if (Rekomendasioleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists()) {
            Rekomendasioleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->delete();
            $this->render();
        }
    }
    public function rekomendasioleh($idoleh)
    {
        if (!Rekomendasioleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists()) {
            Rekomendasioleh::create(['idoleh' => $idoleh, 'id' => auth()->user()->id]);
            $this->render();
        } else {
            $this->unrekomendasioleh($idoleh);
        }
    }
}
