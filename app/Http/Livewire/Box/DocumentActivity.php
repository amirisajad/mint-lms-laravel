<?php

namespace App\Http\Livewire\Box;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class DocumentActivity extends Component
{

    use WithPagination;
    public function render()
    {
        $documents =  Document::paginate(20);
        return view('livewire.box.document-activity' , compact([
            'documents'
        ]));
    }
}
