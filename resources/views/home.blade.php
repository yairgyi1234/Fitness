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

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#148324; color:white;"> You are now logged in. </div>

                <div class="card-body">
                    Go to your dashboard: 
                    <button type="submit" style="color:#ffffff; background-color:#148324; font-weight: bold;">
                        Enter Dashboard
                    </button> 
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row" style="background-color:#ffffff; margin-left:10px;">    
        <div class="col-md-6 col-sm-12" style="text-align:center; padding-top:10px; padding-left:10px;">
            <font face="Bodoni MT" color="black">
                <h4> "COMMERCIAL-QUALITY FITNESS EQUIPMENT, DESIGNED TO HELP YOU PERFORM YOUR BEST IN YOUR HOME" </h4>

            </font>            
                <p>
                    Maximize your time and effort with the leading commercial technology. Our exclusive programs, such as Sprint8, fat-burning interval training, and ViaFit workout tracking that syncs to your machine make reaching your goals easier than ever. 
                    When you buy our equipments, you buy direct from the manufacturer, so you’re guaranteed durable equipment that you can depend on for years to come.
                </p>
        </div>
        <div class="col-md-6 col-sm-12" style="text-align:center; padding-top:10px; float:left;">
            <font face="Bodoni MT" color="black">
                <h2> Mission </h2>
            </font>            
            <p>
                We just want you to be healthy and fit. Our goal is not only for supplying the gym training, but also for gym equipments and other organic and chemical medical supplies
            </p>
        </div>
    </div>

    <hr>

    <div class="row" style="background-color:#ffffff;">    
        <div class="col-md-12 col-sm-12" style="text-align:center; padding-top:10px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7qM-DRn10SE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
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

