@php
/* Display elements */
@endphp

<!-- Start Navigation -->
<!-- <div class="header header-transparent theme"> -->
<div class="header header-dark theme">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand static-show" href="#"><img src="{{ asset('assets/img/logo/logo-dk-white.png') }}"
                        class="logo" alt=""></a>
                <a class="nav-brand mob-show" href="#"><img src="{{ asset('assets/img/logo/logo-dk-white.png') }}" class="logo"
                        alt=""></a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li class="currencyDropdown me-2">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
                                    class="fw-medium">CAD</span></a>
                        </li>
                        <li class="languageDropdown me-2">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal"><img
                                    src="{{ asset('assets/img/flag/canada.png') }}" class="img-fluid" width="17"
                                    alt="Country"></a>
                        </li>
                        <li>
                            <a href="#" class="bg-light-primary text-primary rounded" data-bs-toggle="modal"
                                data-bs-target="#login"><i class="fa-regular fa-circle-user fs-6"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="JavaScript:Void(0);">Europe Packages<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li>
                                <a href="#">Eurome Tour</a>
                            </li>
                            <li>
                                <a href="#">Europe Premium</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="JavaScript:Void(0);">Asian Tours<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li>
                                <a href="#">Philippines Tour</a>
                            </li>
                            <li>
                                <a href="#">Hongkong Tours</a>
                            </li>
                            <li>
                                <a href="#">Singapore Tour</a>
                            </li>
                            <li>
                                <a href="#">Japan Tour</a>
                            </li>
                            <li>
                                <a href="#">Korea Tour</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/flights">Flights</a></li>
                    <li><a href="JavaScript:Void(0);">Offers<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="#">Visa Assistance</a></li>
                            <li><a href="#">In-House Financing</a></li>
                            <li><a href="#">Group Tour</a></li>
                        </ul>
                    </li>
                    <li><a href="/#">Contact Us</a></li>
                </ul>
                <ul class="nav-menu nav-menu-social align-to-right">
                    <li class="currencyDropdown me-2">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
                                class="fw-medium">CAD</span></a>
                    </li>
                    <li class="languageDropdown me-2">
                        <a href="#" class="nav-link flag" data-bs-toggle="modal" data-bs-target="#countryModal"><img
                                src="{{ asset('assets/img/flag/canada.png') }}" class="img-fluid" width="25"
                                alt="Country"></a>
                    </li>
                    <li class="list-buttons light">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#login"><i
                                class="fa-regular fa-circle-user fs-6 me-2"></i>Sign In / Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<!-- Carousel End -->
<script>
$(window).scroll(function() {
    var navbarImage = $("#navbar-brand-img");
    if ($(this).scrollTop() > 50) { // Change the number to control when the image changes
        navbarImage.attr("src", "/assets/img/logo/logo-dk-blue.png");
    } else {
        navbarImage.attr("src", "/assets/img/logo/logo-dk-white.png");
    }
});
</script>