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

        $user = new User();

        // Generating the database request from the config file and the input.
        foreach (config('auth.registration.fields') as $field => $value) {

            // For unknown reasons, the User::create wasn't taking the username field. I'm forced to use the $user->save() method.
            if ($value['enabled'] && $input[$field] !== null) {

                if ($value['type'] == 'password') {
                    $user->$field = Hash::make($input[$field]);
                } else {
                    $user->$field = $input[$field];
                }
            }

        }

        $user->save();

        return $user;
    }

    private function validator() : array
    {

        $validator = [];

        // Generating the validator array based on the config file.
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
