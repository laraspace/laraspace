@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Meteocons Icons</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.icons.meteo')}}">Meteocons Icons</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Example Usage</h6>
                    </div>
                    <div class="card-body">
                        <pre class="language-php"><code>&lt;i class="icon-mt icon-mt-compass"&gt;&lt;/i&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-compass"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-compass </span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-na"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-na</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-celcius"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-celcius</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-fahrenheit"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-fahrenheit</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-clouds-flash-alt"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-clouds-flash-alt</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-sun-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-sun-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-moon-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-moon-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-snowflake"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-snowflake</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-sun"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-sun</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-moon"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-moon</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-fog-sun"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-fog-sun</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-fog-moon"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-fog-moon</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-fog-cloud"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-fog-cloud</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box"><i
                                            class="icon-mt icon-mt-fog"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-fog</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-windy-rain"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-windy-rain</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box"><i
                                            class="icon-mt icon-mt-snow"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-snow</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-snow-alt"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-snow-alt</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-snow-heavy"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-snow-heavy</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-hail"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-hail</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-clouds"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-clouds</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-clouds-flash"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-clouds-flash</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-sun-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-sun-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-moon-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-moon-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-flash-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-flash-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-drizzle-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-drizzle-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-rain-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-rain-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-1"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-1</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-flash"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-flash</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-cloud-flash-alt"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-cloud-flash-alt</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-drizzle"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-drizzle</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-rain"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-rain</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-windy"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-windy</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-windy-rain-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-windy-rain-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-snow-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-snow-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-snow-heavy-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-snow-heavy-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-hail-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-hail-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-clouds-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-clouds-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-clouds-flash-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-clouds-flash-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-temperature"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-temperature</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-windy-inv"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-windy-inv</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-sunrise"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-sunrise</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-sun-1"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-sun-1</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-moon-2"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-moon-2</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-eclipse"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-eclipse</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-mist"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-mist</span>
                                </div>
                            </div>
                            <div class="demo-icon">
                                <div class="icon-box">
                                    <i class="icon-mt icon-mt-wind"></i>
                                </div>
                                <div class="icon-classname">
                                    <span>icon-mt-wind</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop