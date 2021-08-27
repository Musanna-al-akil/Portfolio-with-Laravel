@extends('layouts.dashboardApp')

@section('title') Admin|Posts @endsection

@section('content')

      <div class="content">
			
				<div class="card">
					<div >
                            
						<div class="card-header bg-light">
                                <div class="row">
                                <div class="col-6">
							<h4><b>Educations</b></h4>
										  </div>
										  <div class="col-6">
							<p class="text-right"><a href="{{route('createDistinction')}}" ><b class="btn bg-info">Create Question</b></a></p>
                                </div></div>
						</div>
                        @if(Session::has('success'))
                        <div class="alert alert-primary">{{Session::get('success')}}</div>
                            @endif
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
									<tr>
										
										<th>Post Title</th>
										
										<th>Create At</th>
                                       
                                       
										<th>Action on Post</th>
									</tr>
									</thead>
									<tbody>
										@foreach($distinctions as $distinction)
										<tr>
										
										<td class=""><a href="">{!! Str::words($distinction->award,7)!!}</a></td>
										
										<td>{{ \Carbon\Carbon::parse($distinction->created_at)->diffForHumans()}}</td>
                                        
                                       
                                       <td>
                                                <form style="display:none;" method="POST" id="ab-{{$distinction->id}}"action="{{route('DistinctionDelete',$distinction->id)}}">@csrf</form> 
                                        <a href="{{route('EditDistinction',$distinction->id)}}" class="btn btn-warning"><i class="icon icon-pencil"></i></a>
                                        
                                        <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deletePostModal-{{$distinction->id}}">X</a>
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
			@foreach($distinctions as $distinction)
			
		<div class="modal fade" id="deletePostModal-{{$distinction->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLabel">Are you sure! you want to delete</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
						 
						  <p> {!! Str::words($distinction->question,7)!!}</p>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">No,Keep It</button>
						  <form  method="POST" id="ab-{{$distinction->id}}"action="{{route('DistinctionDelete',$distinction->id)}}">@csrf  
						  <button type="submit" class="btn btn-primary" onclick="document.getElementById('ab-{{$distinction->id}}').submit()">Delete It</button>
						</form></div>
					  </div>
					</div>
				  </div>
				  @endforeach
			
@endsection