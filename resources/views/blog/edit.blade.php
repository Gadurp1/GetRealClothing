@extends('welcome')    
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Drag Images Here</h4>
      </div>
      <div class="modal-body">
       <form action="photo"
      class="dropzone"
      id="my-awesome-dropzone">

{{csrf_field()}}
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@section('content')

@if($errors->any())
  <script>
    swal({   title: 'You Missed Something!',   text: '@foreach($errors->all() as $error) {{$error}}  @endforeach',   type: 'error',   confirmButtonText: 'Cool' });   
</script>  





@endif


    <!-- Header section start -->
    <section id="home" class="module-small home-parralax bg-dark-30" data-background="{{asset($blog->image)}}">
      <div class="container">

        <div class="row">

          <div class="col-sm-6 col-sm-offset-3">
            
            <h1 class="module-title font-alt"><strong>New Post</strong></h1>
            <div class="module-subtitle font-serif mb-0">
              Fill out the info below to get things started...  Shit simple dooohhhh.
            </div>

          </div>

        </div><!-- .row -->

      </div>
    </section>
    {!! Form::model($blog,['method'=>'PATCH','action' => ['BlogController@update',$blog->id]]) !!}


    <!-- Post single start -->
    <section class="module-small">
      <div class="container">
        <div class="col-md-8 col-md-offset-2" >
           <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info col-md-12 btn-lg" data-toggle="modal" data-target="#myModal">Add Image Gallery</button>

<hr>
       {!! Form::label('category','Category') !!}
            {!! Form::select('CatID', 
                [
                    '1' => 'Skateboarding', 
                    '2' => 'Music',
                   '3' => 'Events',


                ],null, ['class'=>' selectpicker form-control']); 
            !!}
    	<hr> 

            {!! Form::label('Youtube Link','YouTube Link') !!}
            {!! Form::text('video_url',$blog->video_url,['class'=> 'form-control']) !!}

    	<hr> 	

           	 {!! Form::label('name','name') !!}
	        {!! Form::text('name',$blog->title,['class'=> 'form-control']) !!}

        <hr>

	        {!! Form::label('slug','slug') !!}
	        {!! Form::text('slug',$blog->slug,['class'=> 'form-control']) !!}

   

        <hr>

            {!! Form::label('Content','Content') !!}

            {!! Form::textarea('content',$blog->content,['id' => 'summernote']) !!}

        <hr>
        	{!! Form::label('Tags','Tags') !!}
	        {!! Form::text('title',null,['class'=> 'form-control']) !!}

        <hr>


	    {!! Form::label('status','Status') !!}
            {!! Form::select('status', 
                [
                    'publish' => 'publish', 
                    'draft' => 'draft', 

                ],$blog->status, ['class'=>' selectpicker form-control']); 
            !!}
 <hr>
 <button type="submit" class="btn btn-success  btn-block col-md-12">Save New Post!</button>
    <hr>

<br></br>


     <form action="photo"
      class="dropzone"
      id="my-awesome-dropzone">

{{csrf_field()}}
</form>   </div>
    </div>
</div>

<div class="container">


<script src="{{ asset('assets/js/summernote.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script> 
    {!! Form::close() !!}
        </div><!-- .row -->
  
      </div>
    </div>
    <!-- Widgets end -->
  
    <!-- Divider -->
    <hr class="divider-d">   
<script>
    $(document).ready(function() {  
        $('#summernote').summernote({
            height: 500
        });
    });
</script>
    <!-- Divider -->
  @stop
