<x-mail-layout>
    <x-slot name="title">
        Activate your account
    </x-slot>

    <x-slot name="header">
        Activate your account
    </x-slot>

    <p>Hi {{ $invite->name }},</p>
    <p>Thank you for registering with us. Please click the link below to activate your account:</p>
    <a href="{{ route('auth.activate', ['token' => $invite->token]) }}" color="success">
        Activate Account
    </a>
    <p class=" text-red-600">If you did not register with us, please ignore this email.</p>
</x-mail-layout>