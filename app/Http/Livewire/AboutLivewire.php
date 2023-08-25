<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutLivewire extends Component
{
    use WithFileUploads;

    public $phone_number1, $phone_number2, $email, $instagram, $telegram, $facebook, $image, $description;
    public $about;

    public function mount($about)
    {
        $this->about = $about;

        $this->phone_number1 = $this->about->phone_number1;
        $this->phone_number2 = $this->about->phone_number2;
        $this->email = $this->about->email;
        $this->instagram = $this->about->instagram;
        $this->facebook = $this->about->facebook;
        $this->telegram = $this->about->telegram;
        $this->description = $this->about->description;
        $this->image = $this->about->image;
    }

    protected $rules = [
        'phone_number1' => 'required',
        'phone_number2' => 'required',
        'email' => 'required',
        'instagram' => 'required',
        'telegram' => 'required',
        'facebook' => 'required',
        'description' => 'required',
    ];
    protected $messages = [
        'phone_number1.required' => 'Telefon raqam 1 Kiritilmadi',
        'phone_number2.required' => 'Telefon raqam 2 Kiritilmadi',
        'email.required' => 'Email Kiritilmadi',
        'instagram.required' => 'Instagram link Kiritilmadi',
        'telegram.required' => 'Telegram link Kiritilmadi',
        'facebook.required' => 'Facebook link Kiritilmadi',
        'description.required' => 'Tavsif Kiritilmadi'
    ];

    public function editabout()
    {
        $this->validate();
        if ($this->image!==$this->about->image){
            $this->image->store('public');
            $image_name = $this->image->hashName();
            $this->about->update([
                'phone_number1' => $this->phone_number1,
                'phone_number2' => $this->phone_number2,
                'email' => $this->email,
                'instagram' => $this->instagram,
                'telegram' => $this->telegram,
                'facebook' => $this->facebook,
                'description' => $this->description,
                'image' => $image_name,
            ]);
        }else{
            $this->about->update([
                'phone_number1' => $this->phone_number1,
                'phone_number2' => $this->phone_number2,
                'email' => $this->email,
                'instagram' => $this->instagram,
                'telegram' => $this->telegram,
                'facebook' => $this->facebook,
                'description' => $this->description,
            ]);
        }
        return redirect()->route('about.index');
    }

    public function render()
    {
        return view('livewire.about-livewire');
    }
}
