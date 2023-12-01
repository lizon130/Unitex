@extends('user_temp.layouts.template')

{{-- @section('page_title')
   Unitex - Add-Category 
@endsection --}}

@section('content')
<div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url({{asset('home/img/bg-img/bg-pro.png')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>A B O U T</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <img style="height: 350px; width:300px" src="{{ asset('home/img/about-img/rana.png') }}" alt="">
            <p><b>CEO:</b> MD MASUD RANA </p>
            
            <span>    There are a few things I would change if I were the CEO of my company. First, I would work on creating a more diverse and inclusive environment within the company. This would include ensuring that there are a variety of voices represented at all levels of the company, and that everyone feels like they have a seat at the table. I would also work on increasing the transparency around company decisions, and making sure that employees have a clear understanding of the company’s strategy and direction.
            <br> <br>Finally, I would focus on creating a more collaborative and innovative culture.</span>
        </div>


        <div class="col-md-6 mt-4">
            <span>
                Unitex Textile Limited established in 2014, is a professional textile exporter focused on sustainable material to make eco-friendly fabrics and aim to be an one-stop fabric supply chain for ready-made garment manufacturers.
           
                <br>
                <br>
                Our main products are both Woven and Knitting fabrics with Rayon Viscose (EcoVero) , cotton ( Organic Cotton), recycled polyester(GRS), Cotton/Rayon blended, Rayon/Poly blended, Rayon/Nylon Blended, with and without spandex(Lycra), Nylon, Modal etc.

                We are located in Uttara.Dedicated to strict quality control and thoughtful customer service, our experienced staff members are always available to discuss your requirements and ensure full customer satisfaction. 

                Certifications we provide: We are taking every little need of our customers seriously.
                <br>
                <br>
            </span>
        </div>
    </div>
</div>
<br>

<div class="brands-area d-flex align-items-center justify-content-center">        
    <div class="single-brands-logo text-center">

        <div class="row">
            <div class="col-md-12">
                <img src="{{asset('home/img/about-img/shhh.png')}}" alt="">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-1.png')}}" alt=""> 
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-2.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-3.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-4.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-5.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-6.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-7.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-8.png')}}" alt=""> <br> <br>
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-9.png')}}" alt=""> 
                <img style="margin-right: 20px"  src="{{asset('home/img/about-img/c-10.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-11.png')}}" alt="">
                <img style="margin-right: 20px" src="{{asset('home/img/about-img/c-12.png')}}" alt="">
                <img src="{{asset('home/img/about-img/c-13.png')}}" alt="">
            </div>
        </div> 
    </div>
</div>


@endsection