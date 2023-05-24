<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Attribute Create') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <form method="POST" action="{{ route('attributes.store') }}">
                      @csrf
                      <div class="mb-6">
                          <label class="block">
                              <span class="text-gray-700">Entity Name</span>
                              <input type="text" name="name"
                                  class="block w-full @error('name') border-red-500 @enderror mt-1 rounded-md"
                                  placeholder="" value="{{old('name')}}" />
                          </label>
                          @error('name')
                          <div class="text-sm text-red-600">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mb-6">
                          <label class="block">
                              <span class="text-gray-700">Entity</span>
                              <select name="entities_id" id="" class="block w-full mt-1 rounded-md">
                                @foreach($entities as $entity)
                                <option value="{{ $entity->id }}">
                                  {{$entity->name}}

                                </option>
                                @endforeach
                              </select>
                              {{-- <input type="text" name="slug"
                                  class="block w-full @error('slug') border-red-500 @enderror mt-1 rounded-md"
                                  placeholder="" value="{{old('slug')}}" /> --}}
                          </label>
                          
                      </div>
                      <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Data</span>
                            <select name="datatype_id" id="" class="block w-full mt-1 rounded-md">
                              @foreach($datatypes as $datatype)
                              <option value="{{ $datatype->id }}">
                                {{$datatype->type}}

                              </option>
                              @endforeach
                            </select>
                            {{-- <input type="text" name="slug"
                                class="block w-full @error('slug') border-red-500 @enderror mt-1 rounded-md"
                                placeholder="" value="{{old('slug')}}" /> --}}
                        </label>
                        
                    </div>
                      <button type="submit"
                          class=" bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>