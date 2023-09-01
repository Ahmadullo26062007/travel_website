<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutLivewire extends Component
{
    use WithFileUploads;

    public $phone_number1, $phone_number2, $email, $instagram, $telegram, $facebook, $image, $description,$whats_app;
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
        $this->whats_app = $this->about->whats_app;
    }

    protected $rules = [
        'phone_number1' => 'required',
        'phone_number2' => 'required',
        'email' => 'required',
        'instagram' => 'required',
        'telegram' => 'required',
        'facebook' => 'required',
        'description' => 'required',
        'whats_app' => 'required',
    ];
    protected $messages = [
        'phone_number1.required' => 'Phone number 1 Not entered',
        'phone_number2.required' => 'Phone number 2 Not entered',
        'email.required' => 'Email Not entered',
        'instagram.required' => 'Instagram link Not entered',
        'telegram.required' => 'Telegram link Not entered',
        'facebook.required' => 'Facebook link Not entered',
        'description.required' => 'Description Not entered',
        'whats_app.required' => 'WhatsApp number Not entered',
    ];

    public function editabout()
    {
        $this->validate();
        if ($this->image!=$this->about->image){
            $this->image->store('laravel/public');
            $image_name = $this->image->hashName();
            $this->about->update([
                'phone_number1' => $this->phone_number1,
                'phone_number2' => $this->phone_number2,
                'email' => $this->email,
                'instagram' => $this->instagram,
                'telegram' => $this->telegram,
                'facebook' => $this->facebook,
                'description' => $this->description,
                'whats_app' => $this->whats_app,
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
                'whats_app' => $this->whats_app,
            ]);
        }
        return redirect()->route('about.index');
    }

    public function render()
    {
        return view('livewire.about-livewire');
    }
}
