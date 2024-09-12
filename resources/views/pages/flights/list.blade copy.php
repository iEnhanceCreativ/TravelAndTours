@extends('layouts/content-nav-bar-layout', ['page' => 'flights'])

@section('title', 'Flight List')

@section('content')
<!-- <div class="py-5  skin-dark-footer position-relative"> -->
<div class="py-5 image-cover  bg-white" style="background:url({{ asset('assets/img/flights_banner.png')}}) no-repeat;"
data-overlay="6">
    <div class="container">
        <!-- Search Form -->
        <!-- <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="search-wrap position-relative">
                    <div class="row align-items-end gy-3 gx-md-3 gx-sm-2">

                        <div class="col-xl-8 col-lg-7 col-md-12">
                            <div class="row gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                    <div class="form-group hdd-arrow mb-0">
                                        <label class="text-light text-uppercase opacity-75">Leaving From</label>
                                        <select class="leaving form-control fw-bold select2-hidden-accessible"
                                            data-select2-id="select2-data-1-hsyg" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-3-my9d">Select</option>
                                            <option value="ny">New York</option>
                                            <option value="sd">San Diego</option>
                                            <option value="sj">San Jose</option>
                                            <option value="ph">Philadelphia</option>
                                            <option value="nl">Nashville</option>
                                            <option value="sf">San Francisco</option>
                                            <option value="hu">Houston</option>
                                            <option value="sa">San Antonio</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group hdd-arrow mb-0">
                                        <label class="text-light text-uppercase opacity-75">Going To</label>
                                        <select class="goingto form-control fw-bold select2-hidden-accessible"
                                            data-select2-id="select2-data-4-k3kw" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-6-fo13">Select</option>
                                            <option value="ny">New York</option>
                                            <option value="sd">San Diego</option>
                                            <option value="sj">San Jose</option>
                                            <option value="ph">Philadelphia</option>
                                            <option value="nl">Nashville</option>
                                            <option value="sf">San Francisco</option>
                                            <option value="hu">Houston</option>
                                            <option value="sa">San Antonio</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-12">
                            <div class="row align-items-end gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group mb-0">
                                        <label class="text-light text-uppercase opacity-75">Journey Date</label>
                                        <input type="text" class="form-control fw-bold flatpickr-input"
                                            placeholder="Check-In &amp; Check-Out" id="checkinout" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group mb-0">
                                        <button type="button"
                                            class="btn btn-whites text-primary full-width fw-medium"><i
                                                class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <x-search-flight-form/>
        <!-- </row> -->

    </div>
</div>

<section class="gray-simple">
    <div class="container">
        <div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

            <!-- Sidebar Filter Options -->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="filter-searchBar bg-white rounded-3">
                    <div class="filter-searchBar-head border-bottom">
                        <div class="searchBar-headerBody d-flex align-items-start justify-content-between px-3 py-3">
                            <div class="searchBar-headerfirst">
                                <h6 class="fw-bold fs-5 m-0">Filters</h6>
                                <p class="text-md text-muted m-0">Showing 180 Flights</p>
                            </div>
                            <div class="searchBar-headerlast text-end">
                                <a href="#" class="text-md fw-medium text-primary active">Clear All</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter-searchBar-body">
                        <!-- Departure & Return -->
                        <!-- <div class="searchBar-single px-3 py-3 border-bottom">
                            <div class="searchBar-single-title d-flex mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Departure</h6>
                            </div>
                            <div class="searchBar-single-wrap mb-4">
                                <ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="before6am">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="before6am">Before 6AM</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="6am12pm">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="6am12pm">6AM -
                                            12PM</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="12pm6pm">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="12pm6pm">12PM -
                                            6PM</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="after6pm">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="after6pm">After
                                            6PM</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="searchBar-single-title d-flex mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Return</h6>
                            </div>
                            <div class="searchBar-single-wrap">
                                <ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="before6am1">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="before6am1">Before 6AM</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="6am12pm1">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="6am12pm1">6AM -
                                            12PM</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="12pm6pm1">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="12pm6pm1">12PM
                                            - 6PM</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="after6pm1">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="after6pm1">After 6PM</label>
                                    </li>
                                </ul>
                            </div>

                        </div> -->

                        <!-- Onward Stops -->
                        <div class="searchBar-single px-3 py-3 border-bottom">
                            <div class="searchBar-single-title d-flex mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Onward Stops</h6>
                            </div>
                            <div class="searchBar-single-wrap">
                                <ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="direct">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="direct">Direct</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="1stop">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="1stop">1
                                            Stop</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="2stop">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="2stop">2+
                                            Stop</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="searchBar-single-title d-flex mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Return Stops</h6>
                            </div>
                            <div class="searchBar-single-wrap">
                                <ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="direct1">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="direct1">Direct</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="1stop1">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="1stop1">1
                                            Stop</label>
                                    </li>
                                    <li class="col-6">
                                        <input type="checkbox" class="btn-check" id="2stop1">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
                                            for="2stop1">2+
                                            Stop</label>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- Pricing -->
                        <!-- <div class="searchBar-single px-3 py-3 border-bottom">
                            <div class="searchBar-single-title d-flex mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Pricing Range in US$</h6>
                            </div>
                            <div class="searchBar-single-wrap">
                                <span class="irs irs--round js-irs-0"><span class="irs"><span class="irs-line"
                                            tabindex="0"></span><span class="irs-min"
                                            style="visibility: hidden;">0</span><span class="irs-max"
                                            style="visibility: hidden;">1 000</span><span class="irs-from"
                                            style="visibility: visible; left: 6.24772%;">100</span><span class="irs-to"
                                            style="visibility: visible; left: 81.5762%;">900</span><span
                                            class="irs-single" style="visibility: hidden; left: 35.6752%;">100 —
                                            900</span></span><span class="irs-grid"></span><span class="irs-bar"
                                        style="left: 12.3358%; width: 75.3285%;"></span><span
                                        class="irs-shadow shadow-from" style="display: none;"></span><span
                                        class="irs-shadow shadow-to" style="display: none;"></span><span
                                        class="irs-handle from"
                                        style="left: 9.41606%;"><i></i><i></i><i></i></span><span
                                        class="irs-handle to type_last"
                                        style="left: 84.7445%;"><i></i><i></i><i></i></span></span><input type="text"
                                    class="js-range-slider irs-hidden-input" name="my_range" value="" data-skin="round"
                                    data-type="double" data-min="0" data-max="1000" data-grid="false" tabindex="-1"
                                    readonly="">
                            </div>
                        </div> -->

                        <!-- Facilities -->
                        <div class="searchBar-single px-3 py-3 border-bottom">
                            <div class="searchBar-single-title d-flex mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Facilities</h6>
                            </div>
                            <div class="searchBar-single-wrap">
                                <ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
                                    <li class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="baggage">
                                            <label class="form-check-label" for="baggage">Baggage</label>
                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inflightmeal">
                                            <label class="form-check-label" for="inflightmeal">In-flight Meal</label>
                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inflightenter">
                                            <label class="form-check-label" for="inflightenter">In-flight
                                                Entertainment</label>
                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="flswifi">
                                            <label class="form-check-label" for="flswifi">WiFi</label>
                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="flusbport">
                                            <label class="form-check-label" for="flusbport">Power/USB Port</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- Popular Flights -->
                        <div class="searchBar-single px-3 py-3 border-bottom">
                            <div class="searchBar-single-title d-flex align-items-center justify-content-between mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Preferred Airlines</h6>
                                <a href="#" class="text-md fw-medium text-muted active">Reset</a>
                            </div>
                            <div class="searchBar-single-wrap">
                                <ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
                                    <li class="col-12">
                                        <div class="form-check lg">
                                            <div class="frm-slicing d-flex align-items-center">
                                                <div class="frm-slicing-first">
                                                    <input class="form-check-input" type="checkbox" id="baggage8">
                                                    <label class="form-check-label" for="baggage8"></label>
                                                </div>
                                                <div
                                                    class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
                                                    <div class="frms-flex d-flex align-items-center">
                                                        <div class="frm-slicing-img"><img src="assets/img/air-1.jpg"
                                                                class="img-fluid" width="25" alt=""></div>
                                                        <div class="frm-slicing-title ps-2"><span
                                                                class="text-muted-2">Qutar Airways</span></div>
                                                    </div>
                                                    <div class="text-end"><span
                                                            class="text-md text-muted-2 opacity-75">$390.00</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- <li class="col-12">
                                        <div class="form-check lg">
                                            <div class="frm-slicing d-flex align-items-center">
                                                <div class="frm-slicing-first">
                                                    <input class="form-check-input" type="checkbox" id="baggage1">
                                                    <label class="form-check-label" for="baggage1"></label>
                                                </div>
                                                <div
                                                    class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
                                                    <div class="frms-flex d-flex align-items-center">
                                                        <div class="frm-slicing-img"><img src="assets/img/air-1.jpg"
                                                                class="img-fluid" width="25" alt=""></div>
                                                        <div class="frm-slicing-title ps-2"><span
                                                                class="text-muted-2">Jal Airlines</span></div>
                                                    </div>
                                                    <div class="text-end"><span
                                                            class="text-md text-muted-2 opacity-75">$310.00</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </li> -->
                                    <!-- <li class="col-12">
                                        <div class="form-check lg">
                                            <div class="frm-slicing d-flex align-items-center">
                                                <div class="frm-slicing-first">
                                                    <input class="form-check-input" type="checkbox" id="baggage2">
                                                    <label class="form-check-label" for="baggage2"></label>
                                                </div>
                                                <div
                                                    class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
                                                    <div class="frms-flex d-flex align-items-center">
                                                        <div class="frm-slicing-img"><img src="assets/img/air-1.jpg"
                                                                class="img-fluid" width="25" alt=""></div>
                                                        <div class="frm-slicing-title ps-2"><span
                                                                class="text-muted-2">Indigo</span></div>
                                                    </div>
                                                    <div class="text-end"><span
                                                            class="text-md text-muted-2 opacity-75">$390.00</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </li> -->
                                    <li class="col-12">
                                        <div class="form-check lg">
                                            <div class="frm-slicing d-flex align-items-center">
                                                <div class="frm-slicing-first">
                                                    <input class="form-check-input" type="checkbox" id="baggage3">
                                                    <label class="form-check-label" for="baggage3"></label>
                                                </div>
                                                <div
                                                    class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
                                                    <div class="frms-flex d-flex align-items-center">
                                                        <div class="frm-slicing-img"><img src="assets/img/air-2.png"
                                                                class="img-fluid" width="25" alt=""></div>
                                                        <div class="frm-slicing-title ps-2"><span
                                                                class="text-muted-2">Air Asia</span></div>
                                                    </div>
                                                    <div class="text-end"><span
                                                            class="text-md text-muted-2 opacity-75">$410.00</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <div class="form-check lg">
                                            <div class="frm-slicing d-flex align-items-center">
                                                <div class="frm-slicing-first">
                                                    <input class="form-check-input" type="checkbox" id="baggage4">
                                                    <label class="form-check-label" for="baggage4"></label>
                                                </div>
                                                <div
                                                    class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
                                                    <div class="frms-flex d-flex align-items-center">
                                                        <div class="frm-slicing-img"><img src="assets/img/air-3.png"
                                                                class="img-fluid" width="25" alt=""></div>
                                                        <div class="frm-slicing-title ps-2"><span
                                                                class="text-muted-2">Singapore Airlines</span></div>
                                                    </div>
                                                    <div class="text-end"><span
                                                            class="text-md text-muted-2 opacity-75">$370.00</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- All Flight Lists -->
            <div class="col-xl-9 col-lg-8 col-md-12">

                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing 280 Search Results</h5>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="d-flex align-items-center justify-content-start justify-content-lg-end flex-wrap">
                            <div class="flsx-first me-2">
                                <div class="bg-white rounded py-2 px-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="mapoption">
                                        <label class="form-check-label ms-1" for="mapoption">Map</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flsx-first mt-sm-0 mt-2">
                                <ul class="nav nav-pills nav-fill p-1 small lights blukker bg-primary rounded-3 shadow-sm"
                                    id="filtersblocks" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active rounded-3" id="trending" data-bs-toggle="tab"
                                            type="button" role="tab" aria-selected="true">Our Trending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-3" id="mostpopular" data-bs-toggle="tab"
                                            type="button" role="tab" aria-selected="false" tabindex="-1">Most
                                            Popular</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-3" id="lowprice" data-bs-toggle="tab"
                                            type="button" role="tab" aria-selected="false" tabindex="-1">Lowest
                                            Price</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center g-4 mt-2">

                    <!-- Single Flight -->
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">First Class</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">07:40</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">12:20</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">4H 40M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">Business</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">14:10</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">19:30</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">5H 30M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <span class="label bg-light-success text-success me-1">15%
                                                        Off</span>
                                                    <div class="text-dark fs-3 fw-bold lh-base">US$934</div>
                                                    <div class="text-muted text-sm mb-2">Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#bookflight">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Flight -->
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">First Class</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">07:40</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">12:20</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">4H 40M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">Business</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">14:10</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">19:30</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">5H 30M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <span class="label bg-light-success text-success me-1">15%
                                                        Off</span>
                                                    <div class="text-dark fs-3 fw-bold lh-base">US$934</div>
                                                    <div class="text-muted text-sm mb-2">Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#bookflight">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Flight -->
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">First Class</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">07:40</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">12:20</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">4H 40M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">Business</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">14:10</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">19:30</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">5H 30M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <span class="label bg-light-success text-success me-1">15%
                                                        Off</span>
                                                    <div class="text-dark fs-3 fw-bold lh-base">US$934</div>
                                                    <div class="text-muted text-sm mb-2">Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#bookflight">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Flight -->
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">First Class</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">07:40</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">12:20</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">4H 40M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">Business</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">14:10</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">19:30</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">5H 30M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <span class="label bg-light-success text-success me-1">15%
                                                        Off</span>
                                                    <div class="text-dark fs-3 fw-bold lh-base">US$934</div>
                                                    <div class="text-muted text-sm mb-2">Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#bookflight">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Flight -->
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">First Class</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">07:40</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">12:20</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">4H 40M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">Business</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">14:10</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">19:30</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">5H 30M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <span class="label bg-light-success text-success me-1">15%
                                                        Off</span>
                                                    <div class="text-dark fs-3 fw-bold lh-base">US$934</div>
                                                    <div class="text-muted text-sm mb-2">Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#bookflight">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Flight -->
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">First Class</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">07:40</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">12:20</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">4H 40M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">Business</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">14:10</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">19:30</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">5H 30M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <span class="label bg-light-success text-success me-1">15%
                                                        Off</span>
                                                    <div class="text-dark fs-3 fw-bold lh-base">US$934</div>
                                                    <div class="text-muted text-sm mb-2">Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#bookflight">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Flight -->
                    <div class="col-xl-12 col-lg12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">First Class</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">07:40</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">12:20</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">4H 40M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="label bg-light-success text-success me-2">Return</span>
                                                    <span class="text-muted text-sm">26 Jun 2023</span>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="d-start fl-pic">
                                                                <img class="img-fluid" src="assets/img/air-1.jpg"
                                                                    width="45" alt="image">
                                                            </div>
                                                            <div class="d-end fl-title ps-2">
                                                                <div class="text-dark fw-medium">Qutar Airways</div>
                                                                <div class="text-sm text-muted">Business</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">14:10</div>
                                                                <div class="text-muted text-sm fw-medium">DEL</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine return">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">19:30</div>
                                                                <div class="text-muted text-sm fw-medium">DOH</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">5H 30M</div>
                                                        <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div class="d-lg-block d-none border br-dashed me-4"></div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Free WiFi"><i
                                                            class="fa-solid fa-wifi"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Food Available"><i
                                                            class="fa-solid fa-utensils"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border me-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="One Cup Tea"><i
                                                            class="fa-solid fa-mug-saucer"></i></span>
                                                    <span class="square--20 rounded text-xs text-muted border"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                </div>
                                                <div class="text-start text-md-end">
                                                    <span class="label bg-light-success text-success me-1">15%
                                                        Off</span>
                                                    <div class="text-dark fs-3 fw-bold lh-base">US$934</div>
                                                    <div class="text-muted text-sm mb-2">Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <button class="btn btn-primary btn-md fw-medium full-width"
                                                        data-bs-toggle="modal" data-bs-target="#bookflight">
                                                        Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="pags card py-2 px-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination m-0 p-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal modal-lg fade" id="bookflight" tabindex="-1" aria-labelledby="bookflightModalLabel"
    style="display: none;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-6" id="bookflightModalLabel">Your Flight To Singapore</h4>
                <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-square-xmark"></i></a>
            </div>
            <div class="modal-body px-4 py-4 px-xl-5 px-lg-5">
                <!-- <div class="upper-section01 mb-3 mt-3">
                    <div class="alert alert-success" role="alert">
                        13% lower CO2 emissions than the average of all flights we offer for this route
                    </div>
                </div> -->

                <div class="airLines-fullsegment">

                    <!-- Departure Route -->
                    <div class="segmentDeparture-wrap">
                        <div class="segmentDeparture-head mb-3">
                            <h4 class="fs-5 m-0">Flight to Singapore</h4>
                            <p class="text-muted-2 fw-medium text-md m-0">1 Stop · 19h 46m</p>
                        </div>
                        <div class="segmentDeparture-block">
                            <div class="segmentDeparture blockfirst">
                                <ul>
                                    <li>
                                        <div class="segmenttriox">
                                            <h6 class="fs-6 fw-medium m-0">LKO . Lucknow</h6>
                                            <p class="text-muted text-md m-0">Sat 7 Oct · 21:15</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="segmenttriox">
                                            <h6 class="fs-6 fw-medium m-0">SIN · Singapore Changi Apt</h6>
                                            <p class="text-muted text-md m-0">Sat 7 Oct · 22:30</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="segmentDeparture-blocklast">
                                <div class="d-flex align-items-start timeline-stprs">
                                    <div class="timeline-stprsthumb"><img src="assets/img/air-1.jpg" class="img-fluid"
                                            width="40" alt="">
                                    </div>
                                    <div class="timeline-stprscaps ps-2">
                                        <p class="text-sm m-0">Qutar Airways<br>AI812 · Economy<br>Flight time 1h 00m
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="segmentDeparture-overlay">
                            <div class="css-1894l3t"><span class="text-muted"><i
                                        class="fa-regular fa-clock me-1"></i>Layover 1h
                                    36m</span></div>
                        </div>
                        <div class="segmentDeparture-block">
                            <div class="segmentDeparture blockfirst">
                                <ul>
                                    <li>
                                        <div class="segmenttriox">
                                            <h6 class="fs-6 fw-medium m-0">LKO . Lucknow</h6>
                                            <p class="text-muted text-md m-0">Sat 7 Oct · 21:15</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="segmenttriox">
                                            <h6 class="fs-6 fw-medium m-0">DEL . Delhi</h6>
                                            <p class="text-muted text-md m-0">Sat 7 Oct · 22:30</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="segmentDeparture-blocklast">
                                <div class="d-flex align-items-start timeline-stprs">
                                    <div class="timeline-stprsthumb"><img src="assets/img/air-1.jpg" class="img-fluid"
                                            width="40" alt="">
                                    </div>
                                    <div class="timeline-stprscaps ps-2">
                                        <p class="text-sm m-0">Air India<br>AI812 · Economy<br>Flight time 1h 00m
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>


                    <!-- Returen Route -->
                    <div class="segmentDeparture-wrap mt-5">
                        <div class="segmentDeparture-head mb-3">
                            <h4 class="fs-5 m-0">Flight to Lucknow</h4>
                            <p class="text-muted-2 fw-medium text-md m-0">Non Stop · 19h 46m</p>
                        </div>
                        <div class="segmentDeparture-block">
                            <div class="segmentDeparture blockfirst">
                                <ul>
                                    <li>
                                        <div class="segmenttriox">
                                            <h6 class="fs-6 fw-medium m-0">SIN · Singapore Changi Apt</h6>
                                            <p class="text-muted text-md m-0">Sat 8 Oct · 21:15</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="segmenttriox">
                                            <h6 class="fs-6 fw-medium m-0">Loc . Lucknow</h6>
                                            <p class="text-muted text-md m-0">Sat 7 Oct · 22:30</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="segmentDeparture-blocklast">
                                <div class="d-flex align-items-start timeline-stprs">
                                    <div class="timeline-stprsthumb"><img src="assets/img/air-1.jpg" class="img-fluid"
                                            width="40" alt="">
                                    </div>
                                    <div class="timeline-stprscaps ps-2">
                                        <p class="text-sm m-0">Qutar Airways<br>6E1012 · Economy<br>Flight time 5h 20m
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="airLines-includedbaggases border-top border-bottom mt-4 py-4">
                    <div class="departure-servicess mb-4">
                        <h5 class="fs-6 mb-4">Flight To Singapore</h5>
                        <div class="single-includedbaggases d-flex align-items-center justify-content-between mb-3">
                            <div class="includedbaggases-blc d-flex align-items-start">
                                <div class="includedbaggases-icons"><i class="fa-solid fa-suitcase-rolling fs-5"></i>
                                </div>
                                <div class="includedbaggases-caps ps-2">
                                    <p class="m-0 lh-base">1 personal item</p>
                                    <p class="m-0">Must go under the seat in front of you</p>
                                </div>
                            </div>
                            <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                            </div>
                        </div>
                        <div class="single-includedbaggases d-flex align-items-center justify-content-between">
                            <div class="includedbaggases-blc d-flex align-items-start">
                                <div class="includedbaggases-icons"><i class="fa-solid fa-briefcase fs-5"></i></div>
                                <div class="includedbaggases-caps ps-2">
                                    <p class="m-0 lh-base">1 cabin bag</p>
                                    <p class="m-0">Max weight 8 kg</p>
                                </div>
                            </div>
                            <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                            </div>
                        </div>
                    </div>
                    <div class="departure-servicess">
                        <h5 class="fs-6 mb-4">Flight To Lucknow</h5>
                        <div class="single-includedbaggases d-flex align-items-center justify-content-between mb-3">
                            <div class="includedbaggases-blc d-flex align-items-start">
                                <div class="includedbaggases-icons"><i class="fa-solid fa-suitcase-rolling fs-5"></i>
                                </div>
                                <div class="includedbaggases-caps ps-2">
                                    <p class="m-0 lh-base">1 personal item</p>
                                    <p class="m-0">Must go under the seat in front of you</p>
                                </div>
                            </div>
                            <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                            </div>
                        </div>
                        <div class="single-includedbaggases d-flex align-items-center justify-content-between">
                            <div class="includedbaggases-blc d-flex align-items-start">
                                <div class="includedbaggases-icons"><i class="fa-solid fa-briefcase fs-5"></i></div>
                                <div class="includedbaggases-caps ps-2">
                                    <p class="m-0 lh-base">1 cabin bag</p>
                                    <p class="m-0">Max weight 8 kg</p>
                                </div>
                            </div>
                            <div class="text-end"><span class="label bg-light-success text-success">Included</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="airLines-priceinfoy1 pt-4">
                    <div class="airLines-flex d-flex align-items-center justify-content-between">
                        <div class="airLinesyscb">
                            <h4 class="fs-4 m-0">US$479</h4>
                            <p class="text-md m-0">Total price for all travellers</p>
                        </div>
                        <div class="flds-ytu">
                            <!-- <button class="btn btn-primary btn-md fw-medium">Book Now</button> -->
                            <a href="flight-details" class="btn btn-primary btn-md fw-medium">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection