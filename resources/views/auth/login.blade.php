<x-base>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="mt-5 text-center">
            <a href="{{ route('/') }}"><img src="{{ asset('imgs/assets/title-logo.png') }}" alt=""
                    style="width: 3.8rem"></a>

            <h2>Welcome Back,</h2>
            {{-- <h5>Login</h5> --}}
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card box-shadow2">
                    <div class="card-header">Login </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input id="floatingInput" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">Email Address</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="password" autocomplete="password">
                                @error('password')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <label for="password">Password</label>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="text-center">
                                    <button type="submit" class="btn special-btn"style="width:8rem">
                                        Login
                                    </button>
                                    <br>
                                    <a class=" btn-link" href="{{ route('register') }}">
                                        Don't Have an Account? Create One
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-base>
