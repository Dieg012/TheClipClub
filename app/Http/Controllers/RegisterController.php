<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Contracts\RegisterViewResponse;
use Illuminate\Contracts\Auth\StatefulGuard;

class RegisterController extends Controller
{
    protected $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function store(Request $request,
                          CreatesNewUsers $creator): RegisterResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:9', 'unique:users'],
            'role1' => ['string'],
            'role2' => ['string'],
            'role3' => ['string'],
            'role4' => ['string'],
            'img'=>['image'],
            'bio' => ['string', 'max:255'],
            'password' => ['string', 'min:8', 'regex:/[A-Z][a-z][0-9]/']
        ]);
        $file = $request->file('img');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        $request->merge(['img'=>$nombre]);

        $request->merge(['originalName'=>$nombre]);

        event(new Registered($user = $creator->create($request->all())));

        $this->guard->login($user);

        return app(RegisterResponse::class);
    }
}
