@extends('layouts.layout')
@section('content')
    <section class="section-banner-experience">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div id="bg-reservations" class="section-banner-experience-background position-relative">
                        <div class="position-absolute over-color-background w-100">
                        </div>
                        <div class="position-absolute d-flex section-banner-experience-text justify-content-center align-items-center">
                            <div class="div-title-unique">
                                <h2 class="section-banner-text-title text-uppercase text-center">RESERVATIONS</h2>
                            </div>
                            <div class="div-content-unique text-center">
                                <p class="section-banner-text-content">Open 365 days, 7:30am - 11pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-content-reservations" class="section-content-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <h3 class="section-content-contact-us text-uppercase text-center">
                        MAKE A RESERVATION
                    </h3>
                    <form class="form-reservations" method="post" action="{{route('savereservations')}}">
                        @csrf
                        <div class="form-group">
                            <label class="color-label" for="name">Name *</label>
                            <input type="text" class="form-control" required name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label class="color-label" for="email">Email *</label>
                            <input type="email" class="form-control" required name="email" id="email" >
                        </div>
                        <div class="form-group">
                            <label class="color-label" for="phone">Phone *</label>
                            <input type="number" class="form-control" required name="phone" id="phone" >
                        </div>
                        <div class="form-row form-group justify-content-between ">
                            <div class="col-md-6 form-group mb-md-0">
                                <label class="color-label" for="location">Location *</label>
                                <select id="location" class="form-control">
                                    <option selected>Choose location...</option>
                                    <option value="Propaganda Saigon Centre, D1">Propaganda Saigon Centre, D1</option>
                                    <option value="Propaganda Han Thuyen, D1">Propaganda Han Thuyen, D1</option>
                                </select>
                            </div>
                            <div class="col-md-5 form-group mb-0 text-md-right">
                                <label class="color-label" for="event"> Event </label>
                                <select id="event" class="form-control">
                                    <option value="- None -" selected >Event</option>
                                    <option value="80 Wines">80 Wines</option>
                                    <option value="Christmas">Christmas</option>
                                    <option value="New Year">New Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row form-group justify-content-between">
                            <div class="col-md-6 form-group mb-md-0">
                                <label class="color-label" for="date">Date *</label>
                                <input type="date" class="form-control" required name="date" id="date" >
                            </div>
                            <div class="col-md-5 form-group mb-0 text-md-right">
                                <label class="color-label" for="time">Arrival Time *</label>
                                <input type="time" class="form-control" required name="time" id="time" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="color-label" for="pax">Pax (Number of guests) *</label>
                            <input type="number" class="form-control" required name="pax" id="pax" >
                        </div>
                        <div class="form-group">
                            <label class="color-label" for="specialrequest">Special Request </label>
                            <textarea class="form-control" id="specialrequest" name="specialrequest" rows="3"></textarea>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6Ldpd78UAAAAAOU_LmuYeNyhivmZwm1kjYE930PA"></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark btn-submit-reservations">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <h3 class="section-about-page-content-title">
                                BY PHONE
                            </h3>
                            <p class="section-about-page-content-text">Prefer to make your reservation via phone? You can make a reservations by calling +842838229048 between 7:30am and 10pm. </p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="section-about-page-content-title">
                                SPECIAL EVENTS & PRIVATE PARTIES
                            </h3>
                            <p class="section-about-page-content-text">Catering and events are opportunities for us to work more closely with our guests, occasions for us to share our dedication to celebration in exciting new ways.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <img src="/img/home-page/reservations.jpg" alt="img" class="img-fluid img-reservations">
                    <h3 class="section-about-page-content-title">
                        THE MEZZANINE SITS UP TO 60
                    </h3>
                    <p class="section-about-page-content-text">Birthday, company reception, special gathering... We have a dedicated area to accommodate any kind of group or event. Just let us know a bit in advance so we can arrange food & beverages.</p>
                    <h3 id="call-for-party" class="section-about-page-content-title text-center">
                        Call (84) 28 3822 9048 to reserve either a table or a room for your party.
                    </h3>
                </div>
            </div>
        </div>
    </section>
@endsection