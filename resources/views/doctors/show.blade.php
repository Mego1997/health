@extends('platform.platform_master')
@section('body')

    <!-- Blog Widget Area -->
    <div class="blog-widget-area my-5">
        <div class="container">


            <div class="row">

                <h1 class="text-end mb-4 opacity-50">Dr. {{ $doctor->doc_name }} </h1>

                <div class="col-lg-4">
                    <div class="side-bar-area pl-20">
                        <div class="team-card active">
                            <div class="team-img">
                                <a href="team.html">
                                    <img src="{{ url('public/doctors/' . $doctor->doc_image) }} ">
                                </a>
                            </div>
                            <div class="content">
                                <h3>{{ $doctor->doc_name }}</h3>
                                <span>{{ $doctor->doc_spec }}</span>
                            </div>
                        </div>

                        <div class="card shadow" dir="ltr">
                            <div class="card-body p-0">
                                <ul class="list-unstyled p-0 m-0">
                                    <li class="text-end px-4 py-2">
                                        <h6 class="mb-0 d-inline-block">Email :</h6>
                                        <p class="d-inline-block">{{ $doctor->doc_mail }}</p>
                                    </li>
                                    <li class="text-end px-4 py-2 ">
                                        <h6 class="mb-0 d-inline-block">Address :</h6>
                                        <p class="d-inline-block">{{ $doctor->doc_address }}</p>
                                    </li>
                                    <li class="text-end px-4 py-2">
                                        <h6 class="mb-0 d-inline-block">Phone :</h6>
                                        <p class="d-inline-block">{{ $doctor->doc_phone }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 shadow mb-5 " dir="ltr">

                    <div class="info-doc  p-4 text-end ">
                        <h2>
                            Summary
                        </h2>
                        <p>
                            {!!  $doctor->doc_summary  !!}
                        </p>
                    </div>

                    <div class="info-doc  p-4 text-end">

                        <h2>
                            Experience
                        </h2>
                        <p>
                            {!!  $doctor->doc_exp  !!}
                        </p>

                    </div>

                    <div class="info-doc skills  p-4 text-end">
                        <h2>
                            Skills
                        </h2>
                        <p id="editor">
                            {!!  $doctor->doc_skills  !!}
                        </p>
                    </div>


                    <div class="info-doc skills  p-4 text-end">
                        <h2>
                            Education
                        </h2>
                        <p>
                            {!!  $doctor->doc_edu  !!}
                        </p>
                    </div>


                </div>


            </div>

        </div>
    </div>
    <!-- Blog Widget Area End -->

    @endsection
