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
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // إضافة التحقق من الحقول الجديدة هنا
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'current_job' => ['nullable', 'string', 'max:255'], // التحقق من وظيفة الحالية
            'phone_number' => ['nullable', 'string', 'max:15'], // التحقق من رقم الهاتف
            'address' => ['nullable', 'string'], // التحقق من العنوان
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // إنشاء المستخدم مع الحقول الجديدة
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'current_job' => $input['current_job'] ?? null, // إضافة الحقل مع جعلها nullable
            'phone_number' => $input['phone_number'] ?? null, // إضافة الحقل مع جعلها nullable
            'address' => $input['address'] ?? null, // إضافة الحقل مع جعلها nullable
        ]);
    }
}