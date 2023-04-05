@include('partials._header')

<div class="max-w-screen-xl mx-auto p-4 xl:px-0">
    @unless (count($listings) === 0) 
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="block md:flex items-center justify-between pb-4">
                <div class="w-full text-center md:w-auto md:text-left">
                    <h5 class="pl-2 text-2xl uppercase font-semibold tracking-wide">Manage Listings</h5>
                </div>
                
                <div class="relative md:mx-0 mx-auto w-80 mt-2 md:mt-0">
                    <form action="/listings/manage" method="GET">
                    @csrf
                        <button type="submit" class="absolute inset-y-0 left-0 flex items-center pl-3 pointer">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </button>
                        <input name="search" type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:outline-none" placeholder="Search for title...">
                    </form>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Company Name</th>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listings as $listing)
                        <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $listing->company }}</th>
                            <td class="px-6 py-4 text-gray-900">{{ $listing->title }}</td>
                            <td class="px-6 py-4">
                                <a href="/listings/{{ $listing->id }}/edit" class="inline-flex font-medium text-blue-600 hover:underline">
                                        <svg class="mr-1 w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                    </svg>
                                Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="/listings/{{ $listing->id }}" method="POST" class="inline-flex justify-center items-center">
                                @method('DELETE')
                                @csrf
                                    <button type="submit" class="inline-flex font-medium text-red-600 hover:underline">
                                        <svg class="mr-1 w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                        </svg>
                                    Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="paginator" class="w-full max-w-screen-xl flex justify-between items-center mt p-4">{{ $listings->links() }}</div>
        </div>
    @else
        <p style="font-family: 'Inter', 'Poppins' !important;" class="text-center mb-3 font-bold text-gray-700 max-h-6 overflow-hidden">No Listing Found!</p>
    @endunless
</div>

@include('partials._footer')