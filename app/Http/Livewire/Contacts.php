<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;

class Contacts extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $email, $pkredes, $pkuser;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.contacts.view', [
            'contacts' => Contact::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('pkredes', 'LIKE', $keyWord)
						->orWhere('pkuser', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->email = null;
		$this->pkredes = null;
		$this->pkuser = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
		'pkredes' => 'required',
        ]);

        Contact::create([ 
			'name' => $this-> name,
			'email' => $this-> email,
			'pkredes' => $this-> pkredes,
			'pkuser' => $this-> pkuser
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Contact Successfully created.');
    }

    public function edit($id)
    {
        $record = Contact::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->email = $record-> email;
		$this->pkredes = $record-> pkredes;
		$this->pkuser = $record-> pkuser;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
		'pkredes' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Contact::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'email' => $this-> email,
			'pkredes' => $this-> pkredes,
			'pkuser' => $this-> pkuser
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Contact Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Contact::where('id', $id);
            $record->delete();
        }
    }
}
