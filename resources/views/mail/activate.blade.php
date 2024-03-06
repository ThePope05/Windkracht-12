<x-mail-layout>
    <x-slot name="title">
        Activate your account
    </x-slot>

    <x-slot name="content">
        <p>Hi {{ $invite->name }},</p>
        <p>Thank you for registering with us. Please click the link below to activate your account:</p>
        <x-mail::button :url="{{ route('activate', ['token' => $invite->token]) }}" color="success">
            Activate Account
        </x-mail::button>
        <p class=" text-red-600">If you did not register with us, please ignore this email.</p>
    </x-slot>
</x-mail-layout>