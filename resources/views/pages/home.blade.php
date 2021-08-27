@extends('layouts.app')
@section('css')
<meta name="author" content="Abdullah Un Noman">
<meta name="robots" content="index, follow">
<meta name="keywords" content="unnoman, abdullah, ui/ux design, website design, responsive website design, web designer, ,tech,food">
<link rel="canonical"           href="https://unnoman.com" />
<meta property="og:url"         content="https://unnoman.com" />
<meta property="og:type"        content="website"/>
<meta property="og:title"       content="Abdullah Un Noman | UI/UX Expert | Web Designer | Saas Designer" />
<meta property="og:description" content="I’m an experienced UI/UX Designer. Last 6 Years I’ve been working on dozens of websites, Mobile App & SaaS Design projects & many of them are successful nowadays." />
<meta property="og:image"       content="#"/>
<meta property="og:site_name" content="Abdullah Un Noman" />

<meta name="twitter:card" content="summary" /> 
<meta name="twitter:title"       content="Abdullah Un Noman | UI/UX Expert | Web Designer | Saas Designer" >
<meta name="twitter:description" content="I’m an experienced UI/UX Designer. Last 6 Years I’ve been working on dozens of websites, Mobile App & SaaS Design projects & many of them are successful nowadays.">
<meta name="twitter:image"       content="#">
<meta name="twitter:site"        content="@Aunnoman">
<meta name="twitter:creator"     content="@Noman">

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Abdullah Un Noman",
    "url": "https://unnoman.com",
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
@section('title')Abdullah Un Noman | UI/UX Expert | Web Designer | Saas Designer @endsection
@section('description')I’m an experienced UI/UX Designer. Last 6 Years I’ve been working on dozens of websites, Mobile App & SaaS Design projects & many of them are successful nowadays.@endsection
@section('content')
<div class="container" >
  <main>
    <div  id="row" class="row">
      <div class="col-md-6 col-lg-5  order-md-12 " >
        <img class="img img-bg1" src="static/image/bg.png" alt="image of abdullah un noman">
      </div>
      <div class="col-md-6 col-lg-7 order-md-1">
      <div id="about" class="about">
        <p>Hey, I’m</p>
        <h1 class="font-weight-bold">Abdullah Un Noman<span class="dot-color">.</span></h1>
        <p class="font-weight-normal about-pp">I’m an experienced <strong>Product Designer</strong> and <b>Team Player</b> with Bachelor degree in <b>Computer Science</b>. Last <b>Five Years</b> I’ve been working on dozens of <b>website design, Mobile App</b> and <b>WebApp</b> projects and many of them are successful nowadays.</p>
        <p class="nav-item"><a href="{{route('story')}}" class="btn about-btn">Read My Story <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </svg></a></p>
      </div>   
    </div> 
    
    </div>

  </main>    
</div>
<section id="bg2">
  <div class="position-relative overflow-hidden  p-md-5 m-md-3 text-left bg-dark1">
    <div  class="product-device d-md-block"><img loading="lazy" class="img-bw" src="static/image/bg.1.png" alt="Working Hard, Playing Hard, Connecting Hard image"></div>
    <div class="container">
      <div class="col-md-5 bg1-p ">
        <div data-aos="fade-up" data-aos-anchor=".other-element" data-aos-mirror="true" data-aos-duration="1500">
          <div class="card bg1-z other-element">
            <h2 class="display-4 font-weight-bold text-dark p-c-4">Working Hard, Playing Hard, Connecting Hard<span>.</span></h2>
            <p class="lead font-weight-normal text-dark p-c-5">My work stands out thanks to constant collaboration. Let's have a talk or a virtual coffee, Let's connect.</p>
            <p class="text-dark p-c-6 font-weight-bold"><b>Check My Online Profile</b></p>
            <div class="p-c-7">
              <a href="https://dribbble.com/unnoman" rel="noopener" target="_blank"><img loading="lazy" alt="logo of dribbble"  id="dr" class="rounded-circle bg1-icon pointer" width="60" height="60" src="static/image/dr.svg"></a>
              <a href="https://www.upwork.com/fl/abdullahunn2" rel="noopener"  target="_blank"><img loading="lazy" alt="logo of upwork" id="up" class="rounded-circle bg1-icon pointer" width="60" height="60" src="static/image/up.svg"></a>
              <a href="https://linkedin.com/in/abdullah-un-noman" rel="noopener"  target="_blank"><img loading="lazy" alt="logo of inlab" id="in" class="rounded-circle bg1-icon pointer" width="60" height="60" src="static/image/in.svg"></a>
              <a href="https://www.fiverr.com/noman0007" rel="noopener"  target="_blank"><img loading="lazy" alt="logo of fiverr" id="fi" class="rounded-circle bg1-icon pointer" width="60" height="60" src="static/image/fi.svg"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="projects">
  <div class="container">
    <div class="projects">
      <div class="row">
        @foreach($posts as $i=>$post)	
          <div class="<?php if($i %4==0) {echo'col-lg-4 ';}elseif ($i%4==1) {echo'col-lg-8 ';}elseif($i%4==2){echo'col-lg-8 ';}else{echo'col-lg-4 ';} ?>">				
          <a rel="noopener" target="_blank"  href="{{$post->post->link}}" class="project ">
              <img loading="lazy" class="img" src="storage/image/post/{{$post->post->image}}" alt="{!! $post->post->title !!} <?php if($post->post->title ==null){echo "image of webovio";}?>">
              <h3>{!! $post->post->title !!}</h3>
            </a>
          </div>
        @endforeach
      </div>
      <div class="text-center project-btn">
        <a rel="noopener" target="_blank"  href="https://dribbble.com/unnoman" class="button_slide slide_right btn font-weight-bold">
          <svg style=" width=20px; height:20px;" class="svg-inline--fa fa-dribbble fa-w-16 bb" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="dribbble" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg><!-- <i class="fab fa-dribbble"></i> --> More on Dribbble
        </a>
      </div>
    </div>
  </div>
</section>
<br><br><br><br><br><br>
<section id="skillset">
  <div class="position-relative overflow-hidden  p-md-5 m-md-3 text-left bg-dark1">
    <div class="product-device2  d-md-block">
      <img loading="lazy" class="img-bw" src="static/image/bg2.1.png" alt="skillset image">
    </div>
    <div class="container">
      <div class="col-md-10 bg1-p bg2-m">
        <div data-aos="fade-up"   >
          <div class="card bg1-z other-e">
            <h3 class="display-4 text-dark p-c-4 font-weight-bold">Skillset<span class="dot-color">.</span></h3>
            <div class="row">
              <div class="col-md-4 skill-m-1">
                <h4 class="lead font-weight-bold text-dark " id="skill-m-h-s">UX/UI Design</h4>
                <p class="font-weight-normal text-dark " id="skill-m-p-s">Creating engaging product and brand stories, supported by the latest UX strategies.</p>
              </div>
              <div class="col-md-4 skill-m-2">
                <h4 class="lead font-weight-bold text-dark skill-m-h">Website & Mobile Apps</h4>
                <p class="font-weight-normal text-dark skill-m-p">Beautiful and smart UI interfaces and user experiences at the palm of your hand.</p>
              </div>
              <div class="col-md-4 skill-m-2">
                <h4 class="lead font-weight-bold text-dark skill-m-h">Brand Identity</h4>
                <p class="font-weight-normal text-dark skill-m-p " id="skill-m-l-s">I create beautiful, thoughtful and scalable visual concepts for products and companies.</p>
              </div>
            </div>                
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <br>
<section id="slider">
  <div class="container">
    <div class="testimonial">
      <div class="row justify-content-center">
        <div class="col-lg-10 ">
          <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators row justify-content-md-end ">
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
                    <img loading="lazy" class="rounded-circle circle" height="60" width="60" src="storage/image/feedback/{{ $post->image}}" alt="{{$post->name}}">
                      </div>
                    <div class="col-md-3 col-6 mt-2">
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
    <div class="product-device3 img-bw  d-md-block"><img  src="static/image/bg3.png" alt="last bg image"></div>
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

@endsection