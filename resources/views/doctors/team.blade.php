@extends('platform.platform_master')
@section('body')
<div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Team</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Team</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Team Area -->
<div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($doctors as $doctor)
            <div class="col-lg-3 col-sm-6">

                <div class="team-card active">
                    <div class="team-img">
                        <a href="{{ route('doctors.show', $doctor->id) }}">
                            <img src="{{ url('public/doctors/' . $doctor->doc_image) }}">
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="{{ route('doctors.show', $doctor->id) }}">Dr. {{ $doctor->doc_name }}</a></h3>
                        <span>{{ $doctor->doc_spec }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Area End -->
@endsection
