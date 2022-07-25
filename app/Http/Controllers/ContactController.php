<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {

        $data = $req->all();

        $filename    = $data['photo']->getClientOriginalName();

        //Сохраняем оригинальную картинку
        $data['photo']->move(Storage::path('/public/images/'),$filename);



        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->age = $req->input('age');
        $contact->photo = $filename;
        $contact->experience = $req->input('experience');
        $contact->salary = $req->input('salary');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сотрудник добавлен!');
    }

    public function allData(){
        $contact = new Contact();
        return view('contacts', ['data'=> $contact->all()]);
    }

    public function showOneMessage($id){
        $contact = new Contact();
        return view('one-message', ['data'=> $contact->find($id)]);
    }
}
