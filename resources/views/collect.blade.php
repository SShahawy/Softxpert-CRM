<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Entity') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <div class="mt-1 mb-4">
                      <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                          href="{{ route('systems.create') }}">{{ __('Add System') }}</a>
                  </div>
                  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                          <thead
                              class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                              <tr>
                                  <th scope="col" class="px-6 py-3">
                                      #
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      System
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Entity
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Attribute
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Attribute Data
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Type
                                  </th>


                          @if(Auth::user()->role)
                                  <th scope="col" class="px-6 py-3">
                                      Edit
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Delete
                                  </th>
                                  @endif
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($data as $d)

                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                  <th scope="row"
                                      class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                      {{$d->id}}
                                  </th>
                                  <td class="px-6 py-4">
                                      {{$d->name}}

                                  </td>
                                  <td class="px-6 py-4">
                                      {{$d->entity_name}}

                                  </td>
                                  <td class="px-6 py-4">
                                      {{$d->att_name}}

                                  </td>
                                  <td class="px-6 py-4">
                                      {{$d->data}}

                                  </td>
                                  <td class="px-6 py-4">
                                      {{strtoupper(dataTypeTranslator($d->datatype_id))}}

                                  </td>

                                  
                                  {{-- <td class="px-6 py-4">
                                      {{$system->system()->get('name')[0]->name}}

                                  </td> --}}
                                  

                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      {{ $data->links() }}
                  </div>

              </div>
          </div>
      </div>
  </div>
</x-app-layout>