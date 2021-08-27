@extends('layouts.dashboardApp')

@section('title') Tags Edit | Admin| @endsection

@section('content')

  
	<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="card p-4">
					<div class="card-header bg-light">
							<h1>Edit Tags</h1>
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
                                        <th>Name</th>
                                        
                                        <th>Created At</th>
                                        <th>Action</th>
										
									</tr>
									</thead>
									<tbody><form method="POST" action="{{route('TagUpdate')}}">@csrf
										@foreach($tags as $tag)
										<tr>
										
										<td class="text-nowrap"><a >{{$tag->id}}</a></td>
										
										<td><input name="name{{$tag->id}}" value="{{$tag->tag_name}}"></td>
                                      
                                        <td>{{\Carbon\Carbon::parse($tag->created_at)->diffForHumans()}}</td>
										<td>
                                         <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment{{$tag->id}}').submit()">X</button> 
										</td>
                                           
                                            
										
										@endforeach

										<button class="btn btn-primary" type="submit">Change Tag</button>
										</form>
										@foreach($tags as $tag)
											<form id="deleteComment{{$tag->id}}" action="{{route('TagDestroy',$tag->id)}}" method="POST">
												@csrf
											</form>
										
										@endforeach
										</tr>
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card p-4">
					<div class="well">
                        <form method="POST"  action="{{route('tag.store')}}">@csrf
                        <h3>Add Category</h3>
                        <label for="normal-input" class="form-control-label"><h5>Name</h5></label>
                                    <input id="normal-input" class="form-control" name="name" value="" placeholder="name">

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