<style>
input[type="radio"]{
  margin: 0 10px 0 10px;
}

    </style>

@extends('layouts.dashboard')

@section('content')


<div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Course Registration</h4>

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
        <form action="/add_new_course" method = "POST" name="student_form" enctype="multipart/form-data">
                @csrf
<div >
	<div >

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-1"></div>

			<div class=" col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
			<div style=" margin-left: 10px;">


                <div ><h2  style="text-decoration: underline; color:green; margin-top: 0;">Course Details</h2>
                  <div  class="row">
                          <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="name_div">
                                      <label class="control-table" for="name">Course Name</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="Enter Course name" value="{{$name ?? ''}}">
                                      <div id="name_error"></div>
                              </div>
                        </div>

                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-group" id="department_div">
                                        <label for="department">Department</label>
                                        <select id="department" name="department" class="form-control">
                                        @foreach ($departments as $department)
                                        <option value="{{ $department->name }}">{{ $department->name }}</option>
                                        @endforeach
                                        </select>
                                        <div id="department_error"></div>
                                    </div>

                        </div>

                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                              <div class="form-group" id="hod_div">
                                      <label class="control-table" for="hod">HOD name</label>
                                      <input type="text" name="hod" id="hod" class="form-control" placeholder="Enter HOD name" value="{{$hod ?? ''}}">
                                      <div id="hod_error"></div>
                              </div>
                        </div>

                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-group" id="duration_div">
                                        <label class="control-table" for="duration">Duration</label>
                                        <input type="number" name="duration" id="duration" class="form-control" placeholder="Course Period" value="{{$duration ?? ''}}">
                                        <div id="duration_error"></div>
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
                        <div class="form-group">
                                                <label for="image" >Upload Display Image</label><br>
                                                <input type="file" name="image" id="image"  />

                                        </div>
                                        <div id="image_error"></div>

                        </div>








                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right" >
			<input type="submit" class="btn btn-success" value="Next" onclick="return validateStudent()">

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
