<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header w-full text-3xl text-center">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror w-full" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror w-full" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary w-full text-center bg-aqua hover:bg-dark-aqua py-2 transition-colors">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('auth.login') }}" class="text-aqua underline hover:text-dark-aqua transition-colors">Already have an account? Login</a>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('auth.resend') }}" class="text-aqua underline hover:text-dark-aqua transition-colors">Didn't get the mail? Resend</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>