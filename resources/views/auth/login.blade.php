@extends('layouts.app')
@section('css')
<meta name="author" content="Abdullah Un Noman">
<meta name="robots" content="noindex, nofollow">
<meta name="keywords" content="unnoman, abdullah, ui/ux design, website design, responsive website design, web designer, ,tech,food">
<link rel="canonical"           href="https://unnoman.com/login" />
<meta property="og:url"         content="https://unnoman.com/login" />
<meta property="og:type"        content="website"/>
<meta property="og:title"       content="Abdullah Un Noman | login now" />
<meta property="og:description" content="I am a passionate designer who creates designs that are functional, meaningful, and beautiful. I graduated with a BSc degree in CSE from (BUBT). " />
<meta property="og:image"       content="#"/>
<meta property="og:site_name" content="Abdullah Un Noman" />

<meta name="twitter:card" content="summary" /> 
<meta name="twitter:title"       content="Abdullah Un Noman | login now" >
<meta name="twitter:description" content="I am a passionate designer who creates designs that are functional, meaningful, and beautiful. I graduated with a BSc degree in CSE from (BUBT). ">
<meta name="twitter:image"       content="#">
<meta name="twitter:site"        content="@Aunnoman">
<meta name="twitter:creator"     content="@Noman">

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Abdullah Un Noman",
    "url": "https://unnoman.com/login",
     "address": {
    "@type": "PostalAddress",
    "streetAddress": "dhanmondi",
    "addressRegion": "dhaka",
    "postalCode": "9330",
    "addressCountry": "BAN"
  },

    "sameAs": [
      "https://twitter.com/Aunnoman",
      "https://www.facebook.com/noman.abdullah.7739",
      "https://nl.pinterest.com/musannaakil",
      "https://www.instagram.com/abdullahunnoman",
      "https://linkedin.com/in/abdullah-un-noman",
      "https://www.behance.net/abdullahunnoman",
      "https://www.upwork.com/fl/abdullahunn2",
      "https://www.fiverr.com/noman0007"
    ]
  }
</script>
@endsection
@section('title')Abdullah Un Noman | login now @endsection
@section('description')I am a passionate designer who creates designs that are functional, meaningful, and beautiful. I graduated with a BSc degree in CSE from (BUBT). @endsection
@section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header "><h1 class="font-34">{{ __('Login') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right ">{{ __('E-Mail Address') }} : </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right ">{{ __('Password') }} : </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class=" btn button_slide slide_right ">
                                    <b>{{ __('Login') }}</b>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@endsection
