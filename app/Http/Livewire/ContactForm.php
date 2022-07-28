<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\Email as Email; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactForm extends Component
{
    use LivewireAlert;

    public $name = "";
    public $phone = "";
    public $email = "";
    public $message = "";

    public $inputs = [];


    public $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ];

    public $errors = [];

    public function mount(){

    }

    public function check(){

        $validator = Validator::make($this->inputs, $this->rules);

        $errors = $validator->errors()->toArray();

        $this->errors = $errors; 

    }

    public function notifyValidationError($error){

        $this->alert('warning', $error[0]);

    }

    public function notifySuccess(){

        $this->alert('success', "Thanks for being in touch. I'll be sure to get back to your promptly!");

    }

    public function sendEmail(){

        $data = [
            'message' => $this->message,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email
        ];
    
        Mail::to('georgesmpopovic@gmail.com')->send(new Email($data));

    }

    public function clearForm(){

        $this->name = "";
        $this->phone = "";
        $this->message = "";
        $this->email = "";
        $this->errors = [];

    }

    public function submit(){
        
        $this->check();

        if(count($this->errors) > 0){

            foreach($this->errors as $error){

                $this->notifyValidationError($error); 

            }

            return true; 

        }

        $this->sendEmail();

        $this->notifySuccess();

        $this->clearForm();

    }

    public function render()
    {

        $this->inputs =  [
            "name" => $this->name, 
            "email" => $this->email, 
            "message" => $this->message
        ];

        return view('livewire.contact-form');
    }
}
