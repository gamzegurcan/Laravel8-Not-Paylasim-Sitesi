<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review ,$note_id,$rate;

    public function mount($id){
        $this->record = Note::findOrFail($id);
        $this->note_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput(){
        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->note_id=null;
        $this->IP = null;
    }

    public function store() {

        $this->validate([
                'subject' => 'required|min:5',
                'review' => 'required|min:10',
                'rate' => 'required'
           ]);

       \App\Models\Review::create([
               'note_id' => $this->note_id,
               'user_id'=> Auth::id(),
               'IP' => $_SERVER['REMOTE_ADDR'],
               'subject' => $this->subject,
               'review' => $this->review,
               'rate' => $this->rate

       ]);

       session()->flash('message','Revire Send Successfully');
       $this->resetInput();

    }

}
