@extends('layouts.app')
@section('css') 
<meta name="author" content="Abdullah Un Noman">
<meta name="robots" content="index, follow">
<meta name="keywords" content="unnoman, abdullah, ui/ux design, website design, responsive website design, web designer,">
<link rel="canonical"           href="https://unnoman.com/resource" />
<meta property="og:url"         content="https://unnoman.com/resource" />
<meta property="og:type"        content="website"/>
<meta property="og:title"       content="Abdullah Un Noman | I'd like to tell you a bit about me" />
<meta property="og:description" content="I started my career in 2011 as a freelance Graphic designer. For almost 4 years worked freelancing, then I  started my professional career in 2015." />
<meta property="og:image"       content="#"/>
<meta property="og:site_name" content="Abdullah Un Noman" />

<meta name="twitter:card" content="summary" /> 
<meta name="twitter:title"       content="Abdullah Un Noman | I'd like to tell you a bit about me" >
<meta name="twitter:description" content="I started my career in 2011 as a freelance Graphic designer. For almost 4 years worked freelancing, then I  started my professional career in 2015.">
<meta name="twitter:image"       content="#">
<meta name="twitter:site"        content="@Aunnoman">
<meta name="twitter:creator"     content="@Noman">
<style>
.free::before{
  position: absolute;
  right: 30px;
  top: 230px;
  border-radius: 50%;
  box-shadow: 9px 9px 18px rgba(238, 47, 36, 0.25);
  
   background-color:#EE2F24;
   color:#FFFFFF;
   content:"Free";
   font-weight: bold;
   font-size: 14.4px;
   padding: 22px 17px;
}
#download:hover{
    color: #EE2F24;
}
#download{
   padding-left: 0px;
}
.download:after {
    content: '';
    position: absolute;
    bottom: 30px;
    left: 30px;
    width: 175px;
    height: 2px;
    background-color: #D8D8D8;
    box-shadow: inset 0 0 0 0 #D8D8D8;
    -webkit-transition: 1s;
    transition: 1s;
}
.download:hover:after {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    box-shadow: inset 175px 0 0 0 #F95353;
    transition: 1s;
}
.card{
    border: none !important;

}
</style>

@endsection
@section('title')Abdullah Un Noman | I'd like to tell you a bit about me @endsection
@section('description')I started my career in 2011 as a freelance Graphic designer. For almost 4 years worked freelancing, then I  started my professional career in 2015.@endsection
@section('content')
<section>
<div class=" container-fluid d-flex flex-column justify-content-center" id="p2" style="background: url({{ asset('static/image/story-bg-1.png') }}) no-repeat right/contain;">

    <div class="container">
        <h1 class="hero-text font-weight-bold col-6">Design Resource<span class="dot-color">.</span></h1>
    </div>

</div>
</section>
<br><br><br><br><br><br>
<section>
<div class="container">
  <div class="row">
    @foreach ($resources as $resource)
    <div class="col-md-4">
        <div class="card mt-4">
            <img class="card-img-top img" src="storage/image/resource/{{ $resource->image}}" alt="Card image cap">
            <div class="card-body ml-3s free">
                <h5 class="card-title text-dark font-24 font-weight-bold ">{{$resource->title}}</h5>
                <div>
                  <a href="#" id="download" data-toggle="modal" data-target="#deletePostModal-{{$resource->id}}" class="font-weight-bold btn download mt-4 dot-color">Download Now <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>IC Arrow Forward 24px</title> <g id="Main-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Home-Copy-6" transform="translate(-295.000000, -2048.000000)"> <g id="Group-4" transform="translate(145.000000, 1651.000000)"> <g id="Group-6-Copy-4"> <g id="Rectangle-Copy-13" transform="translate(30.000000, 291.000000)"> <g id="Button" transform="translate(0.000000, 101.000000)"> <g id="IC-Arrow-Forward-24px" transform="translate(120.000000, 5.000000)"> <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon> <g id="Download-Cloud" transform="translate(4.000000, 5.000000)" stroke="#EE2F24" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.41666667"> <polyline id="Path" points="5.66666667 10.625 8.5 13.4583333 11.3333333 10.625"></polyline> <line x1="8.5" y1="7.08333333" x2="8.5" y2="13.4583333" id="Path"></line> <path d="M14.79,11.3970834 L14.79,11.3970834 C16.3900187,10.2719525 16.7749837,8.06278836 15.6498529,6.46276961 C14.9860574,5.51880211 13.9039883,4.95743377 12.75,4.95833336 L11.8575,4.95833336 L11.8575,4.95833335 C11.0796579,1.92692168 7.9916433,0.1000521 4.96023871,0.877894183 C1.92882705,1.65573627 0.101957464,4.74375085 0.879799548,7.77515543 C1.10301946,8.64508793 1.52981651,9.4494996 2.12499996,10.1220763" id="Path"></path> </g> </g> </g> </g> </g> </g> </g> </g></svg></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
</section>
<br><br><br><br>
<br><br><br><br>
<div class="container">
<div class="col-12"><img class="card-img-top img" style="margin-left:-200px;" src="static/image/bg-resource-1-2x.png" alt="Card image cap"></div>
</div>

<br><br><br><br><br>
<section id="slider">
    <div class="container">
      <div class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-10 ">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
              <ol class="carousel-indicators row justify-content-md-end">
                @foreach($feedbacks as $i=>$post)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{$i==0?"active":" "}}"></li>
                @endforeach
              </ol>
              <div class="carousel-inner">
                @foreach($feedbacks as $i=>$post)
                  <div class="carousel-item {{$i==0?"active":" "}}">
                    <div class="skill-description font-34 font-weight-normal">{!! nl2br($post->discription)!!}</div>
                    <div class="client">
                      <div class="row">
                        <div class="col-md-1 col-2">
                      <img loading="lazy" class="counded-circle circle" height="60" width="60" src="storage/image/feedback/{{ $post->image}}" alt="Naeem Ahmed">
                        </div>
                      <div class="col-md-3 col-6  mt-2">
                        <p class="font-weight-bold">{{$post->name}}</p>
                        <small>{{$post->title}}</small>
                      </div>
                      </div>
                    </div>
                  </div>									
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br>
  <section id="contact">  
    <div class=" position-relative overflow-hidden    text-left bg-dark1">
      <div class="product-device3 img-bw  d-md-block"><img   src="static/image/bg3.png" alt="contact"></div>
      <div class="container">
        <div class="col-md-11 bg1-p  ">
          <div class="cnt-m-1  other-element">
            <p class="cnt-m-2 gilroy-bold">So What’s Next?</p>
            <p class="cnt-m-2 h-l  img-bw font-weight-bold">I’m ready ! <a href="/contact">Let's work together.</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @foreach($resources as $resource)
			
  <div class="modal fade" id="deletePostModal-{{$resource->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form  method="POST" class="dismiss-c" id="ab-{{$resource->id}}" action="{{route('resourceDownload')}}">@csrf  
          <div class="modal-body">
            <div class="form-group">
              <label for="normal-input" class="form-control-label"><h5 class="text-dark">email</h5></label>
              <input id="normal-input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="enter email" required autocomplete="email" autofocus >
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            <input id="normal-input" class="form-control" name="resource_id" value="{{$resource->id}}" hidden>
          </div>
          </div>
          <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary dismiss-d" >download</button>
          </div>
        </form>
          </div>
        </div>
        </div>
        @endforeach
@endsection
@section('js')
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Abdullah Un Noman",
    "url": "https://unnoman.com/resource",
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
<script>
$(function(){
    $('.dismiss-c').submit(function(e){
     
      
      $('.modal').delay(5000).modal('hide');
      /*
      $.post('http://path/to/post', 
         $('#myForm').serialize(), 
         function(data, status, xhr){
           // do something here with response;
         });
      */
    });
    
});
  </script>
@endsection