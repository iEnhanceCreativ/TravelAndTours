<div class="search-wrap bg-white rounded-3 p-3">
    <div class="tab-content">
        <!-- <div class="tab-pane show active" id="hotels">
                            <div class="row gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-8 col-lg-7 col-md-12">
                                    <div class="row gy-3 gx-md-3 gx-sm-2">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                            <div class="form-group hdd-arrow mb-0">
                                                <select class="goingto form-control fw-bold hdd-arrow">
                                                    <option value="">Select</option>
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
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control fw-bold"
                                                    placeholder="Check-In & Check-Out" id="checkinout"
                                                    readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-md-12">
                                    <div class="row gy-3 gx-md-3 gx-sm-2">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                            <div class="form-group mb-0">
                                                <div class="booking-form__input guests-input mixer-auto">
                                                    <button name="guests-btn" id="guests-input-btn">1 Guest</button>
                                                    <div class="guests-input__options" id="guests-input-options">
                                                        <div>
                                                            <span class="guests-input__ctrl minus"
                                                                id="adults-subs-btn"><i
                                                                    class="fa-solid fa-minus"></i></span>
                                                            <span class="guests-input__value"><span
                                                                    id="guests-count-adults">1</span>Adults</span>
                                                            <span class="guests-input__ctrl plus" id="adults-add-btn"><i
                                                                    class="fa-solid fa-plus"></i></span>
                                                        </div>
                                                        <div>
                                                            <span class="guests-input__ctrl minus"
                                                                id="children-subs-btn"><i
                                                                    class="fa-solid fa-minus"></i></span>
                                                            <span class="guests-input__value"><span
                                                                    id="guests-count-children">0</span>Children</span>
                                                            <span class="guests-input__ctrl plus"
                                                                id="children-add-btn"><i
                                                                    class="fa-solid fa-plus"></i></span>
                                                        </div>
                                                        <div>
                                                            <span class="guests-input__ctrl minus" id="room-subs-btn"><i
                                                                    class="fa-solid fa-minus"></i></span>
                                                            <span class="guests-input__value"><span
                                                                    id="guests-count-room">0</span>Rooms</span>
                                                            <span class="guests-input__ctrl plus" id="room-add-btn"><i
                                                                    class="fa-solid fa-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group mb-0">
                                                <button type="button" class="btn btn-primary full-width fw-medium"><i
                                                        class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
        <div class="tab-pane show active" id="flights">
            <div class="row gx-lg-2 g-3">
                <div class="search-upper">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="flx-start mb-sm-0 mb-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="trip" id="return" value="option1"
                                    checked="">
                                <label class="form-check-label" for="return">Return</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="trip" id="oneway" value="option2">
                                <label class="form-check-label" for="oneway">One Way</label>
                            </div>
                        </div>
                        <div class="flx-end d-flex align-items-center flex-wrap">
                            <div class="px-sm-2 pt-0 ps-0 mob-full">
                                <div class="booking-form__input guests-input">
                                    <i class="fa-solid fa-user-clock me-2"></i><button name="guests-btn"
                                        id="guests-input-btn">1 Adults</button>
                                    <div class="guests-input__options" id="guests-input-options">
                                        <div>
                                            <span class="guests-input__ctrl minus disabled" id="adults-subs-btn"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="guests-input__value"><span
                                                    id="guests-count-adults">1</span>Adults</span>
                                            <span class="guests-input__ctrl plus" id="adults-add-btn"><i
                                                    class="fa-solid fa-plus"></i></span>
                                        </div>
                                        <div>
                                            <span class="guests-input__ctrl minus disabled" id="children-subs-btn"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="guests-input__value"><span
                                                    id="guests-count-children">0</span>Children</span>
                                            <span class="guests-input__ctrl plus" id="children-add-btn"><i
                                                    class="fa-solid fa-plus"></i></span>
                                        </div>
                                        <div class="d-none">
                                            <span class="guests-input__ctrl minus disabled " id="room-subs-btn"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="guests-input__value"><span
                                                    id="guests-count-room">0</span>Rooms</span>
                                            <span class="guests-input__ctrl plus" id="room-add-btn"><i
                                                    class="fa-solid fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="ps-1 pt-0 mob-full">
                                <div class="dropdowns">
                                    <div class="selections">
                                        <i class="fa-solid fa-basket-shopping me-2"></i><span
                                            class="selected">Economy</span>
                                        <div class="caret"></div>
                                    </div>
                                    <ul class="menu">
                                        <li class="active">Economy</li>
                                        <li>Premium Economy</li>
                                        <li>Premium Economy</li>
                                        <li>Business/First</li>
                                        <li>Business</li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row gx-lg-2 gx-3">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                            <div class="form-group hdd-arrow mb-0">
                                <select class="leaving form-control fw-bold">
                                    <option value="">Select</option>
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
                            <div class="btn-flip-icon mt-md-0">
                                <button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-groupp hdd-arrow mb-0">
                                <select class="goingto form-control fw-bold">
                                    <option value="">Select</option>
                                    <option value="lv">Las Vegas</option>
                                    <option value="la">Los Angeles</option>
                                    <option value="kc">Kansas City</option>
                                    <option value="no">New Orleans</option>
                                    <option value="kc">Jacksonville</option>
                                    <option value="lb">Long Beach</option>
                                    <option value="cl">Columbus</option>
                                    <option value="cn">Canada</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="row gx-lg-2 gx-3">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group mb-0">
                                <input class="form-control fw-bold choosedate" type="text" placeholder="Departure.."
                                    readonly="readonly">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group mb-0">
                                <input class="form-control fw-bold choosedate" type="text" placeholder="Return.."
                                    readonly="readonly">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-2 col-lg-2 col-md-12">
                                    <div class="form-groupp hdd-arrow mb-0">
                                        <select class="occupant form-control fw-bold">
                                            <option value="">Select</option>
                                            <option value="lv">01 Adult</option>
                                            <option value="la">02 Adult</option>
                                            <option value="kc">03 Adult</option>
                                            <option value="no">04 Adult</option>
                                            <option value="kc">05 Adult</option>
                                            <option value="lb">06 Adult</option>
                                            <option value="cl">07 Adult</option>
                                            <option value="cn">08 Adult</option>
                                        </select>
                                    </div>
                                </div> -->
                <div class="col-xl-1 col-lg-1 col-md-12">
                    <div class="form-group mb-0">
                        <a href="/flight-list" class="btn btn-primary full-width fw-medium"><i
                                class="fa-solid fa-magnifying-glass me-2"></i></a>
                        <!-- <button type="button" class="btn btn-primary full-width fw-medium"><i
                                                class="fa-solid fa-magnifying-glass fs-5"></i></button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tours">
            <div class="row gy-3 gx-md-3 gx-sm-2">
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="row gy-3 gx-md-3 gx-sm-2">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                            <div class="form-group hdd-arrow mb-0">
                                <select class="goingto form-control fw-bold">
                                    <option value="">Select</option>
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
                            <div class="form-group mb-0">
                                <input type="text" class="form-control choosedate fw-bold" placeholder="Choose Date"
                                    readonly="readonly">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="row gy-3 gx-md-3 gx-sm-2">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="form-group hdd-arrow mb-0">
                                <select class="tour form-control fw-bold">
                                    <option value="">Select</option>
                                    <option value="ny">Family Package</option>
                                    <option value="sd">Honymoon Package</option>
                                    <option value="sj">Group Package</option>
                                    <option value="ph">Desert</option>
                                    <option value="nl">History</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group mb-0">
                                <a href="/flight-list" class="btn btn-primary full-width fw-medium"><i
                                        class="fa-solid fa-magnifying-glass me-2"></i>Search</a>
                                <!-- <button type="button" class="btn btn-primary full-width fw-medium"><i
                                                        class="fa-solid fa-magnifying-glass me-2"></i>Search</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="tab-pane" id="cabs">
                            <div class="row gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-8 col-lg-7 col-md-12">
                                    <div class="row gy-3 gx-md-3 gx-sm-2">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                            <div class="form-group hdd-arrow mb-0">
                                                <select class="pickup form-control fw-bold">
                                                    <option value="">Select</option>
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
                                                <select class="drop form-control fw-bold">
                                                    <option value="">Select</option>
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
                                    <div class="row gy-3 gx-md-3 gx-sm-2">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control choosedate fw-bold"
                                                    placeholder="Choose Pickup Date" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group mb-0">
                                                <button type="button" class="btn btn-primary full-width fw-medium"><i
                                                        class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
    </div>
</div>