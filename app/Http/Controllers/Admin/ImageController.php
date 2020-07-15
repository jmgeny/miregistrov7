<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\File;
use App\Image;
use App\Person;


class ImageController extends Controller
{
    public function ver(Request $request, $id)
    {
    	$user = User::find($id);
    	$urlImagen = [];

    	if ($request->hasFile('image')) 
    	{
    		// $nombre = time().'-'.$request->image->getClientOriginalName();
    		// $ruta   = public_path().'/imgUser';
    		// $request->image->move($ruta,$nombre);
    		// $urlImagen['url'] = '/imgUser/'.$nombre;
    		// $user->image()->create($urlImagen); 
    	}

    	$person = Person::find('user_id',$id);

    	// $person = $user->person;

    	// return view('admin.person.edit',compact('person')); 
return 'hola';

    }
}
