@extends('layout')

@section('kunde')
                <div class="card-header">{{ __('Login') }}</div>

                    <form id="form2" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div id="shema">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                              
                          <input  type="checkbox" style="padding: 0px;width: 20px; margin-top: 10px;" name="remember"   {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" >  
                                        {{ __('Remember Me') }}</label>  
                          
                           
                                <button type="submit" >
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="font-family: Arial, Helvetica, sans-serif;margin-top:20px;margin-left: 20px;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                {{-- <button type="submit" formaction="{{route('logout')}}">log out</button> --}}
</div>
                    </form>
@endsection
