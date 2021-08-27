@extends('layouts.dashboardApp')

@section('title')New Post | Abdullah Un Noman | UI/UX Expert @endsection

@section('content')
<br>

<div class="content">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                           <h3 class="text-dark">New Award Input</h3>
                        </div>

                        @if(Session::has('success'))
                    <div class="alert alert-primary">{{Session::get('success')}}</div>
                        @endif

                        @if($errors->any())
                        <div >
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form method="POST" action="{{route('createDistinctionSubmit')}}" enctype = 'multipart/form-data'>
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5 class="text-dark">Award Name :</h5></label>
                                        <input id="normal-input" class="form-control" name="award" placeholder="Award Name here">
                                    </div>
                                </div>            
                            </div>
                             

                            <div class="row mt-4">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="placeholder-input" class="form-control-label"><h5 class="text-dark">Place Name:</h5></label>
                                        <textarea class="form-control" cols="20"  name="place" id="editor" placeholder="Place name"  rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5 class="text-dark">Awarded Date : </h5></label>
                                        <input type="date" id="normal-input" class="form-control" name="date" placeholder="2013-2017">
                                    </div>
                                </div>            
                            </div>
                            
                            <button class="btn btn-success" type="submit">Create Post</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        
</div>
@endsection
@section('jsd')
<script src="https://cdn.jsdelivr.net/npm/ckeditor5-build-classic-with-alignment-underline-smallcaps@1.0.0/build/ckeditor.min.js"></script>
<script>ClassicEditor
    .create( document.querySelector( '#editor' ), {
				
				
				
				
			} )
			.catch( error => {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: 2ktte3oxf21f-ncpei71nr563' );
				console.error( error );
			} );
</script>
    @endsection