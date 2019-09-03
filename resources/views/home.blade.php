
@extends('layouts.page')
@section('content')
    <section class="home-slider owl-carousel">
        @foreach($sliders as $slider)
        <div class="slider-item" style="background-image: url({{asset('storage/slider_images/'.$slider->image)}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-start">
                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <h1 class="mb-4">{{$slider->description}}</h1>
                        <p><a href="https://vimeo.com/45830194" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-play mr-2"></span> Watch Video</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- END slider -->

    <div class="ftco-section-reservation">
        <div class="container">
            <div class="row justify-content-end ftco-animate">
                <div class="col-lg-4 col-md-5 reservation p-md-5">
                    <div class="block-17">
                        <form action="" method="post" class="d-block">
                            <div class="fields d-block">

                                <div class="book-date one-third">
                                    <label for="check-in">Check in:</label>
                                    <input type="text" id="checkin_date" class="form-control" placeholder="M/D/YYYY">
                                </div>

                                <div class="book-date one-third">
                                    <label for="check-out">Check out:</label>
                                    <input type="text" id="checkout_date" class="form-control" placeholder="M/D/YYYY">
                                </div>

                                <div class="one-third">
                                    <label for="Guest">Guest:</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="search-submit btn btn-primary" value="Check Availability">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="services bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 ftco-animate py-5 nav-link-wrap aside-stretch">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-bed"></span> Master Bedrooms</a>

                        <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 flaticon-tray"></span> Breakfast Buffet</a>

                        <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 flaticon-woman"></span> Fitness Center</a>

                        <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon-receptionist"></span> 24 Hour Reception</a>

                        <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab" aria-controls="v-pills-sea" aria-selected="false"><span class="mr-3 flaticon-deck-chair"></span> Sea View Balcony</a>

                        <a class="nav-link px-4" id="v-pills-spa-tab" data-toggle="pill" href="#v-pills-spa" role="tab" aria-controls="v-pills-spa" aria-selected="false"><span class="mr-3 flaticon-spa"></span> Pool &amp; Spa</a>

                        <a class="nav-link px-4" id="v-pills-wifi-tab" data-toggle="pill" href="#v-pills-wifi" role="tab" aria-controls="v-pills-wifi" aria-selected="false"><span class="mr-3 flaticon-wifi-router"></span> Free wifi</a>

                        <a class="nav-link px-4" id="v-pills-resto-tab" data-toggle="pill" href="#v-pills-resto" role="tab" aria-controls="v-pills-resto" aria-selected="false"><span class="mr-3 flaticon-disco-ball"></span> Resto bar</a>
                    </div>
                </div>
                <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

                    <div class="tab-content pl-md-5" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                            <span class="icon mb-3 d-block flaticon-bed"></span>
                            <h2 class="mb-4">Master Bedrooms</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                            <span class="icon mb-3 d-block flaticon-tray"></span>
                            <h2 class="mb-4">Breakfast Buffet</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                            <span class="icon mb-3 d-block flaticon-woman"></span>
                            <h2 class="mb-4">Fitness Center</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
                            <span class="icon mb-3 d-block flaticon-receptionist"></span>
                            <h2 class="mb-4">24 Hours Reception</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
                            <span class="icon mb-3 d-block flaticon-deck-chair"></span>
                            <h2 class="mb-4">Sea view balcony</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-spa" role="tabpanel" aria-labelledby="v-pills-spa-tab">
                            <span class="icon mb-3 d-block flaticon-spa"></span>
                            <h2 class="mb-4">Pool &amp; Spa</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-wifi" role="tabpanel" aria-labelledby="v-pills-wifi-tab">
                            <span class="icon mb-3 d-block flaticon-wifi-router"></span>
                            <h2 class="mb-4">Free wifi coverage</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-resto" role="tabpanel" aria-labelledby="v-pills-resto-tab">
                            <span class="icon mb-3 d-block flaticon-wifi-dico-ball"></span>
                            <h2 class="mb-4">Restaurant &amp; Bar</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                            <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section room-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Rooms</span>
                    <h2>Explore our rooms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-room owl-carousel">
                        <div class="item">
                            <div class="room-wrap">
                                <a href="#" class="room-img" style="background-image: url({{asset('cozy/images/room-1.jpg')}});"></a>
                                <div class="text p-4">
                                    <div class="d-flex mb-1">
                                        <div class="one-third">
                                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                            <h3><a href="#">Double Room</a></h3>
                                        </div>
                                        <div class="one-forth text-center">
                                            <p class="price">$99 <br><span>/night</span></p>
                                        </div>
                                    </div>
                                    <p class="features">
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                    </p>
                                    <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="room-wrap">
                                <a href="#" class="room-img" style="background-image: url({{asset('cozy/images/room-2.jpg')}});"></a>
                                <div class="text p-4">
                                    <div class="d-flex mb-1">
                                        <div class="one-third">
                                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                            <h3><a href="#">Family Room</a></h3>
                                        </div>
                                        <div class="one-forth text-center">
                                            <p class="price">$99 <br><span>/night</span></p>
                                        </div>
                                    </div>
                                    <p class="features">
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                    </p>
                                    <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="room-wrap">
                                <a href="#" class="room-img" style="background-image: url({{asset('cozy/images/room-3.jpg')}});"></a>
                                <div class="text p-4">
                                    <div class="d-flex mb-1">
                                        <div class="one-third">
                                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                            <h3><a href="#">Deluxe Room</a></h3>
                                        </div>
                                        <div class="one-forth text-center">
                                            <p class="price">$99 <br><span>/night</span></p>
                                        </div>
                                    </div>
                                    <p class="features">
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                    </p>
                                    <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="room-wrap">
                                <a href="#" class="room-img" style="background-image: url({{asset('cozy/images/room-4.jpg')}});"></a>
                                <div class="text p-4">
                                    <div class="d-flex mb-1">
                                        <div class="one-third">
                                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                            <h3><a href="#">Suite Room</a></h3>
                                        </div>
                                        <div class="one-forth text-center">
                                            <p class="price">$99 <br><span>/night</span></p>
                                        </div>
                                    </div>
                                    <p class="features">
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                        <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                    </p>
                                    <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-md-center align-items-sm-end" style="background-image: url({{asset('cozy/images/bg_4.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row desc d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <span class="subheading">Our Conference</span>
                        <h2 class="h1 font-weight-bold">Conference Centre</h2>
                        <p><a href="#" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Menu</span>
                    <h2>Restaurant &amp; Bar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 dish-menu">

                    <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-tray"></span> Main</a>
                        <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-beer"></span> Dessert</a>
                        <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Drinks</a>
                    </div>

                    <div class="tab-content py-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-3.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Grilled Beef with potatoes</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-4.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Fruit Vanilla Ice Cream</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-5.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Asian Hoisin Pork</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-6.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Spicy Fried Rice &amp; Bacon</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-7.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Mango Chili Chutney</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-8.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Savory Watercress Chinese Pancakes</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-9.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Soup With Vegetables And Meat</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-10.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Udon Noodles With Vegetables</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-11.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Baked Lobster With A Garnish</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dish-8.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Octopus with Vegetables</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END -->

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-1.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Grilled Beef with potatoes</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-2.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Grilled Beef with potatoes</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-3.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Grilled Beef with potatoes</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-4.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Grilled Beef with potatoes</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-5.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Grilled Beef with potatoes</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-6.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Tiramisu</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-7.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Chocolate Cream</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-8.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Pizza Pie</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-9.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Sicilian Ricotta</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/dessert-10.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Mango FLoat</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END -->

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-1.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Lemon Juice</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url('cozy/images/drink-2.jpg');"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Guava Juice</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-3.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Sprite</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-4.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Cola</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-5.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Wine</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-6.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Beer</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-7.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Mango Juice</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-8.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Apple Juice</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-9.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Strawberry Juice</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url({{asset('cozy/images/drink-10.jpg')}});"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Orange Juice</h3>
                                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">$29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Guests Says</span>
                    <h2>Our Satisfied Guests says</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel owl-carousel ftco-owl">
                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('cozy/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Guests from Italy</span>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('cozy/images/person_2.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Guests from Italy</span>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('cozy/images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Guests from Italy</span>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('cozy/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Guests from Italy</span>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('cozy/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Guests from Italy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="carousel1 owl-carousel ftco-owl">
                    <div class="item">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20" style="background-image: url({{asset('cozy/images/image_5.jpg')}});">
                            </a>
                            <div class="text p-4 d-block">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#">July 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="100">
                            <a href="blog-single.html" class="block-20" style="background-image: url({{asset('cozy/images/image_6.jpg')}});">
                            </a>
                            <div class="text p-4">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#">July 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a href="blog-single.html" class="block-20" style="background-image: url({{asset('cozy/images/image_7.jpg')}});">
                            </a>
                            <div class="text p-4">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#">July 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a href="blog-single.html" class="block-20" style="background-image: url({{asset('cozy/images/image_8.jpg')}});">
                            </a>
                            <div class="text p-4">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#">July 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a href="blog-single.html" class="block-20" style="background-image: url({{asset('cozy/images/image_9.jpg')}});">
                            </a>
                            <div class="text p-4">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#">July 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid section-event">
            <div class="row no-gutters justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Join Event</span>
                    <h2>Our Events</h2>
                </div>
            </div>
            <div class="row d-flex no-gutters">
                <div class="col-md-6 event-big-img" style="background-image: url({{asset('cozy/images/event.jpg')}});"></div>
                <div class="col-md-6 event-wrap">
                    <div class="event mb-5 ftco-animate">
                        <div class="text">
                            <p class="meta p-2 text-center">
                                <span class="day">12</span>
                                <span class="mos">July</span>
                                <span class="year">2018</span>
                            </p>
                            <h3><a href="event.html">Big summer meetups</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                            <p>
                                <a href="#" class="btn btn-primary">Join event</a>
                                <a href="#" class="btn btn-primary btn-outline-primary">See details</a>
                            </p>
                        </div>
                    </div>
                    <div class="event mb-5 ftco-animate">
                        <div class="text">
                            <p class="meta p-2 text-center">
                                <span class="day">12</span>
                                <span class="mos">July</span>
                                <span class="year">2018</span>
                            </p>
                            <h3><a href="event.html">Big summer meetups</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                            <p>
                                <a href="#" class="btn btn-primary">Join event</a>
                                <a href="#" class="btn btn-primary btn-outline-primary">See details</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram">
        <div class="container-fluid">
            <div class="row no-gutters justify-content-center pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2><span class="icon-instagram"></span> Instagram</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="{{asset('cozy/images/insta-1.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('cozy/images/insta-1.jpg')}});">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="{{asset('cozy/images/insta-2.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('cozy/images/insta-2.jpg')}});">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="{{asset('cozy/images/insta-3.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('cozy/images/insta-3.jpg')}});">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="{{asset('cozy/images/insta-4.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('cozy/images/insta-4.jpg')}});">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="{{asset('cozy/images/insta-5.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('cozy/images/insta-5.jpg')}});">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

