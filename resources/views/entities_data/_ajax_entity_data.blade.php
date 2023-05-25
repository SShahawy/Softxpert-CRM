{{-- {!! Form::select('1',
   ['' => '--- Add Locations ---'] + [isset($locations) ? '' : $location['start_data'][0]->id => isset($locations) ? '' : $location['start_data'][0]->name] ,
    empty($location_id) ? NULL : $location_id, [
    'id' => 'location_id',
    'onchange' => 'onChangeLocationId(this)',
    'class' => 'form-control',
    'required' => true,
    'autocomplete' => 'off',
]) !!} --}}
<input type="text" class="block w-full mt-1 rounded-md">
<span class="input-group-btn">
    <button type="button" class="btn btn-primary" onclick="addLocations()">
        <i class="fa fa-map-marker"></i>
        Add Locations
    </button>
</span>