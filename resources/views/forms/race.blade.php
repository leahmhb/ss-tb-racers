@extends('layouts.master')

@section('title', 'Race')

@section('content')
<div class="page-header"><h1>{{ $action }} Race <h2><small>Racing Records</small></h2></h1></div>

<form id="race" class="form-horizontal" method="post">

  <div class="row">
    <div class="col-sm-12">
      <div id="success">
        @if($validate == true)
        <div class="alert alert-success" role="alert">
          Successful addition!
        </div><!--end alert-->
        @endif
      </div>
      <div id="rsvErrors" class="alert alert-danger"></div>
    </div><!--end col-->
  </div><!--end row-->

  <div class="row">
    <div class="col-sm-12">

      <div class="panel panel-default">
       <div class="panel-heading">
        <h4 class="panel-title">Race</h4>
      </div>
      <div class="panel-body">
       <div class="form-group">
        <input type="text" class="form-control hidden" readonly name="id" id="id" value="{{ $race['id'] }}">
        
        <label for="race-name" class="col-sm-3 control-label">
          <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
          Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" value="{{ $race['name'] }}">
          </div>
        </div><!--end race-name-->

        <div class="form-group">
          <label for="distance" class="col-sm-3 control-label">
            <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
            Distance</label>            
            <div class="col-sm-9"> 
              <div class="input-group">
                <input type="text" name="distance" class="form-control" value="{{ $race['distance'] }}">
                <span class="input-group-addon">Furlongs</span>
              </div> 
            </div> 
          </div><!--end distance-->

          <div class="form-group">
            <label for="surface" class="col-sm-3 control-label">
              <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
              Surface</label>
              <div class="col-sm-9">             
                <label class="radio-inline">
                  <input type="radio" name="surface" id="dirt" value="Dirt" @if($race['surface'] == 'Dirt') checked @endif>
                  Dirt
                </label>
                <label class="radio-inline">
                  <input type="radio" name="surface" id="turf" value="Turf" @if($race['surface'] == 'Turf') checked @endif>
                  Turf
                </label>  
              </label>              
            </div>
          </div><!--end surface-->    


          <div class="form-group">
            <label for="grade" class="col-sm-3 control-label">
              <small><span class="text-danger glyphicon glyphicon-asterisk tooltip-overflow" data-toggle="tooltip" data-placement="top" title="Required"></span></small>
              Grade</label>
              <div class="col-sm-9">
                <select name="grade" class="form-control select">
                  <option></option>
                  @foreach ($domain['grades'] as $grade)          
                  <option value="{{$grade['grade']}}"  @if($race['grade'] == $grade['grade']) selected @endif>{{$grade['grade']}}</option>
                  @endforeach
                </select>
              </div>
            </div><!--end grade-->    


            <div class="form-group">
              <label for="url" class="col-sm-3 control-label">

                URL</label>            
                <div class="col-sm-9">         
                  <input type="text" name="url" class="form-control" value="{{ $race['url'] }}">
                </div> 
              </div><!--end url-->

              <div class="form-group">
                <label for="date" class="col-sm-3 control-label">Date</label>
                <div class="col-sm-9">
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text" name="ran_dt" class="datepicker form-control" data-date-format="yyyy-mm-dd" value="{{ date('Y-m-d', strtotime($race['ran_dt']))}} ">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                  </div>
                </div>
              </div><!--end date-->

            </div><!--end panel-body-->
          </div><!--end panel-->
        </div><!--end col-->
      </div><!--end row-->



      <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
          <div class="text-center form-group panel-body"> 
            <button type="submit" class="btn-lg btn-block btn btn-default">Save</button>    
          </div>
        </div><!--end col-->
      </div><!--end row-->


    </form>   



    @endsection