@extends('layouts.dashboardApp')

@section('title') Admin|Posts @endsection

@section('content')

      <div class="content">
			
				<div class="card">
					
                         
						<div class="card-header bg-light">
							<div class="row" >
                              <div class="col-md-9">   
							<h5>Accordings</h5>
							</div> 
							<div class="col-md-3">   
							<a class="btn btn-warning" href="{{route('createAccording')}}">Create According</a>
							</div> 
							</div>  
						</div>
                        @if(Session::has('success'))
                        <div class="alert alert-primary">{{Session::get('success')}}</div>
                            @endif
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
									<tr>
										
										<th>Client Name</th>
										<th>Title</th>
										<th>Create At</th>
										<th>Action on Post</th>
									</tr>
									</thead>
									<tbody>
										@foreach($accordings as $according)
										<tr>
										<td class=""><a >{{Str::words($according->job_title,7)}}</a></td>
										<td class=""><a >{{Str::words($according->join_date,7)}}</a></td>
										
										<td>{{ \Carbon\Carbon::parse($according->created_at)->diffForHumans()}}</td>
                                        
                                       
                                        <td>
                                                <form style="display:none;" method="POST" id="ab-{{$according->id}}">@csrf</form> 
                                        <a href="{{route('EditAccordings',$according->id)}}" class="btn btn-warning"><i class="icon icon-pencil"></i></a>
                                        
                                        <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deletePostModal-{{$according->id}}">X</a>
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
			@foreach($accordings as $according)
			
		<div class="modal fade" id="deletePostModal-{{$according->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
						 
						  <p>by {{$according->title}}</p>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">No,Keep It</button>
						  <form  method="POST" id="ab-{{$according->id}}"action="{{route('AccordingDelete',$according->id)}}">@csrf  
						  <button type="submit" class="btn btn-primary" onclick="document.getElementById('ab-{{$according->id}}').submit()">Delete It</button>
						</form></div>
					  </div>
					</div>
				  </div>
				  @endforeach
@endsection