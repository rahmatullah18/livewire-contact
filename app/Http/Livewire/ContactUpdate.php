<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactUpdate extends Component
{
    // property upddate
    public $name,$phone;
    // untuk menampung inputan hidden id
    public $contactId;  

    protected $listeners = [
        'getContact' 
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function getContact($contact)
    {
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
        $this->contactId = $contact['id']; 
    }

    // untuk update
    public function update()
    {
        $this->validate([
            'name' => "required|min:3",
            'phone' => "required|max:15"
        ]);

        // jika ada data di $contactId
        if ($this->contactId) {
            $contact = Contact::find($this->contactId);
            $contact->update([
                'name' => $this->name,
                'phone' => $this->phone,
            ]);

            $this->resetInput(); 


            // emit ke contactIndex
            $this->emit('contactUpdated', $contact); 
        }
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}


















