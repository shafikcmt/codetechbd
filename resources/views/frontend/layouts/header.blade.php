
  <!--start header-->
  <header class="wow fadeInDown clearfix" data-wow-duration="1s">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand align-self-center" href="{{ route('home')}}">
                    <img src="{{asset('frontend')}}/asset/logo/logo.jpeg" class="logo" alt="Logo">
                </a>

                <div class="menu-area ml-auto">
                    <ul>
                        <li><a href="{{ route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="dd-btn1"><a href="#!"> About Us <i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu1">
                                <ul>
                                    <li><a href="about.html"><i class="fa fa-long-arrow-right"></i> Company Profiles</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Careers</a></li>

                                </ul>
                            </div>

                        </li>

                        <li class="dd-btn1"><a href="#"> Domain & Hosting<i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu1">
                                <ul>

                                    <li class="dd-btn2"><a href="#"><i class="fa fa-long-arrow-right"></i> Domain Registration <i class="fa fa-angle-right float-right mt-1"></i></a>

                                        <div class="dropdown-menu2">
                                            <ul class="w-nav-list level_3">
                                                <li><a href="#">New Domain Registration</a> </li>

                                                <li><a href="#">View Domain Pricing</a> </li>

                                                <li><a href="#">Bulk Domain Register</a> </li>

                                                <li><a href="#">Domain Transfer</a> </li>

                                                <li><a href="#">Domain WHOIS Check</a> </li>
                                            </ul>
                                        </div>


                                    </li>
                                    <li class="dd-btn2"><a href="#"><i class="fa fa-long-arrow-right"></i> Web Hosting <i class="fa fa-angle-right float-right mt-1"></i></a>

                                        <div class="dropdown-menu2">
                                            <ul>
                                                <li><a href="#">Linux Hosting</a></li>

                                                <li><a href="#">Windows Hosting</a></li>
                                                <li><a href="#">Linux Reseller Hosting</a></li>
                                                <li><a href="#">Windows Reseller Hosting</a></li>

                                                <li><a href="#">VPS Hosting</a></li>
                                                <li><a href="#">Dedicated Server</a></li>
                                                <li><a href="#">SSl Security</a></li>
                                                <li><a href="#">Enterprise Email Hosting</a></li>
                                            </ul>
                                        </div>


                                    </li>

                                </ul>
                            </div>

                        </li>

                        <li class="dd-btn1"><a href="#">Software <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Accounting & Inventory</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Customize ERP</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> POS Software</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> E-commerce Application</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Hospital Management</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Pharmacy Management</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> HR Management System</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Doctor Appointment System</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Question Bank Software</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Question Bank Software</a></li>
                                </ul>
                            </div>


                        </li>

                        <li class="dd-btn1"><a href="#"> Website <i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Static Website</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Dynamic Website</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> E-Commerce Website</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Portal</a></li>
                                </ul>
                            </div>

                        </li>

                        <li class="dd-btn1"><a href="#"> Services <i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Enterprise Cloud Services</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Enterprise SMS Solutions</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> IT Consultancy</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i> Web Maintenance</a></li>
                                </ul>
                            </div>

                        </li>


                        <li><a href="{{ route('contact')}}"> Contact</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars menu-icon"></i>

            </div>
        </nav>
    </header>
    <!--end header-->
    <!--start mobile menu-->
    <div class="mobile-menu">
        <div class="mm-logo" style="background: #fff; padding: 11px 18px;">
            <a href="#">
                <img style="width: 55px;" src="logo/logo.png" alt="logo">
            </a>
            <div class="mm-cross-icon">
                <i class="fa fa-times mm-ci"></i>
            </div>
        </div>
        <div class="mm-menu">
            <div class="accordion" id="accordionExample">
                <div class="menu-box">
                    <div class="menu-link">
                        <a href="#"><i class="fa fa-home mr-2"></i>Home</a>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link" id="headingTwo">
                        <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseTwo"> About Us<i class="fa fa-plus"></i></a>
                    </div>
                    <div id="collapseTwo" class="collapse menu-body" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Company Profiles</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Careers</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <style>
                    .scroll-div-dist {
                        background: #ececec !important;
                    }
                </style>
                <div class="menu-box">
                    <div class="menu-link" id="headingThree">
                        <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseThree"> Domain & Hosting<i class="fa fa-plus"></i></a>
                    </div>
                    <div id="collapseThree" class="collapse menu-body" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>

                                <li class="mega-dd-btn-2">
                                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Domain Registration <i class="fa fa-angle-down float-right mt-1"></i></a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body scroll-div-dist">
                                            <ul class="mega-item">
                                                <li><a href="#">New Domain Registration</a> </li>

                                                <li><a href="#">View Domain Pricing</a> </li>

                                                <li><a href="#">Bulk Domain Register</a> </li>

                                                <li><a href="#">Domain Transfer</a> </li>

                                                <li><a href="#">Domain WHOIS Check</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="mega-dd-btn-2">
                                    <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">Web Hosting <i class="fa fa-angle-down float-right mt-1"></i></a>
                                    <div class="collapse" id="collapseExample2">
                                        <div class="card card-body scroll-div-dist">
                                            <ul class="mega-item">
                                                <li><a href="#">Linux Hosting</a></li>

                                                <li><a href="#">Windows Hosting</a></li>
                                                <li><a href="#">Linux Reseller Hosting</a></li>
                                                <li><a href="#">Windows Reseller Hosting</a></li>

                                                <li><a href="#">VPS Hosting</a></li>
                                                <li><a href="#">Dedicated Server</a></li>
                                                <li><a href="#">SSl Security</a></li>
                                                <li><a href="#">Enterprise Email Hosting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link" id="headingFour">
                        <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseFour"> Software<i class="fa fa-plus"></i></a>
                    </div>
                    <div id="collapseFour" class="collapse menu-body" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Accounting & Inventory</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Customize ERP</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> POS Software</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> E-commerce Application</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Hospital Management</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Pharmacy Management</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> HR Management System</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Doctor Appointment System</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Question Bank Software</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Question Bank Software</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link" id="headingFive">
                        <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseFive"> Website<i class="fa fa-plus"></i></a>
                    </div>
                    <div id="collapseFive" class="collapse menu-body" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Static Website</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Dynamic Website</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> E-Commerce Website</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Portal</a></li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link" id="headingSix">
                        <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseSix"> Services<i class="fa fa-plus"></i></a>
                    </div>
                    <div id="collapseSix" class="collapse menu-body" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Enterprise Cloud Services</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Enterprise SMS Solutions</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> IT Consultancy</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Web Maintenance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link">
                        <a href="contact.html"> Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end mobile menu-->
