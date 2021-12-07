<style>
input[type="radio"]{
  margin: 0 10px 0 10px;
}

    </style>

@extends('layouts.dashboard')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Minimum Entry Requirements</h4>
    
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
 
	
        <form action="{{ route('submit.entry')}}" method = "POST" name="student_form" enctype="multipart/form-data">
                @csrf

		
			
			
			
			<div style=" margin-left: 10px;">
                  	
                     
                <div ><h2  style="text-decoration: underline; color:green; margin-top: 0;">Add Subjects</h2>
                  <div  class="row">
                          <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                          <input type="hidden" name="course_id" value="{{$id}}">
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="subject_div">
                                      <label class="control-table" for="subject">Subject Name</label>
                              <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject subject" value="{{$subject ?? ''}}">
                                      <div id="subject_error"></div>
                              </div>	
                        </div>
  
                        
  
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="score_div">
                                      <label class="control-table" for="score">subject Score</label>
                                      <input type="text" name="score" id="score" class="form-control" placeholder="Enter score" value="{{$score ?? ''}}">
                                      <div id="score_error"></div>
                              </div>	
                        </div>

                        
                                      
                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mr-2 text-right" >
			<input type="submit" class="btn btn-primary" value="ADD"></input> <a href="" class="btn btn-success">COMPLETE</a>
			
                        </div>
                        
                </div>
                            
    
            
			
			
			<div class="col-md-3"></div>
		</div>
	
</form>
  </div>
    

    
@endsection