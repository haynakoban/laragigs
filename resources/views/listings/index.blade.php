@include('partials._header')

<div class="max-w-screen-xl flex flex-col md:flex-row items-center justify-between mx-auto p-4 xl:px-0">
    <form action="/" method="GET" class="w-[100%] md:w-[75%] lg:w-[85%]">   
    @csrf
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 focus:outline-none rounded-lg bg-gray-50" placeholder="Search Gigs, Job Title..." required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
    </form>
    <a href="/listings/create" class="md:block hidden focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5">Create Gig</a>
</div>

<div class="max-w-screen-xl flex gap-3 flex-wrap justify-center mx-auto p-4 xl:px-0">
    @unless (count($listings) === 0)
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing"/>      
        @endforeach

        <div id="paginator" class="w-full max-w-screen-xl flex justify-between items-center mt-6 p-4">{{ $listings->links() }}</div>
    @else
        <p style="font-family: 'Inter', 'Poppins' !important;" class="mb-3 font-bold text-gray-700 max-h-6 overflow-hidden">No Listing Found!</p>
    @endunless
    
</div>

@include('partials._footer')