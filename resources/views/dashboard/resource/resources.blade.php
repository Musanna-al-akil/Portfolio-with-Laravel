@extends('layouts.dashboardApp')

@section('title')Posts | Author |omg-blog @endsection

@section('content')

      <div class="content">
			
				<div class="card">
					<div >
                            
						<div class="card-header bg-light">
                                
							<h1>Author Posts</h1>
						</div>
                        @if(Session::has('success'))
                        <div class="alert alert-primary">{{Session::get('success')}}</div>
                            @endif
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
									<tr>
										<th>ID</th>
										<th>Post Title</th>
										<th>Create At</th>
                                        <th>Update At</th>
										<th>Action on Post</th>
									</tr>
									</thead>
									<tbody>
										@foreach($resources as $resource)
										<tr>
										<td>{{$resource->id}}.</td>
										<td class=""><a href="{{route('resourceShow',[$resource->slug])}}">{{$resource->title}}</a></td>
										<td>{{ \Carbon\Carbon::parse($resource->created_at)->diffForHumans()}}</td>
                                        <td>{{ \Carbon\Carbon::parse($resource->updated_at)->diffForHumans()}}</td>
                                        <td>
                                                
                                          
                                        <a href="{{route('editResources',$resource->id)}}" class="btn btn-warning"><i class="icon icon-pencil"></i></a>
                                        
                                        <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deletePostModal-{{$resource->id}}">X</a>
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
						<div class="modal-body">
						  <h4>{{$resource->title}}</h4>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">No,Keep It</button>
						  <form  method="POST" id="ab-{{$resource->id}}"action="{{route('deleteResource',[$resource->id])}}">@csrf  
						  <button type="submit" class="btn btn-primary" onclick="document.getElementById('ab-{{$resource->id}}').submit()">Delete It</button>
						</form></div>
					  </div>
					</div>
				  </div>
				  @endforeach

@endsection