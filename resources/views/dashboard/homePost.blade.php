@extends('layouts.dashboardApp')

@section('title') Home Posts Setting @endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">
                <div class="card p-4">
                <div class="card-header bg-light">
                        <h1>Edit Home Posts </h1>
                    </div>
                     @if(Session::has('success'))
                    <div class="alert alert-primary">{{Session::get('success')}}</div> @endif
                     @if($errors->any())
                    <div >
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">             
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    
                                    <th>Id</th>
                                    <th>Post Id</th>
                                    
                                    <th>Name</th>
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <form method="POST" action="{{route('homePostUpdate')}}">@csrf
                                    @foreach($posts as $c)
                                    <tr>
                                    
                                    <td class="text-nowrap"><a >{{$c->id}}</a></td>
                                    
                                    <td><input  style="width: 50px;" name="name{{$c->id}}" value="{{$c->post_id}}"></td>
                                  
                                    <td>{!! $c->post->title !!}</td>
                                    <td>
                                     <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment{{$c->id}}').submit()">X</button> 
                                    </td>
                                    </tr>
                                    @endforeach
                                        <button class="btn btn-primary" type="submit">Change home posts</button>
                                        
                                    </form>
                                    @foreach($posts as $tag)
                                        <form id="deleteComment{{$tag->id}}" action="{{route('homePostDelete',$tag->id)}}" method="POST">
                                            @csrf
                                        </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4">
                <div class="well">
                    <form method="POST"  action="{{route('homePostCreate')}}">@csrf
                    <h3>Add Home Post</h3>
                    <label for="normal-input" class="form-control-label"><h5>Type Id</h5></label>
                                <input id="normal-input" class="form-control" name="id" value="" placeholder="id">
                        <br>
                                <button class="btn btn-success" type="submit">Create </button>
                                </form>
                            </div>
                    </div>
                </div>        
            </div>
        </div>   
    </div>
</div>
@endsection
