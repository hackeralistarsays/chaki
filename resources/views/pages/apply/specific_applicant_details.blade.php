@extends('layouts.dashboard')

@section('content')

<div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Applicant's details </h4> 
            <a href="/registrar/dashboard"><i class="fa fa-arrow-left mr-2" ></i>Back</a>

    
        </div>
    </div>
    
    
    <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#bio_data">Bio data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#roles_and_responsibilities">Address Infomation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#parents">Parents/Guardian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#teaching_classes">Documents</a>
            </li>
                 
          </ul>

        
          </div>

          <div style="margin-top: 20px;">
         
          <div class="tab-content">
                <div id="bio_data" class="tab-pane container active">
                     
                     <div class="panel panel-primary w-auto" >
                             <div class="panel-heading">
                               Applicant's bio data
                             </div>                    
                             <div class="panel-body">
                                @foreach ($bio_info as $bio)
                                <div class="row">

                                        <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                                               
                                                <img class="img-profile rounded-circle" style="width: 170px; height: 170px;" src="{{URL::asset('images/default_profile_pic.png')}}" alt="profile picture" />
                
                                               
                                               
                                        </div>
                
                                        <div class="col-xm-12 col-sm-6 col-md-8 col-lg-9 col-xl-9">
                
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12">
                                                        <table cellspacing="7" cellpadding="7">
       
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="left">Name</td>
                                                                        <td>: {{ $bio->first_name}} {{$bio->middle_name}} {{$bio->last_name}}</td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                            <td align="left"> Email address</td>
                                                                            <td>: {{$bio->email}}</td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                            <td align="left"> ID Number</td>
                                                                            <td>: {{$bio->id_number}}</td>
                                                                    </tr>
                                                        
                                                                    
                                                                    <tr>
                                                                            <td align="left"> Gender</td>
                                                                            <td>: {{$bio->gender}}</td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                            <td align="left"> Nationality</td>
                                                                            <td>: {{$bio->nationality}}</td>
                                                                    </tr>  
                                                                  
                                                                    <tr>
                                                                            <td align="left"> Date of Birth</td>
                                                                            <td>: {{$bio->date}}</td>
                                                                    </tr>
                                                        
                                                                </tbody>
                                                            </table>
                                                        @if($success->isEmpty())
                                                        <a href="{{ route('send.letter.of.offer', ['name'=>$bio->first_name,'id'=>$bio->id])}}"><button name="edit" id="{{$bio->id}}" style="margin-top: 20px; width: 7em;" class="btn btn-success">ADMIT</button></a>
                                                        <a href=""><button name="archive" id="{{$bio->id}}"  style="margin-top: 20px; width: 7em; margin-left: 30px;"  class="btn btn-danger">REJECT</button></a>
                                                        @else

                                                        @foreach($success as $su)
                                                        @if($su->state == 'Pending')
                                                        <a href=""><button name="state" id="{{$su->id}}"  style="margin-top: 20px; width: 7em; margin-left: 30px;"  class="btn btn-warning">{{$su->state}}</button></a>
                                                        @else
                                                        <a href=""><button name="state" id="{{$su->id}}"  style="margin-top: 20px; width: 7em; margin-left: 30px;"  class="btn btn-success">{{$su->state}}</button></a>
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                        
                                                        
                                                        
                                                            
                                                        
                                                           
                                                </div>
                                            </div>

                                        </div>

                                </div>
                                @endforeach
                             </div>
                     </div>
                </div>
          


                <div id="roles_and_responsibilities" class="tab-pane container fade">
                    <?php $i = 1?>                     

                   @foreach ($address_info as $address)
                   <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="panel panel-primary w-auto" >
                                        <div class="panel-heading">
                                         Address Information
                                        </div>                    
                                        <div class="panel-body">
                                                <table class="table table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl" style="margin-top: 30px;">
                                                        
                                                        <tbody>
                                                                     <tr>
                                                                        <td align="left">County</td>
                                                                        <td>: {{ $address->county}}</td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                            <td align="left"> Home address</td>
                                                                            <td>: {{$address->home_address}}</td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                            <td align="left"> Town/City/State</td>
                                                                            <td>: {{$address->town}}</td>
                                                                    </tr>
                                                        
                                                                    
                                                                    <tr>
                                                                            <td align="left"> Street</td>
                                                                            <td>: {{$address->street}}</td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                            <td align="left"> BOX NUMBER</td>
                                                                            <td>: {{$address->box}}</td>
                                                                    </tr>  
                                                                  
                                                                    
                                                        
                                                                
                                      
                                                                
                                                                
                                                        </tbody>
                                                </table>
                                    
           
                                        </div>
                                </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="panel panel-primary w-auto" >
                                                          
                                        <div class="panel-body">
                                          

                                            <table class="table table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl " id="responsibilities_table" style="margin-top: 30px;">
                                                    
                                                    <tbody>
                                                           
                                                                     <tr>
                                                                            <td align="left"> Postal Code</td>
                                                                            <td>: {{$address->postal_code}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td align="left"> Primary Phone</td>
                                                                            <td>: {{$address->phone_number_1}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td align="left"> Secondary Number</td>
                                                                            <td>: {{$address->phone_number_2}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td align="left"> Home Contact</td>
                                                                            <td>: {{$address->home_number}}</td>
                                                                    </tr>
                                                                 
                                                                
                                                                
                                                            
                                                           
                                                            
                                  
                                                            
                                                            
                                                    </tbody>
                                            </table>
            

           
                                        </div>
                                </div>
                        </div>
                    </div>                       
                   @endforeach

                     
                </div>





                <div id="parents" class="tab-pane container fade">
                    <?php $i = 1?>                     

                   @foreach ($parents_info as $parent)
                   <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="panel panel-primary w-auto" >
                                        <div class="panel-heading">
                                         Parent/Guardian
                                        </div>                    
                                        <div class="panel-body">
                                                <table class="table table-bordered  table-condensed" style="margin-top: 30px;">
                                                        
                                                        <tbody>
                                                                     <tr>
                                                                        <td align="left">First Name</td>
                                                                        <td>: {{ $parent->first_name}}</td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                            <td align="left">Middle Name</td>
                                                                            <td>: {{$parent->middle_name}}</td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                            <td align="left"> Last Name</td>
                                                                            <td>: {{$parent->last_name}}</td>
                                                                    </tr>
                                                            
                                                        </tbody>
                                                </table>
                                    
           
                                        </div>
                                </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="panel panel-primary w-auto" >
                                                           
                                        <div class="panel-body">
                                          

                                            <table class="table table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl " id="responsibilities_table" style="margin-top: 30px;">
                                                    
                                                    <tbody>
                                                           
                                                                     <tr>
                                                                            <td align="left"> ID NO.</td>
                                                                            <td>: {{$parent->id_number}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td align="left"> Occupation</td>
                                                                            <td>: {{$parent->occupation}}</td>
                                                                    </tr>
                                                 
      
                                                    </tbody>
                                            </table>
            
                                        </div>
                                </div>
                        </div>
                    </div>                       
                   @endforeach

                     
                </div>
          

          
                <div id="teaching_classes" class="tab-pane container fade">
                     
                     <div class="panel panel-primary w-auto" >
                             <div class="panel-heading">
                               All Documents
                             </div>                    
                             <div class="panel-body">
                                
                                @foreach ($documents_info as $doc)
                                <table class="table table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl " id="teaching_classes_table" style="margin-top: 30px;">
                                        
                                        <tbody>
                                            
                                                                     <tr>
                                                                            <td align="left"> RESULT SLIP.</td>
                                                                            <td>{{$doc->result_slip}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td align="left"> COPY OF NATIONAL ID</td>
                                                                            <td>{{$doc->copy_of_id}}</td>
                                                                    </tr>                                               
                                                                    <tr>
                                                                            <td align="left"> LIVING CERTIFICATE</td>
                                                                            <td>{{$doc->living_cert}}</td>
                                                                    </tr>                                               
                                                
                      
                                                
                                                
                                        </tbody>
                                </table>
                                
                        
      
                                    
                                @endforeach

                                
                             </div>

                             </div>
                     </div>
                </div>
          </div>


	
@endsection