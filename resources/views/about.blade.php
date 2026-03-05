@extends('layout.app')

@section('content')
<div class="container py-5 d-flex align-items-center justify-content-center">
    <div class="col-lg-8">
        <div class="text-center mb-4">
            <h2 class="display-4 fw-bold text-white">About <span class="text-gradient">Me</span></h2>
            <p class="text-neon fw-bold">Mechatronics Engineering Undergraduate</p>
        </div>

        <div class="about-text-box p-4 p-md-5">
            <div class="row g-4 mb-4">
                <div class="col-sm-6 text-center text-sm-start">
                    <label class="text-muted small d-block">FULL NAME</label>
                    <span class="fs-5 text-white">Chaya Lintang Anarghya</span>
                </div>
                <div class="col-sm-6 text-center text-sm-start">
                    <label class="text-muted small d-block">LOCATION</label>
                    <span class="fs-5 text-white">Surakarta, Indonesia</span>
                </div>
                <div class="col-sm-6 text-center text-sm-start">
                    <label class="text-muted small d-block">EDUCATION</label>
                    <span class="fs-5 text-white">Undergraduate Student</span>
                </div>
                <div class="col-sm-6 text-center text-sm-start">
                    <label class="text-muted small d-block">INTEREST</label>
                    <span class="fs-5 text-white">Robotics & Automation</span>
                </div>
            </div>

            <hr class="border-neon opacity-25">
            
            <p class="text-white-50 mt-4 lh-lg text-center text-sm-start">
                I am a passionate learner in the field of Mechatronics, focusing on the synergy between mechanical systems and electronic control.
                I strive to build efficient solutions through technology and constant exploration in engineering.
            </p>
        </div>
    </div>
</div>
@endsection