
{!! Form::hidden('user_id',3) !!}
<div class="col-md-3">   
    <div class="card">
        <div class="card-body card-padding">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="card">
        <div class="card-body card-padding"> 
            {!! Form::select('type', 
                [
                    'sales' => 'My Templates', 
                    'sales' => 'Sales', 
                    'ops' => 'Operations',
                    'conference'=>'Conferences'

                ],null, ['class'=>' selectpicker form-control']); 
            !!}
        </div>
    </div>
    <button type="submit" class="btn btn-success  btn-sm col-md-12">{{$submitButtonText}}</button>
</div>
<div class="col-md-9">
    <div class="card">
        <div class="card-body card-padding">
            {!! Form::label('Subject','Subject') !!}
            {!! Form::text('subject',null,['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="card">
        <div class="card-body card-padding">
            <p class="f-500 c-black m-b-20">Email Body</p>
                {!! Form::textarea('content',null,['class'=> 'html-editor form-control ']) !!}
        </div>
    </div>
</div>
