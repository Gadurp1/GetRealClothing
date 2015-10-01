@extends('welcome')
@section('content')
    
@if($errors->any())
  <script>
    swal({   title: 'You Missed Something!',   text: '@foreach($errors->all() as $error) {{$error}}  @endforeach',   type: 'error',   confirmButtonText: 'Cool' });   
</script>  

@endif

<script>
    $(document).ready(function() {  
        $('#summernote').summernote({
            height: 500
        });
    });
</script>

    <!-- Header section start -->
    <section id="home" class="module-small home-parralax bg-dark-30" data-background="../assets/images/'">
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

     <form action="photo"
      class="dropzone"
      id="my-awesome-dropzone">

{{csrf_field()}}
</form> 
{!! Form::open() !!}
    <!-- Post single start -->
    <section class="module-small">
      <div class="container">
        <div class="col-md-8 col-md-offset-2" >
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
            {!! Form::text('video_url',null,['class'=> 'form-control']) !!}
    	<hr> 	

        {!! Form::label('name','name') !!}
	      {!! Form::text('name',null,['class'=> 'form-control']) !!}

      <hr>



	        {!! Form::label('slug','slug') !!}
	        {!! Form::text('slug',null,['class'=> 'form-control']) !!}

   

        <hr>

            {!! Form::label('Content','Content') !!}

            {!! Form::textarea('content',null,['class'=> 'html-editor form-control ','id' => 'summernote']) !!}

        <hr>
        	{!! Form::label('Tags','Tags') !!}
	        {!! Form::text('title',null,['class'=> 'form-control']) !!}

        <hr>


	        {!! Form::label('status','Status') !!}
            {!! Form::select('status', 
                [
                    'publish' => 'publish', 
                    'draft' => 'draft', 

                ],null, ['class'=>' selectpicker form-control']); 
          !!}

<hr>



<form action="photo"
      class="dropzone"
      id="my-awesome-dropzone">

{{csrf_field()}}
</form>
 <button type="submit" class="btn btn-success  btn-block col-md-12">Save New Post!</button>
    <hr>

<br></br>


 </div>
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

    <!-- Divider -->
  @stop