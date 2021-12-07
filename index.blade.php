@extends('layouts.header')

@section('content')

<div style="margin-top: 80px; ">
  <div class="container">
  <div class="row">

                <div >
                    <div style="background-image: url("{{asset('images/new/banner.jpg')}}")">


                    </div>
                </div>
            </div>

            <div style="margin-top: 30px;">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                        <div class="card">
                                <img class="card-img-top" src="{{ URL::asset('images/graduation_square.jpg') }}" alt="Card image">
                                <div class="card-body">
                                  <h4 class="card-title">About us</h4>
                                  <p class="card-text">Shiners high school is a school committed to scholarly excellence. We have competent teachers whou are out to make the
                                      students give the best. We also nature our students talents in order to ensure that they are useful. Am sure you won't  regret having your child in this school because we are the best.</p>

                                </div>
                              </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                        <div class="card">
                                <img class="card-img-top" src="{{ URL::asset('images/core_values.jpg') }}" alt="Card image">
                                <div class="card-body">
                                  <h4 class="card-title">Core values</h4>
                                  <p class="card-text">Shiners high school has a list of core values that are geared towards developing the students in the right manner.
                                      The main core values include
                                      <ul>
                                          <li>God fearing</li>
                                          <li>Integrity</li>
                                          <li>Team work</li>
                                          <li>Excellence</li>
                                          <li>Commitment</li>
                                          <li>Professionalism</li>
                                      </ul>
                                  </p>

                                </div>
                              </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl3">

                        <div class="card">
                                <img class="card-img-top" src="{{ URL::asset('images/co_curricular_activities.jpg') }}" alt="Card image">
                                <div class="card-body">
                                  <h4 class="card-title">Co-curricular activities</h4>
                                  <p class="card-text">In order to ensure that student talents are effectively natured, we offer vaious
                                     Co-curricular activities where students choose an area to engage depending on interest. We have external coaches who are well trained in order to train our
                                     students and make them go to higher levels in terms of performance.
                                  </p>
                                <p>
                                    The following are lists of games offered within the school
                                      <ul>
                                          <li>Football</li>
                                          <li>Netball</li>
                                          <li>Volleyball</li>
                                          <li>Hocky</li>
                                          <li>Swimming</li>
                                          <li>Table tennis</li>
                                      </ul>
                                  </p>

                                </div>
                              </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl3">

                        <div class="card">
                                <img class="card-img-top" src="{{ URL::asset('images/library.jpeg') }}" alt="Card image">
                                <div class="card-body">
                                  <h4 class="card-title">School library</h4>
                                  <p class="card-text">The school offers a modern based library that provides condusive environment for studying.
                                      It also has books that can be used effectively by our student to equip them with vast amounts of knowledge through research
                                  </p>

                                </div>
                              </div>

                </div>
            </div>

            </div>
  </div>
</div>




@endsection
