@extends('layouts.master')

@section('title', 'Add Race')

@section('content')
<div class="page-header"><h1>Add Race <small>New Records</small></h1></div>

<form id="add-race" class="form-horizontal" method="post">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
       <div class="panel-heading">
        <h4 class="panel-title">Race</h4>
      </div>
      <div class="panel-body">
       <div class="form-group">
        <label for="race-name" class="col-sm-3 control-label">Race Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="name" placeholder="Belmont Stakes">
        </div>
      </div><!--end race-name-->

      <div class="form-group">
        <label for="date" class="col-sm-3 control-label">Date</label>
        <div class="col-sm-9">
          <div class="input-group date" data-provide="datepicker">
            <input type="text" name="ran_dt" class="datepicker form-control">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
        </div>
      </div><!--end date-->

      <div class="form-group">
        <label for="surface" class="col-sm-3 control-label">Surface</label>
        <div class="col-sm-9">             
          <label class="radio-inline">
            <input type="radio" name="surface" id="open-level" value="dirt">
            Dirt
          </label>
          <label class="radio-inline">
            <input type="radio" name="surface" id="turf" value="turf" checked>
            Turf
          </label>  
        </label>              
      </div>
    </div><!--end surface-->          

    <div class="form-group">
      <label for="distance" class="col-sm-3 control-label">Distance</label>            
      <div class="col-sm-9"> 
        <div class="input-group">
          <input type="text" name="distance" class="form-control" placeholder="12">
          <span class="input-group-addon">Furlongs</span>
        </div> 
      </div> 
    </div><!--end distance-->


    <div class="form-group">
      <label for="grade" class="col-sm-2 control-label">Grade</label>
      <div class="col-sm-10">
        <select name="grade" class="form-control select">
          <option></option>
          @foreach ($domain['grades'] as $grade)          
          <option value="{{$grade['grade']}}">{{$grade['grade']}}</option>
          @endforeach
        </select>
      </div>
    </div><!--end grade-->    

  </div><!--end panel-body-->
</div><!--end panel-->


<div class="pull-right">    
 <button type="submit" class="btn-lg btn btn-primary">Add</button>      
</div>
</div><!--end col-->
</div><!--end row-->






</form>   



@endsection
