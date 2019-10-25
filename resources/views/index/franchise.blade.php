@extends('layouts.layout')
@section('content')
    <section class="section-banner">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 p-0">
                    <div class="section-banner-background position-relative">
                        <div class="position-absolute over-color-background w-100">
                        </div>
                        <div class="section-banner-text position-absolute d-flex justify-content-center align-items-center">
                            <h2 class="section-banner-text-title text-uppercase text-center">franchise</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="franchise" class="section-six-img">
        <div class="container">
            <div class="row row-six-img-content">
                <div class="col-12 col-md-10 mx-auto text-center">
                    <h3 class="franchise-title">DEVELOPMENT STRATEGY</h3>
                </div>
                <div class="col-12 col-md-6 mx-auto">
                    <p class="section-about-page-content-text">Given the importance of our culture and mission, we have decided to approach franchising in a careful manner. Rather than develop a large network of individual franchisees, we have decided that a small network of partners would better accomplish our goals and create a more cohesive brand. Our network, based on human values and friendly relationships, strives to be a positive force in the communities we serve. We consider our partners more as family than as a group of business relations. We’re confident that they will help strengthen our culture and that together we will build a better business than we could on our own.</p>
                </div>
                <div class="col-12 col-md-6 mx-auto">
                    <p class="section-about-page-content-text">The Propaganda Vietnamese Bistro Network is developed by restauranteurs, chefs and other F&B specialists. Our trainers speak multiple languages and have lived immersed in many different cultures. Their adaptation skills are impressive.</p>
                    <p class="section-about-page-content-text">Propaganda Vietnamese Bistros have adopted a unique style of management setting the general atmosphere immediately upon entering an outlet. </p>
                    <p class="section-about-page-content-text">Guidelines for advertising and communications are solid and the original Propaganda advertising team is available for reviewing and guidance. Developing marketing strategies is made simple with the rich materials included in our Brand Book.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="/img/menu/img-everyday.jpeg" alt="img" class="img-fluid w-100">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="section-about-page-content">
                        <h3 class="section-about-page-content-title text-center">
                            A TRUSTWORTHY PARTNER
                        </h3>
                        <p class="section-about-page-content-text">
                            Potential franchisees should come with some F&B experience.
                            We are looking for partners with strong entrepreneurial and organizational skills. Whatever their background and education, these will be the key to making a success of the bistros.
                        </p>
                        <p class="section-about-page-content-text">
                            Individual success for each partner is a guarantee to overall success of the brand worldwide.
                            For this reason the Propaganda team shows careful attention to accompanying each and every franchisee with tailor-made programs for training and support, taking into account daily obligations and potential local restrictions.
                            For the full duration of the contract, franchisees will receive technical and managerial assistance and reactive, efficient support.
                        </p><p class="section-about-page-content-text">
                            Joining the Propaganda family is a guarantee of receiving adequate top quality training as well as tools to insure the success of each outlet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <h3 class="section-about-page-content-title text-center">CONTACT US</h3>
                    <form class="form-franchise" method="post" action="{{route('savefranchise')}}">
                        @csrf
                        <div class="form-group">
                            <label class="color-label" for="name">Name *</label>
                            <input type="text" class="form-control" required name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label class="color-label" for="email">Email Address *</label>
                            <input type="email" class="form-control" required name="email" id="email" >
                        </div>
                        <div class="form-group">
                            <label class="color-label" for="subject">Subject *</label>
                            <input type="text" class="form-control" required name="subject" id="subject" >
                        </div>
                        <div class="form-group">
                            <label class="color-label" for="message">Message *</label>
                            <textarea class="form-control" id="message" required name="message" rows="3"></textarea>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6Lc7er8UAAAAAJhNRdGe82Hj3vywMk7cA9ZjVEsz"></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection