@extends('roshna.index')
@section('css')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection    


@section('content')


<section class="contactSection">
    <div class="container">
        <div class="row">
            <div class="col-md-6 addr">
                <div class="contactTitle">
                    address
                </div>
                <div class="contactInfo">
                    Thamel, Kathmandu, Nepal
                </div>
                <div class="contactTitle">
                    phone
                </div>
                <div class="contactInfo">
                    0977-1-4413115(show room), 4356963(factory)
                </div>
                <div class="contactTitle">
                    email
                </div>
                <div class="contactInfo">
                    <span style="text-transform: lowercase;"> creativeind99@yahoo.com</span> 
                </div>
                
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.028907379942!2d85.30900321449221!3d27.716393731702375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fd299da4ad%3A0x5ad1324e50b4dd61!2sCreative+Industry+Pvt+Ltd!5e0!3m2!1sen!2snp!4v1514711706832" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
            </div>
            <div class="col-md-6 feedback ">
                <div class="contactTitle"> 
                    we'd love to hear from you 
                </div>
                <div class="contact-form">
                    <div class="form-group tile">
                        <input type="text" class="form-control fullname" id="usr" placeholder="Full Name">
                    </div>
                    <div class="form-group tile">
                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group tile">
                        <textarea class="form-control" rows="15" id="comment" style="resize:none" placeholder="Send a Message"></textarea>
                    </div>
                    <button class="submit btn tile"> send now </button>
                </div>
            </div>
        </div>
    </section>
    @endsection
