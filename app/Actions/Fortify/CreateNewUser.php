<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
            'phone' => ['required', 'integer', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:9', 'unique:users'],
            'role1' => ['string'],
            'role2' => ['string'],
            'role3' => ['string'],
            'role4' => ['string'],
//          'img' => ['end_with:jpg, jpeg, png'],
            'bio' => ['string', 'max:255'],
            'password' => $this->passwordRules()
        ])->validate();
        if(!isset($input['role1'])){
            $input['role1'] = '';
        }
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'role1' => $input['role1'],
            'role2' => $input['role2'],
            'role3' => $input['role3'],
            'role4' => $input['role4'],
            'img' => $input['img'],
            'bio' => $input['bio'],
            'password' => Hash::make($input['password'])
        ]);
        
    }
}
