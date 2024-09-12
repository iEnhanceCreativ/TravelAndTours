<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <div class="container">
        <div class="row">
            <label for="baggage" class="form-label">Add any extra baggage you need for your trip</label>
            <select class="form-select baggages" name="baggages[]" data-passenger="{{$passengerId}}">
                <option value="0">1 cabin bag and 1 checked bag included with ticket - $0.00 USD</option>
                @if($baggages)
                    @foreach($baggages->data->available_services as $baggage)
                        @if($baggage->passenger_ids[0] === $passengerId)
                        <option value="{{$baggage->id}}-{{$passengerId}}-{{$baggage->total_amount}}">
                            Checked Baggage - {{$baggage->metadata->maximum_weight_kg}}KG - ${{$baggage->total_amount}} ({{$baggage->total_currency}})
                        </option>
                        @endif
                    @endforeach
                @endif
            </select>
        </div>
        <!-- <div class="row">
            <div class="col-md-6">
                <p><strong>Weight:</strong> 23kg (50.7 lbs)</p>
            </div>
            <div class="col-md-6">
                <p><strong>Price:</strong> $26.30 USD</p>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Proceed</button> -->
    </div>
</div>