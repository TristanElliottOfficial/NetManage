@extends('layouts.guest')

@section('content')

<v-auth-card title="{{ __('Login') }}">
<form action="{{ route('login') }}" method="post">
    @csrf
    {{-- Email Address Field Start --}}
        <v-input id="email" type="email" name="email" label="{{ __('Email Address') }}" class="@error('email') border-red-500 @enderror" placeholder="{{ __('Enter an Email Address') }}">
            @error('email')
                <v-input-error text="{{ $message }}"></v-input-error>
            @enderror
        </v-input>
    {{-- Email Address Field End --}}

    {{-- Email Address Field Start --}}
        <v-input id="password" type="password" name="password" label="{{ __('Password') }}" class="@error('password') border-red-500 @enderror" placeholder="{{ __('Enter a Password') }}">
            @error('password')
                <v-input-error text="{{ $message }}"></v-input-error>
            @enderror
        </v-input>
    {{-- Email Address Field End --}}

    <v-button text="{{ __('Login') }}"></v-button>
</form>
</v-auth-card>

@endsection
