@extends('layout.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-4 fw-bold">Technical <span class="text-gradient">Skills</span></h2>
        <p class="text-muted">Multi-disciplinary expertise in Engineering.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="skill-card p-4 h-100">
                <h4 class="text-neon mb-3">Mechanical</h4>
                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>CAD Modeling</span>
                        <span class="text-neon">85%</span>
                    </div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 85%"></div></div>
                </div>
                <p class="small text-muted">SolidWorks, AutoCAD, 3D Printing.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="skill-card p-4 h-100">
                <h4 class="text-neon mb-3">Electronics</h4>
                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>Microcontrollers</span>
                        <span class="text-neon">90%</span>
                    </div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 90%"></div></div>
                </div>
                <p class="small text-muted">Arduino, ESP32, PCB Design, Sensors.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="skill-card p-4 h-100">
                <h4 class="text-neon mb-3">Programming</h4>
                <div class="skill-item mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>C++ & Python</span>
                        <span class="text-neon">75%</span>
                    </div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 75%"></div></div>
                </div>
                <p class="small text-muted">Laravel, Bootstrap, IoT Integration.</p>
            </div>
        </div>
    </div>
</div>
@endsection