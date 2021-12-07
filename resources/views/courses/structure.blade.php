<style>
input[type="radio"]{
  margin: 0 10px 0 10px;
}

    </style>

@extends('layouts.dashboard')

@section('content')


<div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Course structure</h4>
    
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
 
	
        <form action="{{ route('submit.structure')}}" method = "POST" name="student_form" enctype="multipart/form-data">
                @csrf

		
			
			
			
			<div style=" margin-left: 10px;">
                  	
                     
                <div ><h2  style="margin-top: 0;">{{ $name }}</h2>
                  
                          <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                          <input type="hidden" name="course_id" value="{{$id}}">
                          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <div class="form-group" id="structure_div">
                                      <label class="control-table" for="structure">Structure Details</label>
                                      <textarea name="structure" class="form-control" placeholder="Enter Course structure" id="structure" cols="30" rows="5" value="{{$structure ?? ''}}"></textarea>
                                      <div id="structure_error"></div>
                              </div>	
                        </div>
  
                    </div>                 
                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right" >
			<input type="submit" class="btn btn-success" value="Proceed to Units" onclick="return validateStudent()"></input>
			
                        </div>
                        
               
                            
        </div>

            
			
			
			
		
</form>
	

           </div>
    

    
@endsection