@extends('layouts.app')
@section('css') 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<meta name="author" content="Abdullah Un Noman">
<meta name="robots" content="index, follow">
<meta name="keywords" content="unnoman, abdullah, ui/ux design, website design, responsive website design, web designer,">
<link rel="canonical"           href="https://unnoman.com/story" />
<meta property="og:url"         content="https://unnoman.com/story" />
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

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Abdullah Un Noman",
    "url": "https://unnoman.com/story",
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
@section('title')Abdullah Un Noman | I'd like to tell you a bit about me @endsection
@section('description')I started my career in 2011 as a freelance Graphic designer. For almost 4 years worked freelancing, then I  started my professional career in 2015.@endsection
@section('content')
<section>
<div class="container-fluid d-flex flex-column justify-content-center" id="p2" style="background: url({{ asset('static/image/story-bg-1.png') }}) no-repeat right/contain;">

    <div class="container">
        <h1 class="hero-text font-weight-bold">My Story<span class="dot-color">.</span></h1>
    </div>

</div>
</section>
<br>
<div class="container ">
    
    
    <div class="d-flex justify-content-end">
    <p class="col-md-9 text-left font-18 hello-p ">I am a passionate designer who creates designs that are functional, meaningful, and beautiful. I graduated with a BSc degree in CSE from Bangladesh University of Business and Technology (BUBT).<br><br> 

      I started my career since 2011 as a freelance Graphic designer almost 4 years worked freelancing than I have stared my professional career 2015. Now I have worked in the design industry for the past 5 years.<br><br> 
      
      Among them, there are two popular companies named JoomShaper and Pathao I have worked.<br><br>
      
      <b>JoomShaper</b><br><br>
      
      I have  joined at JoomShaper in 2016 as a UI & UX Designer. I have worked there wordpress and Joomla theme design. That theme used millions of user. Most popular product of joomShaper is “ SP page builder” It’s #1 Drag & Drop Joomla Site Builder. I have work mostly improving UI design and user experience that product.<br><br>   
      
      I have worked there 1 year 2 month. At 2017 I Switch the job and Join the Pathao.<br><br>
      
      <b>Pathao</b><br><br>
      
      Pathao is one of the best tech company in Bangladesh. I have join 2017 that time pathao is a small startup. Only 60 people work there. Now Pathao is a 100M value Startup and 3 thousand<br><br>
      <a  class="btn button_slide slide_right" target="_blank" href="static/Abdullah-Un-Noman's-CV.pdf">Get Resume</a></p><br>
      
    </div>
</div>
<br><br><br><br><br>
<div class="container">
  <div class="col-12"><img class="card-img-top img" style="margin-left:-200px;" src="static/image/bg-resource-1-2x.png" alt="Card image cap"></div>
  </div>
<br><br><br>
<section id="collapse">
   <div class="container">
        <h3 class="font-46 font-weight-bold">Working<br>Experience<span class="dot-color"> .</span></h3>
        <div class="bs-example ">
            <div class="accordion" id="accordionExample">
                @foreach($accordings as $i=>$according)
                <div class="card bg-puredark colp-m-1">
                    <div class="card-header" id="heading{{$according->id}}">
                        <div class=" collapsed" data-toggle="collapse" data-target="#collapse{{$according->id}}">
                            <div class="row">
                                <div class="col-1 d-flex  justify-content-center colp-m-i-2"><i class="dot-color fas fa-plus colp-icon"></i> <i class=""></i></div>
                                <div class="colp-m-2 col-10">
                                    <span class="dot-color">{{ \Carbon\Carbon::parse($according->join_date)->isoFormat('MMMM YYYY', 'Do MMMM')}} – <?php if($according->resign_date!==Null){echo \Carbon\Carbon::parse($according->resign_date)->isoFormat('MMMM YYYY', 'Do MMMM');}else{echo "Present";} ?></span>
                                    <h3 class="font-34 font-weight-bold colp-h3-s">{{$according->job_title}}</h3>
                                    <span class="font-18">{{$according->job_office}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapse{{$according->id}}" class="collapse <?php if($i==0){echo "show";}?>" aria-labelledby="heading{{$according->id}}" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row  d-flex  justify-content-center">
                                <div class="col-md-10">
                                    <div class="font-22">
                                        {!! $according->discription !!}
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
   </div>
</section>
<br><br><br><br><br class="d-none d-md-block"><br class="d-none d-md-block">
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="font-46 font-weight-bold"> Eductions<span class="dot-color">.</span></h3>
            </div>
            <div class="col-md-8">
                @foreach($educations as $i=>$education)
                <div class="row">
                    <div class="col-md-6">
                    <h5 class="font-18 font-weight-bold mt-3 mt-md-0">{{$education->certificate_name}} </h5><br class="d-none d-md-block">
                    <div class="font-16 ">{!! $education->institute_name !!}</div>          
                    </div>
                    <div class="col-md-6">
                    <p class="font-18 font-weight-bold float-md-right mt-3 mt-md-0">{{$education->date}}</p>       
                    </div>
                </div><br>
                @endforeach
            </div>
        </div>
    </div>
    <br><br class="d-none d-md-block"><br class="d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="font-46 font-weight-bold"> Skills<span class="dot-color">.</span></h3>
            </div>
            <div class="col-md-4">
               <h5 class="font-18 font-weight-bold mt-3 mt-md-0">Research </h5><br>
               <ul class="font-16">
                <li>• Firebase and CleverTap </li>
                <li>• A/B testing </li>
                <li>• User journey mapping </li>
                <li>• Persona hypothesis </li>
                <li>• Usability testing </li>
                <li>• Affinity diagram   </li>
               </ul> 
               <br><br class="d-none d-md-block">
               <h5 class="font-18 font-weight-bold">Tool </h5><br>
               <ul class="font-16">
                <li>• Sketch / Figma / XD</li>                          
                <li>• Photoshop / Illustrator </li>
                <li>• Principal </li>
                <li>• InVision / Zeplin</li>
                <li>• Jira / Trello </li>
                <li>• HTML/CSS ( Basic )  </li>
               </ul>       
            </div>
            <div class="col-md-4">
                <h5 class="font-18 font-weight-bold mt-3 mt-md-0">Design </h5><br>
                <ul class="font-16">
                 <li>• Interaction & UI design using Sketch </li>
                 <li>• User flows using Whimsical </li>
                 <li>• Wireframe and mockup  </li>
                 <li>• Motion design using Principle  </li>
                 <li>• Design system design  </li>
                 <li>• Style guides & library  </li>
                 <li>• Rapid & advance prototyping  </li>
                </ul>    
                <br>
                <h5 class="font-18 font-weight-bold">Collaboration </h5><br>
                <ul class="font-16">
                 <li>• Feature strategy presentation </li>
                 <li>• Facilitating design review & critique  </li>
                 <li>• Knowledge sharing  </li>
                 <li>• Cross- functional collaboration & support </li>
                </ul>         
            </div>
        </div>
    </div>
    <br><br><br class="d-none d-md-block"><br class="d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="font-46 font-weight-bold"> Language<span class="dot-color">.</span></h3>
            </div>
            <div class="col-md-4">
               <p class="font-18 mt-3 mt-md-0">Bangla (native), English (Conversational) </p>
            </div> 
        </div>
    </div>
    <br><br><br class="d-none d-md-block"><br class="d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="font-46 font-weight-bold"> Design Talk<span class="dot-color">.</span></h3>
            </div>
            <div class="col-md-8">
            @foreach($designtalks as $i=>$designtalk)
                <div class="row">
                    <div class="col-md-6"><div class="font-18 font-weight-bold mt-3 mt-md-0">{{$designtalk->question}}</div><br class="d-none d-md-block">
                        <div class="font-16 ">{!!$designtalk->place!!}</div>  <br><br class="d-none d-md-block"></div>
                    <div class="col-md-6"><p class="font-18 font-weight-bold float-md-right">{{ \Carbon\Carbon::parse($designtalk->date)->toFormattedDateString()}}</p></div><br>
                </div>
            @endforeach       
            </div> 
        </div>
    </div>
    <br><br><br class="d-none d-md-block"><br class="d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="font-46 font-weight-bold"> Distinctions<span class="dot-color">.</span></h3>
            </div>
            <div class="col-md-8">
            @foreach($distinctions as $i=>$distinction)
                <div class="row">
                    <div class="col-md-6"><div class="font-18 font-weight-bold mt-3 mt-md-0">{{$distinction->award}}</div><br class="d-none d-md-block">
                        <div class="font-16 ">{!!$distinction->place!!}</div>  <br><br class="d-none d-md-block"></div>
                    <div class="col-md-6"><p class="font-18 font-weight-bold float-md-right">{{ \Carbon\Carbon::parse($distinction->date)->toFormattedDateString()}}</p></div><br>
                </div>
            @endforeach
            </div>     
        </div>
    </div>
</section>
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
 
    @endsection
@section('js')
<script>
  </script>
 @endsection