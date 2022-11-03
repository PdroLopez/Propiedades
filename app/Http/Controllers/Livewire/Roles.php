<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rol;
class Roles extends Component
{
    public $rol, $nombre, $rol_id;
    public $isOpen = 0;

    public function render()
    {

        $this->rol = Rol::all();

        return view('livewire.roles');

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

        $this->nombre = '';

        // $this->body = '';

        // $this->rol_id = '';

    }



    public function store()

    {

            $this->validate([

            'nombre' => 'required',
            // 'body' => 'required',
             ]);



        Rol::updateOrCreate(['id' => $this->rol_id], [

         'nombre' => $this->nombre,
        // 'body' => $this->body

        ]);



     session()->flash('message',

         $this->rol_id ? 'rol Updated Successfully.' : 'rol Created Successfully.');



        $this->closeModal();

        $this->resetInputFields();

    }

    public function edit($id)

    {

        $rol = Rol::findOrFail($id);

        $this->rol_id = $id;

        $this->nombre = $rol->nombre;

        // $this->body = $rol->body;



        $this->openModal();

    }

    public function delete($id)

    {

        Rol::find($id)->delete();

        session()->flash('message', 'rol Deleted Successfully.');

    }
}
