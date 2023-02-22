<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $nama;
    public $ucapan;

    protected $rules = [
        'nama' => 'required',
        'ucapan' => 'required'
    ];

    protected $messages =
    [
        'nama.required' => 'Silahkan Masukkan Nama',
        'ucapan.required' => 'Silahkan Masukkan Ucapan Atau Doa'
    ];

    public function render()
    {
        return view(
            'livewire.comments',
            [
                'listUcapan' => Comment::orderByDesc('created_at')->get()
            ]
        );
    }

    public function simpan()
    {
        $validate = $this->validate();

        Comment::create($validate);
        session()->flash('message', 'Ucapan Terkirim ! Terima kasih.');
    }
}
