<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Entity Data Create') }}
      </h2>
  </x-slot>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <form method="POST" action="{{ route('entity_data.store') }}">
                      @csrf
                      <?php $i =1; ?>
                      @foreach($attributes as $attribute_data)
                      <div class="mb-6">
                          <label class="block">
                              <span class="text-gray-700">{{ $attribute_data->name }}</span>
                              <input type="{{ dataTypeTranslator($attribute_data->datatype_id) }}" name="data[{{$i}}]"
                                  class="block w-full @error('name') border-red-500 @enderror mt-1 rounded-md"
                                  placeholder="" value="{{old('name')}}" />
                                  <input type="hidden" name="entityid[{{$i}}]"
                                  class="block w-full @error('name') border-red-500 @enderror mt-1 rounded-md"
                                  placeholder="" value="{{ $attribute_data->entities_id }}" />
                                  <input type="hidden" name="attribute[{{$i}}]"
                                  class="block w-full @error('name') border-red-500 @enderror mt-1 rounded-md"
                                  placeholder="" value="{{ $attribute_data->id }}" />
                                  <?php $i++; ?>
                                </label>
                                @error('name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                        @endforeach
                            
                      {{-- <div class="mb-6">
                          <label class="block">
                              <span class="text-gray-700">Entity</span>
                              <select name="entity_id" id="entity_id" class="block w-full @error('entity_id') border-red-500 @enderror mt-1 rounded-md">
                                
                                @foreach($entities as $entity)
                                <option value="{{ $entity->id }}">
                                  {{$entity->name}}

                                </option>
                                @endforeach
                              </select>
                              
                          </label>
                          @error('slug')
                          <div class="text-sm text-red-600">{{ $message }}</div>
                          @enderror
                      </div> --}}
                      <button type="submit"
                          class=" bg-blue-600 rounded text-sm px-5 py-2.5">Submit</button>

                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>