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
                          href="{{ route('entities.create') }}">{{ __('Add Entity') }}</a>
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
                                    Attribute Name
                                </th>
                                  <th scope="col" class="px-6 py-3">
                                    Data
                                </th>
                                  
                                  <th scope="col" class="px-6 py-3">
                                      Entity
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
                              @foreach ($entity_data as $entity)
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                  <th scope="row"
                                      class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                      {{$entity->id}}
                                  </th>
                                  <td class="px-6 py-4">
                                    {{ $entity->attribute()->get('name')[0]->name }}
                                  </td>
                                  <td class="px-6 py-4">
                                    {{$entity->data}}

                                </td>
                                
                                  <td class="px-6 py-4">
                                    {{ $entity->entity()->get('name')[0]->name }}
                                  </td>
                          @if(Auth::user()->role)

                                  <td class="px-6 py-4">
                                      <a href="{{ route('entities.edit',$entity->id) }}">Edit</a>
                                  </td>
                                  <td class="px-6 py-4">
                                      <form action="{{ route('entities.destroy',$entity->id) }}" method="POST"
                                          onsubmit="return confirm('{{ trans('Whyyyy are you deleting ? ') }}');"
                                          style="display: inline-block;">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <input type="submit" class="px-4 py-2 text-white bg-red-700 rounded"
                                              value="Delete">
                                      </form>
                                  </td>
                                  @endif
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      {{ $entity_data->links() }}
                  </div>

              </div>
          </div>
      </div>
  </div>
</x-app-layout>