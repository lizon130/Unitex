@extends('user_temp.layouts.template')

{{-- @section('page_title')
   Unitex - Add-Category 
@endsection --}}

@section('content')

<div class="breadcumb_area bg-img" style="background-image: url({{asset('home/img/bg-img/breadcumb.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h1> FIND US </h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-area d-flex align-items-center mt-4">
    <div class="google-map">
        <div id="googleMap" class="text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.317212498355!2d90.3985142!3d23.8783678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5ab58bfa1dd%3A0x85f6643464a10f11!2sUnitex%20Textile%20(BD)%20Limited!5e0!3m2!1sen!2sbd!4v1699433251055!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="contact-info">
        
        <p>Welcome to <b> Unitex BD Textile Limited </b>, where innovation meets excellence in the world of textiles. As a leading player in the textile industry, we take pride in our commitment to quality, sustainability, and cutting-edge manufacturing.</p>

        <div class="contact-address mt-50">
            <p><span>Address:</span></p> <p> 27/A (1st Floor, Apt-B1) Road No-04, Sector-09, Uttara, Dhaka-1230. </p>
            <p><span>Telephone:</span> +88 0248957059</p>
            <p><span>Email:</span> masud.rana@unitytexbd.com </p>
            <p><a href="masud.rana@unitytexbd.com">masud.rana@unitytexbd.com</a></p>
        </div>
    </div>
</div>



@endsection