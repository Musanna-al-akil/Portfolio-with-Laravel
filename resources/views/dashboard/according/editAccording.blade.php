@extends('layouts.dashboardApp')

@section('title')Edit According| Abdullah Un Noman | UI/UX Expert @endsection

@section('content')
<br>

<div class="content">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                           <h3 class="text-dark">Edit According</h3>
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
                    <form method="POST" action="{{route('AccordingEditPosts',$according->id)}}" enctype = 'multipart/form-data'>
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5 class="text-dark">Job Title :</h5></label>
                                    <input id="normal-input" class="form-control" name="job_title" value="{{$according->job_title}}" placeholder="Job Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5 class="text-dark">Job Office :</h5></label>
                                        <input id="normal-input" class="form-control" name="job_office" value="{{$according->job_office}}" placeholder="Job Office">
                                    </div>
                                </div>

                                
                            </div>
                             

                            <div class="row mt-4">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="placeholder-input" class="form-control-label"><h5 class="text-dark">Job Discription :</h5></label>
                                    <textarea class="form-control" cols="30" name="discription" id="editor" placeholder="Discription of your exprience"  rows="10">{{$according->discription}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label"><h5 class="text-dark">Join date:</h5></label>
                                <input id="normal-input" type="date" class="form-control" name="join_date" value="{{ \Carbon\Carbon::parse($according->join_date)->format('Y-m-d')}}">
                            </div>
                                </div>
                                <div class="col-md-5">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label"><h5 class="text-dark">Resign date:<small>(if you not resign the job don't fill this input)</small></h5></label>
                                <input id="normal-input" class="form-control" type="date" name="resign_date" value="{{ \Carbon\Carbon::parse($according->resign_date)->format('Y-m-d')}}">
                            </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5 class="text-dark">Add Image :</h5></label>
                                        <input class="form-control-file" type="file"  name="image" placeholder="Image" >
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
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
    @endsection