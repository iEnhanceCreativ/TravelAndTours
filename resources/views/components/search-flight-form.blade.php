<div>
    @php  @endphp
    
    <form method="POST" action="{{route('flights.search')}}" enctype="multipart/form-data">
        @csrf
        <div class="search-wrap bg-white rounded-3 p-3">
            <div class="tab-content">
                <div class="tab-pane show active" id="flights">
                    <div class="row gx-lg-2 g-3">
                        <div class="search-upper">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="flx-start mb-sm-0 mb-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input trip_type" type="radio" name="trip_type"
                                            id="round_trip" value="round_trip" checked="" 
                                            {{ (isset($params->trip_type) && $params->trip_type === "round_trip") ? 'checked': '' }}>
                                        <label class="form-check-label" for="round_trip">Round Trip</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input trip_type" type="radio" name="trip_type"
                                            id="one_way" value="one_way"
                                            {{ (isset($params->trip_type) && $params->trip_type === "one_way") ? 'checked': '' }}>
                                        <label class="form-check-label" for="one_way">One Way</label>
                                    </div>
                                </div>
                                <div class="flx-end d-flex align-items-center flex-wrap">
                                    <div class="px-sm-2 pt-0 ps-0 mob-full">
                                        <div class="booking-form__input guests-input">
                                            <i class="fa-solid fa-user-clock me-2"></i><button name="guests-btn"
                                                id="guests-input-btn">{{(isset($params->adult) && $params->adult)? $params->adult : 1}} Adults{{isset($params->children)? ', '.$params->children .'Child' : ''}}</button>
                                            <div class="guests-input__options" id="guests-input-options">
                                                <input type="hidden" name="adult" id="input-guests-count-adults"
                                                    value="{{(isset($params->adult) && $params->adult)? $params->adult : 1}}">
                                                <input type="hidden" name="children" id="input-guests-count-children"
                                                    value="{{$params->children ?? 0}}">
                                                <div>
                                                    <span class="guests-input__ctrl minus disabled"
                                                        id="adults-subs-btn"><i class="fa-solid fa-minus"></i></span>
                                                    <span class="guests-input__value"><span
                                                            id="guests-count-adults">{{(isset($params->adult) && $params->adult)? $params->adult : 1}}</span>Adults</span>
                                                    <span class="guests-input__ctrl plus" id="adults-add-btn"><i
                                                            class="fa-solid fa-plus"></i></span>
                                                </div>
                                                <div class="d-none">
                                                    <span class="guests-input__ctrl minus disabled"
                                                        id="children-subs-btn"><i class="fa-solid fa-minus"></i></span>
                                                    <span class="guests-input__value"><span
                                                            id="guests-count-children">{{isset($params->children) ? $params->children : 1}}</span>Child</span>
                                                    <span class="guests-input__ctrl plus" id="children-add-btn"><i
                                                            class="fa-solid fa-plus"></i></span>
                                                </div>
                                                <div class="d-none">
                                                    <span class="guests-input__ctrl minus disabled "
                                                        id="room-subs-btn"><i class="fa-solid fa-minus"></i></span>
                                                    <span class="guests-input__value"><span
                                                            id="guests-count-room">0</span>Rooms</span>
                                                    <span class="guests-input__ctrl plus" id="room-add-btn"><i
                                                            class="fa-solid fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-1 pt-0 mob-full">
                                        <div class="dropdowns cabin">
                                            <input type="hidden" name="cabin_class" id="input-cabin_class"
                                                value="Economy">
                                            <div class="selections">
                                                <i class="fa-solid fa-basket-shopping me-2"></i><span
                                                    class="selected">{{$params->cabin_class ?? 'Economy'}}</span>
                                                <div class="caret"></div>
                                            </div>
                                            <ul class="menu">
                                                <li {{(isset($params->cabin_class) && $params->cabin_class ==='Economy') ? 'class="active"': '' }} >Economy</li>
                                                <li {{(isset($params->cabin_class) && $params->cabin_class ==='First') ? 'class="active"': '' }}>First</li>
                                                <li {{(isset($params->cabin_class) && $params->cabin_class ==='Business') ? 'class="active"': '' }}>Business</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="row gx-lg-2 gx-3">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                    <div class="form-group hdd-arrow mb-0">
                                        <select class="leaving form-control fw-bold" name="departure" required>
                                            <option value="">Select</option>
                                            @foreach($airports as $airport)
                                            <option {{(isset($params->departure) && $airport->iata_code === $params->departure) ? 'Selected': '' }} value="{{$airport->iata_code}}">({{$airport->iata_code}})
                                                {{$airport->name}} - {{$airport->iata_country_code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="btn-flip-icon mt-md-0">
                                        <button class="p-0 m-0 text-primary"><i
                                                class="fa-solid fa-right-left"></i></button>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-groupp hdd-arrow mb-0">
                                        <select class="goingto form-control fw-bold" name="arrival" required>
                                            <option value="">Select</option>
                                            @foreach($airports as $airport)
                                            <option {{(isset($params->arrival) && $airport->iata_code === $params->arrival) ? 'Selected': '' }} value="{{$airport->iata_code}}">({{$airport->iata_code}})
                                                {{$airport->name}} - {{$airport->iata_country_code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="row gx-lg-2 gx-3">
                                <div class="departure_date {{(isset($params->trip_type) && $params->trip_type === 'one_way')? 'col-xl-12 col-lg-12 col-md-12 col-sm-12': 'col-xl-6 col-lg-6 col-md-6 col-sm-6' }}">
                                    <div class="form-group mb-0">
                                        <input class="form-control fw-bold choosedate" type="text"
                                            name="departure_date" value="{{ $params->departure_date ?? '' }}" placeholder="Departure.." readonly="readonly">
                                    </div>
                                </div>
                                <div class="return_date col-xl-6 col-lg-6 col-md-6 col-sm-6 {{(isset($params->trip_type) && $params->trip_type === 'one_way')? 'd-none': '' }}" >
                                    <div class="form-group mb-0">
                                        <input class="form-control fw-bold choosedate" type="text"
                                            name="return_date" value="{{ $params->return_date ?? ''}}" placeholder="Return.." readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-12">
                            <div class="form-group mb-0">
                                <!-- <a href="/flight-list" class="btn btn-primary full-width fw-medium"><i
                                        class="fa-solid fa-magnifying-glass me-2"></i></a> -->
                                <button type="submit" class="btn btn-primary full-width fw-medium"><i
                                                class="fa-solid fa-magnifying-glass fs-5"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(".trip_type").on('click', function() {
        var trip_type = $('.trip_type:checked').val();
        tripType(trip_type);
    })

    const tripType = (trip_type) => {
        if (trip_type === "one_way") {
            $('input[name="return_date"]').val('');
            $(".departure_date").removeClass("col-xl-6 col-lg-6 col-md-6 col-sm-6")
            $(".return_date").hide();
        } else {
            $(".departure_date").addClass("col-xl-6 col-lg-6 col-md-6 col-sm-6")
            $(".departure_date").removeClass('col-xl-12 col-lg-12 col-md-12 col-sm-12');
            $(".return_date").removeClass('d-none');
            $(".return_date").show();
        }
    }

    var trip_type = $('.trip_type:checked').val();
    tripType(trip_type);
</script>