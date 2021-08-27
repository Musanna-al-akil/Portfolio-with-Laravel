@extends('layouts.dashboardApp')

@section('content')
<div class="content">
    <div class="row ">
        <div class="col-md-4">
            <a class=" card btn btn-primary bg-success" href="{{route('Educations')}}">
                    <h3 class="text-center m-5">Edtuction View</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn btn-primary bg-primary" href="{{route('createEducation')}}">
                    <h3 class="text-center m-5">Edtuction Create</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-warning" href="{{route('DesignTalks')}}">
                    <h3 class="text-center m-5">DesignTalks view</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-light" href="{{route('createDesignTalk')}}">
                    <h3 class="text-center m-5 text-dark">DesignTalks Create</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-warning" href="{{route('Accordings')}}">
                    <h3 class="text-center m-5">According view</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-light" href="{{route('createAccording')}}">
                    <h3 class="text-center m-5 text-dark">According Create</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-secondary" href="{{route('Distinctions')}}">
                    <h3 class="text-center m-5">DesignTalks Create</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-secondary" href="{{route('resourcePosts')}}">
                    <h3 class="text-center m-5">Resource view</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-secondary" href="{{route('createResource')}}">
                    <h3 class="text-center m-5">Resource Create</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a class=" card btn  btn-primary bg-secondary" href="{{route('tag.index')}}">
                    <h3 class="text-center m-5">Tag View</h3>
            </a>
        </div>
        
    </div>
</div>
@endsection