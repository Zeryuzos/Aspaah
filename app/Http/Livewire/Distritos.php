<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Distrito;

class Distritos extends Component
{
    public $distritos, $no_distrito, $distrito_id;
    public $isOpen = false;
    public function render()
    {
        $this->distritos = Distrito::all();
        return view('livewire.distritos');
    }
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }
    private function resetInputFields(){
        $this->no_distrito = '';
    }
    public function store()
    {
        $this->validate([
            'no_distrito' => 'required',
        ]);

        Distrito::updateOrCreate(['id' => $this->distrito_id], [
            'no_distrito' => $this->no_distrito
        ]);

        session()->flash('message',
            $this->distrito_id ? 'Distrito Updated Successfully.' : 'Distrito Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $distrito = Distrito::findOrFail($id);
        $this->distrito_id = $id;
        $this->no_distrito = $distrito->no_distrito;

        $this->openModal();
    }
    public function delete($id)
    {
        Distrito::find($id)->delete();
        session()->flash('message', 'Distrito Deleted Successfully.');
    }
}
