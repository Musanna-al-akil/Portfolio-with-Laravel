@extends('layouts.dashboardApp')

@section('title') Massage|admin @endsection

@section('content')
<br>

<div class="content">
            
                <div class="card">
                    <div >
                            
                        <div class="card-header bg-light">
                                
                            <h5>Author Posts</h5>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        
                                        <th>content</th>
                                        <th>Create At</th>
                                       
                                        <th>Action on Post</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $post)
                                        <tr>
                                        <td>{{$post->name}}</td>
                                        <td class="text-nowrap"><a >{{$post->email}}</a></td>
                                        
                                        <td>{{$post->massage}}</td>
                                        <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                                        
                                        
                                        <td>
                                                <form style="display:none;" method="POST" id=""action="">@csrf</form> 
                                       
                                        
                                        <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deletePostModal-{{$post->id}}">X</a>
                                        </td>
                                        
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($contacts as $post)
            
        <div class="modal fade" id="deletePostModal-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         
                          <p>by {{$post->name}}</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No,Keep It</button>
                          <form  method="POST" id="ab-{{$post->id}}"action="{{route('massageDelete',$post->id)}}">@csrf  
                          <button type="submit" class="btn btn-primary" onclick="document.getElementById('ab-{{$post->id}}').submit()">Delete It</button>
                        </form></div>
                      </div>
                    </div>
                  </div>
                  @endforeach
@endsection