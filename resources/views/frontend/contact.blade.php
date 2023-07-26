@extends('frontend.layouts.master')
@section('content')
    <section class="contact-us py-5">
        <div class="container">
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div>
            @endif
            <div class="contact-us-box bg-white p-5">
                <div class="row">
                    <div class="col">
                        <div class="section-title section-title2 text-left">
                            <h2 style="font-size: 17px;">Send a <span>message</span> to us</h2>
                        </div>
                    </div>
                </div>
                <style>
                    .contact-us-form form .form-control {
                        padding: 1.3rem .75rem;
                        border-radius: 2px;
                    }

                    .contact-us .section-title2 h2::after {
                        width: 100%;
                    }
                </style>
                <div class="row">
                    <div class="col-md-6">

                        <div class="contact-us-form">
                            <div class="contact-form">
                                <form action="{{ route('contact.store')}}" method="POST">
                                    @csrf
                                    <label for="">Name</label>
                                    <input class="form-control mb-2" type="text" name="name" placeholder="Enter name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <label for="">Email</label>
                                    <input class="form-control mb-2" type="text" name="email"
                                        placeholder="Enter email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <label for="">Phone Number</label>
                                    <input class="form-control mb-2" type="text" name="phone"
                                        placeholder="Enter mobile number">
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <label for="">Message/Comments</label>
                                    <textarea class="form-control mb-2" name="message" placeholder="Your message"></textarea>
                                    @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <button type="submit" class=" btn btn-primary mt-2" style="font-size: 14px;">
                                        <i class="fa fa-paper-plane mr-1"></i>Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-us-details">
                            <div class="office-address">
                                <div class="c-address">
                                    <p><i class="fa fa-map-marker text-custom mr-1"></i> Address - Bangladesh
                                    </p>
                                    <p><i class="fa fa-phone text-custom mr-1"></i> Mobile - 745454567867</p>
                                    <p><i class="fa fa-envelope text-custom mr-1"></i> Email -
                                       developer@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="office-location mt-4">
                            <div class="section-title text-left">
                                <h2 style="font-size: 17px;">Our <span>office</span> location</h2>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57335.61668873486!2d88.24343139480297!3d26.08337477372411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4e6fbb78b13c7%3A0xe60f580e7523a67e!2sBaliadangi!5e0!3m2!1sen!2sbd!4v1571912658669!5m2!1sen!2sbd"
                                width="100%" height="250" frameborder="0" style="box-shadow: 0px 0px 3px gray;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
