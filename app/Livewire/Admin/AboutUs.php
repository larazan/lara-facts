<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use Livewire\Component;

class AboutUs extends Component
{
    public $body;
    public $trixId;

    public function mount()
    {
        $data = Setting::where(['key' => 'about_us'])->first();
        if ($data) {
            $this->body = $data->value;
        } else {
            $this->body = $data;
        }
    }

    public function updateAbout()
    {
        // dd($this->body);
        // BusinessSetting::where(['key' => 'about_us'])->update([
        //     'value' => $this->about,
        // ]);

        DB::table('settings')->updateOrInsert(['key' => 'about_us'], [
            'value' => $this->body,
        ]);

        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'About us updated successfully']);
    }

    public function render()
    {
        return view('livewire.admin.about-us');
    }
}
