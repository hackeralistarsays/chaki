<style>
input[type="radio"]{
  margin: 0 10px 0 10px;
}

    </style>

@extends('layouts.dashboard')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Units</h4>
    
        </div>
    </div>
    
    <div class="panel panel-default w-auto">
        <div class="panel-heading">
          {{$name}}
        </div>
          @csrf
           
    @if (count($errors) > 0)
              <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                         @endforeach
                    </ul>
             </div>
        @endif
 
	
        <form action="{{ route('submit.units')}}" method = "POST" name="student_form" enctype="multipart/form-data">
                @csrf

		
			
			
			
			<div style=" margin-left: 10px;">
                  	
                     
                <div ><h2  style="text-decoration: underline; color:green; margin-top: 0;">Add Units</h2>
                  <div  class="row">
                          <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                          <input type="hidden" name="course_id" value="{{$id}}">
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="unit_div">
                                      <label class="control-table" for="name">Unit Name</label>
                              <input type="text" name="unit" id="unit" class="form-control" placeholder="Enter Unit unit" value="{{$unit ?? ''}}">
                                      <div id="unit_error"></div>
                              </div>	
                        </div>
  
                        
  
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="code_div">
                                      <label class="control-table" for="code">Unit Code</label>
                                      <input type="text" name="code" id="code" class="form-control" placeholder="Enter Unit code" value="{{$code ?? ''}}">
                                      <div id="code_error"></div>
                              </div>	
                        </div>

                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-group" id="cf_div">
                                        <label class="control-table" for="cf">C.F</label>
                                        <input type="text" name="cf" id="cf" class="form-control" placeholder="Unit CF" value="{{$cf ?? ''}}">
                                        <div id="cf_error"></div>
                                </div>
                            
                        </div>
                                      
                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right" >
			<input type="submit" class="btn btn-success" value="Submit Units"></input>
			
                        </div>
                        
                </div>
                            
    
            
			
			</div>
			<div class="col-md-3"></div>
		</div>
	
</form>
  </div>
    

    
@endsection