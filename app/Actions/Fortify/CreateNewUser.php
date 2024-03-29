<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'movil' => ['required', 'string', 'max:10'],
            'dni' => ['required', 'string', 'max:10'],
            'profile_photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'address' => $input['address'],
            'city' => $input['city'],
            'movil' => $input['movil'],
            'dni' => $input['dni'],
            'role_id' => $input['role_id'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'profile_photo_path' => 'profile-photos/'.$input['foto'].'.png',
        ]);
    }
}
