<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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
        Validator::make($input, self::validator())->validate();

        $create = [];

        foreach (config('auth.registration.fields') as $field => $value) {

            if ($value['enabled']) {

                if ($value['type'] == 'password') {
                    $create[$field] = Hash::make($input[$field]);
                } else {
                    $create[$field] = $input[$field];
                }

            }

        }

//        dd(request()->all(), $input, $create, self::validator());

        return User::create($create);
    }

    private function validator() : array
    {

        $validator = [];

        /*        if(config('auth.registration.fields.first_name.enabled'))   $validator['first_name'] = config('auth.registration.fields.first_name.validation');
                if(config('auth.registration.fields.last_name.enabled'))   $validator['last_name'] = config('auth.registration.fields.last_name.validation');
                if (config('auth.registration.fields.email.enabled'))       $validator['email'] = config('auth.registration.fields.email.validation');
                $validator['password'] = config('auth.registration.fields.password.validation');*/

        foreach (config('auth.registration.fields') as $field => $value) {
            if ($value['enabled']) {
                if ($value['type'] == 'password' && empty($value['validation'])) {
                    $validator[$field] = $this->passwordRules();
                } else {
                    $validator[$field] = $value['validation'];
                }
            }
        }

        return $validator;
    }
}
