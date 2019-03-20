@extends('layouts.base')
<!-- Contact Info
============================================= -->
@section('content')
<section id="contactInfo" class="contact contact-info bg-white text--center pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>{{$url}}</h3>
                    <p>Alnahas Building, 2 AlBahr St, Tanta</p>
                    <p>AlGharbia, Egypt.</p>
                    <a class="link--styled" href="#">Get Directions</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Our Email</h3>
                    <p>Main Email : 7oroof@7oroof.com</p>
                    <p>Inquiries : Info@7oroof.com</p>
                    <a class="link--styled" href="#">Send a Message</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Our Support</h3>
                    <p>Main Support : 7oroof@7oroof.com</p>
                    <p>Sales : Sales@7oroof.com</p>
                    <a class="link--styled" href="#">Open a Ticket</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contactInfo end -->
@endsection