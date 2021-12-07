<style>
input[type="radio"]{
  margin: 0 10px 0 10px;
}

    </style>

@extends('layouts.dashboard')

@section('content')


<div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Course Details</h4>
    
        </div>
    </div>
    
    <div class="panel panel-default w-auto">
        <div class="panel-heading">
         Course details
        </div>
          @csrf
           <div class="panel-body">
            


    </div> 
    @if (count($errors) > 0)
              <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                         @endforeach
                    </ul>
             </div>
        @endif
 
	<div class="row">
        <form action="{{ route('submit.details')}}" method = "POST" name="student_form" enctype="multipart/form-data">
                @csrf
<div >
	<div >
		
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-1"></div>
			
			<div class=" col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
			<div style=" margin-left: 10px;">
                  	
                     
                <div ><h2  style="text-decoration: underline; margin-top: 0;">{{ $name }}</h2>
                  <div  class="row">
                          <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                          <input type="hidden" name="course_id" value="{{$id}}">
                          <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                          <input type="hidden" name="course_id" value="{{$id}}">
                          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <div class="form-group" id="datail_div">
                                      <label class="control-table" for="detail">Course Details</label>
                                      <textarea name="detail" class="form-control" placeholder="Enter Course detail" id="detail" cols="30" rows="5" value="{{$detail ?? ''}}"></textarea>
                                      <div id="detail_error"></div>
                              </div>	
                        </div>
  
                     
  
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-group" id="qualification_div">
                                        <label for="qualification">Study Option</label>
                                        <input type="text" name="qualification" id="qualification" class="form-control" value="{{$qualification ?? ''}}">
                                        <div id="qualification_error"></div>
                                    </div>
                
                        </div>
  
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="length_div">
                                      <label class="control-table" for="length">length</label>
                                      <input type="number" name="length" id="length" class="form-control" placeholder="Enter length name" value="{{$length ?? ''}}">
                                      <div id="length_error"></div>
                              </div>	
                        </div>

                       
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-group" id="time_div">
                                        <label for="time">Time</label>
                                        <select id="time" name="time" class="form-control">
                                                <option value="">Select time</option>
                                            <option @if($time ?? '' == 'Years') selected @endif>Years</option>
                                             <option @if($time ?? '' == 'month') selected @endif>Months</option>
                                        </select>
                                        <div id="time_error"></div>
                                    </div>
                            
                        </div>

                        

                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-group" id="code_div">
                                        <label for="code">Code</label>
                                        <input type="text" id="code" class="form-control" name="code" value="{{$code ?? ''}}">
                                        <div id="code_error"></div>
                                    </div>
                            
                        </div>   
                                      
                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right" >
			<input type="submit" class="btn btn-success" value="Proceed to Structure" onclick="return validateStudent()"></input>
			
                        </div>
                        
                </div>
                            
        </div>
</div>
                  </div>
            
			
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</form>
	</div>

           </div>
    

    
@endsection