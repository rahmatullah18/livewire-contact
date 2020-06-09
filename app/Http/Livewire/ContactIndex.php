<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;
use Livewire\WithPagination;

class ContactIndex extends Component
{

    use WithPagination;
    //untuk update
    public $updateStatus = false;

    // public $contacts;

    protected $listeners = [
        'contactStored',
        'contactUpdated'
    ];

    public function render()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('livewire.contact-index', compact('contacts'));
    }

                    // harus sama dengan nilai di listenersnya
    public function contactStored($contact)
    {
        // pesan 
        toast('Message')->success();
        // session()->flash('message', 'Data ' . $contact['name'] . ' was stored');
    }


    // untuk edit
    public function getContact($id)
    {
        $this->updateStatus = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    // edit
    public function contactUpdated($contact)
    {
        // pesan 
        session()->flash('message', 'Data ' . $contact['name'] . ' was updated');
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Contact::find($id);
            $data->delete();

            session()->flash('message', 'Data was deleted');
        }
    }

}



















