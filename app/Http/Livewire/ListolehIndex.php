<?php

namespace App\Http\Livewire;
use App\Models\listOleh;
use Livewire\Component;

class ListolehIndex extends Component
{
    public $idoleh;
    public function mount($idoleh)
    {
        $this->idoleh = $idoleh;
    }
    public function render()
    {
        return view('livewire.listoleh-index', [
            'listoleh' => listOleh::where(['idoleh' => $this->idoleh])->get(),
            'idoleh',
            'heart',
        ]);
    }
    public function unlistoleh($idoleh)
    {
        if (listOleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists()) {
            listOleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->delete();
            $this->render();
        }
    }
    public function listoleh($idoleh)
    {
        if (!listOleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists()) {
            listOleh::create(['idoleh' => $idoleh, 'id' => auth()->user()->id]);
            $this->render();
        } else {
            $this->unlistoleh($idoleh);
        }
    }
}
