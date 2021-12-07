<style>
input[type="radio"]{
  margin: 0 10px 0 10px;
}

    </style>

@extends('layouts.dashboard')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Add New Department</h4>
    
        </div>
    </div>
    
    <div class="panel panel-default w-auto">
        <div class="panel-heading">
          Departments
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
 
	
        <form action="/add_new_department" method = "POST" name="student_form" enctype="multipart/form-data">
                @csrf

		
			
			
			
			<div style=" margin-left: 10px;">
                  	
                     
                <div ><h2  style="text-decoration: underline; color:green; margin-top: 0;">Add Department</h2>
                  <div  class="row">
                          <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                          
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="name_div">
                                      <label class="control-table" for="name">name Name</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="Enter department name" value="{{$name ?? ''}}">
                                      <div id="name_error"></div>
                              </div>	
                        </div>
  
                        
  
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="abbr_div">
                                      <label class="control-table" for="abbr">Abbreviation</label>
                                      <input type="text" name="abbr" id="abbr" class="form-control" placeholder="Enter Unit abbr" value="{{$abbr ?? ''}}">
                                      <div id="score_error"></div>
                              </div>	
                        </div>

                        
                                      
                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right" >
			<input type="submit" class="btn btn-success" value="Submit"></input>
			
                        </div>
                        
                </div>
                            
    
            
			
			</div>
			<div class="col-md-3"></div>
		</div>
	
</form>
  </div>
    

    
@endsection