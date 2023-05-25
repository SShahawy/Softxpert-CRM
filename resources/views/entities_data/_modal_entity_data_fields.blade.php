<div class="modal fade" id="js-modal-entity-data" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple modal-center">
      <div class="modal-content" >
          <div class="modal-header">
              {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button> --}}
          </div>
          <div class="modal-body" >

                  <div id="modal-1">
                      <br>
                      <div class="form-group row alert alert-success d-none" id="js-div-d2d-notification">
                          <div class="col-sm-10">
                              <label id="js-label-d2d-verified-address"></label>
                              <input type="text" class="block w-full mt-1 rounded-md" id="js-hidden-d2d-confirm-address" value="" />
                          </div>
                          {{-- <div class="col-sm-2">
                              <button type="button" class="btn btn-primary btn-block" id="js-btn-save-d2d-address"  href="#modal-2" data-dismiss="modal" data-toggle="modal" onclick="next()">Fill</button>
                          </div> --}}
                      </div>
              {{-- @foreach ([
                      'd2d_location_name' => 'Name',
                      'd2d_start_address' => 'Start Address',
                      'd2d_city' => 'City',
                      'd2d_state' => 'State',
                      'd2d_zip' => 'Zip',
                      ] as $key => $value)
                  <div class="form-group row" id="js-div-{!! $key !!}">
                      {!! Form::label($key, $value.' : ', ['class' => 'col-sm-4 col-form-label text-right font-weight-bold required', ]) !!}
                      <div class="col-sm-7">
                          @if ($key == 'd2d_state')
                              {!! Form::select($key, ['' => '--- Select State ---'] + $states->pluck('name', 'name')->toArray(), NULL, ['class' => 'form-control', ]) !!}
                          @else
                              {!! Form::text($key, NULL, ['class' => 'form-control', ]) !!}
                          @endif
                      </div>
                  </div>
              @endforeach --}}


          <div class="modal-footer">
              <div class="modal-button-default">
                  {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                  <button type="button" class="btn btn-primary" id="js-btn-verify-start-location">Verify</button>
                  {{-- <button style="display: none;" href="#modal-2" type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" onclick="next()">Verify</button> --}}
              </div>
</div>
</div>
</div>
</div>
</div>
</div>