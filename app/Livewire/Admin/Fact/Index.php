<?php

namespace App\Livewire\Admin\Fact;

use App\Models\Fact;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Fact::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Fact deleted successfully']);
    }

    public function deleteFact($factId)
    {
        $fact = Fact::findOrFail($factId);
        $fact->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Fact deleted successfully']);
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.fact.index')->with([
            'facts' => Fact::liveSearch('title', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
        ]);
    }

    public function gotoEdit($factId)
    {
        return redirect('/admin/fact/'.$factId.'/update');
    }
}
