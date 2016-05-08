@extends('layouts.master', ['title' => $title])

@section('content')

<div class="container-fluid">
  <div class="row">  
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title">
            {{ $title }}'s Information      
            <a class="icon-link pull-right" href="{{ URL::route('remove_race', $race['id']) }}">
             <i class="fa fa-trash-o text-danger" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Remove"></i>
           </a>   
         </h1>
       </div><!--end panel heading -->
       <div class="panel-body">
        <div class="row">
          <div class="col-sm-12">
            <div id="success">
              @if($validate == true)
              <div class="alert alert-success" role="alert">
                Success!            
              </div><!--end alert-->
              @endif
            </div>
            <div id="rsvErrors" class="alert alert-danger"></div>
          </div><!--end col-->
        </div><!--end row-->           
        <form id="race" class="form-horizontal" method="post">  
          @include('forms.race')
        </div><!--end panel body-->
        @include('includes.form_controls')
      </form>
    </div><!--end panel-->
  </div><!--end col-->
</div><!--end row-->
</div><!--end container-->



@endsection