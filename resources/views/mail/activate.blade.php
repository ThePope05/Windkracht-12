<x-mail-layout>
    <x-slot name="title">
        Activate your account
    </x-slot>

    <x-slot name="content">
        <p>Hi {{ $user->name }},</p>
        <p>Thank you for registering with us. Please click the link below to activate your account:</p>
        <p><a href="{{ route('activate', $user->activation_token) }}" class="bg-blue-600 rounded-sm px-8 py-4 my-6">{{ route('activate', $user->activation_token) }}</a></p>
        <p>If you did not register with us, please ignore this email.</p>
    </x-slot>
</x-mail-layout>