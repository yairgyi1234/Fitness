@extends('layouts.app')

@section('mystyle')
    <style>
        .mapouter{
            position:relative;
            text-align:right;
            height:500px;
            width:600px;
        }
        
        .gmap_canvas {
            overflow:hidden;
            background:none !important;
            height:500px;
            width:600px;
        }
    </style>
@endsection

@section('content')
    <div class="row" style="background-color:transprant;">
        <div class="col-md-12 col-sm-12" style="padding-bottom:70px;">
            <center>
                <font size="10" face="Bodoni MT" color="#148324">
                    Join With <q> Fitness </q> And Make Your Body Healthier
                </font> 
                <br>
            <font face="Bodoni MT" size="4"> Go to our store: </font> 
            <a href="{{ route('stocks.index') }}">
                <button type="submit" style="color:#ffffff; background-color:#148324; font-weight: bold; margin-top:10px; margin-left:210px; padding: 7px 105px 7px 105px;">
                        {{ __('Go Shopping') }}
                </button> 
            </a>
            </center>
        </div>
    </div>

    <div class="row" style="background-color:#2fc945;">    
        <div class="col-md-3 col-sm-1">
            <img src="/images/ad.gif" alt="">
        </div>
        
        <div class="col-md-9 col-sm-10" style="box-shadow: 0 0 10px 3px rgba(100, 100, 100, 0.7); background-color:#ffffff; margin-top:0px; margin-bottom:50px; text-align:center; height:auto; width:100%">                                                               
            <h3> About Us: </h3>
            <p align="left">
                &nbsp &nbsp This web application is written and created with php, Laravel, MySQL, HTML, CSS and bootstrap. The main reason of using Laravel is that it is a web application framework with expressive, elegant syntax. The foundation of the web is already created, and the user can create the respective web application without sweating with small things. It is an open source php web framework. MySQL is used to store and retrieve the data from database and HTML, CSS and bootstrap for the designing the interface of the web application. This web application is mainly for the gym candidates to train their bodies. They can easily buy gym stuffs from this web application and also takes body training methods from this web application.
            </p>
            <br>
            <br>
            <h3> Our Mission: </h3>
            <p align="left">
                &nbsp &nbsp We just want you to be healthy and fit. Our goal is not only for supplying the gym training, but also for gym equipments and other organic and chemical medical supplies
            </p>
        </div>  
    </div>

    <hr>

    <div class="row" style="background-color:#ffffff;">    
        <div class="col-md-6 col-sm-12" style="text-align:center; padding-top:10px;">
            <h3> Contact Us: </h3>
            <b> Address: </b> <br> No.289(A), Pyay Road, Yangon, Myanmar.

            <br> <br>

            <b> E-mail:</b> <br>
            customersupport@bodyfit.com.mm <br>
            contacts@bodyfit.com.mm

            <br> <br>

            <b> Phone:</b> <br>
            +959 250 185 799 <br>
            +959 250 185 798

        </div>
        <div class="col-md-6 col-sm-12" style="text-align:center; padding-top:10px;">
            <div class="mapouter">
                <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61109.75469814171!2d96.16261115263964!3d16.808504005964735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb45fceefc75%3A0xe212bff0f1a5c596!2sGusto+College!5e0!3m2!1sen!2smm!4v1566583848344!5m2!1sen!2smm" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>     
        </div>
    </div>
@endsection
