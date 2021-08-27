@extends('layouts.app')
@section('css') 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<meta name="author" content="Abdullah Un Noman">
<meta name="robots" content="index, follow">
<meta name="keywords" content="unnoman, abdullah, ui/ux design, website design, responsive website design, web designer, contact, noman contact">
<link rel="canonical"           href="https://unnoman.com/contact" />
<meta property="og:url"         content="https://unnoman.com/contact" />
<meta property="og:type"        content="website"/>
<meta property="og:title"       content="Contact To Build Your Next Dream Project | Abdullah Un Noman" />
<meta property="og:description" content="I started my career in 2011 as a freelance Graphic designer. For almost 4 years worked freelancing, then I  started my professional career in 2015." />
<meta property="og:image"       content="#"/>
<meta property="og:site_name" content="Abdullah Un Noman" />

<meta name="twitter:card" content="summary" /> 
<meta name="twitter:title"       content="Contact To Build Your Next Dream Project | Abdullah Un Noman" >
<meta name="twitter:description" content="I started my career in 2011 as a freelance Graphic designer. For almost 4 years worked freelancing, then I  started my professional career in 2015.">
<meta name="twitter:image"       content="#">
<meta name="twitter:site"        content="@Aunnoman">
<meta name="twitter:creator"     content="@Noman">

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Abdullah Un Noman",
    "url": "https://unnoman.com/contact",
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
@section('description')Let's start a project for building a new web world that looks awesome. Feel free to contact me. I will try to respond as soon as possible. @endsection
@section('title') Contact To Build Your Next Dream Project | Abdullah Un Noman @endsection
@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('success'))
                <div class="alert alert-primary">{{Session::get('success')}}</div>
            @endif
            @if($errors->any())
                <div >
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="cen"><img class="text-center" src="{{ asset('static/image/noman12x.png') }}" alt="Abdullah Un-Noman" width="90" height="90"></div><br>
                <h1 class="text-center text-dark1" >Want to start a project?<br>Send me some detailed info.</h1>
                    <br>
                <form method="POST" action="{{route('contactSubmit')}}" >@csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name" class="text-dark1 col-form-label text-md-right">Your Name</label>
                            <input style=" color:#fff;background: rgb(57,56,61);background: linear-gradient(90deg, rgba(57,56,61,1) 0%, rgba(80,81,85,1) 100%);border: 0px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">
                        </div>
                        <div class="col-md-6 ">
                            <label for="email" class="text-dark1 col-form-label text-md-right">Email Address</label>
                            <input style="color:  #fff;background: rgb(57,56,61);
                            background: linear-gradient(90deg, rgba(57,56,61,1) 0%, rgba(80,81,85,1) 100%); border: 0px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter your Email Address">
                        </div>
                    </div>
                    <label for="massage" class="text-dark1 col-form-label text-md-right">Massage</label>
                    <textarea  style="color:  #fff; background: rgb(57,56,61);
                    background: linear-gradient(90deg, rgba(57,56,61,1) 0%, rgba(80,81,85,1) 100%);border: 0px;"  id="massage" rows="5" class="form-control " name="massage" placeholder="Enter your Massage..." ></textarea><br>
                    <button class="btn button_slide slide_right" type="submit">Send Now !</button>
                </form>
            </div>    
        </div>
    </div>
<br><br>
<br>
@endsection