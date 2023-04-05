@include('partials._header')

<div class="max-w-screen-xl flex gap-3 flex-wrap justify-center mx-auto p-4 xl:px-0">
    <div class="w-full mt-3 flex justify-between">
        <a href="/" class="text-black focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
            </svg>
            Back
        </a>
    </div>
    <div class="w-full block bg-white border border-gray-200 rounded-lg shadow">
        <img src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('/images/laravel.avif') }}" alt="{{ $listing->title }}" class="rounded-t-lg md:rounded-t-none mx-auto md:h-[320px]"/>
        <div class="p-3 text-center">
            <h5 style="font-family: 'Inter', 'Poppins' !important;" class="mb-0 text-2xl font-normal tracking-tight text-gray-900 max-h-8 overflow-hidden">{{ $listing->title }}</h5>
            <h5 class="mb-0 text-lg font-bold tracking-wide text-gray-900 max-h-8 overflow-hidden">{{ $listing->company }}</h5>

            <x-listing-tags :tagsCSV="$listing->tags" class="mt-4 justify-center"/>

            <p class="mt-0 w-full flex justify-center text-wrap py-1 text-sm !leading-[24px] font-medium text-indigo-500 !max-h-8 !overflow-hidden">
                <span class="!mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="currentColor" class="!w-6 !h-6 stroke-indigo-500">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </span>
                <span>{{ $listing->location }}</span>
            </p>

            <div class="inline-flex items-center justify-center w-full">
                <hr class="!w-[90%] h-[2px] my-8 bg-gray-200 border-0 rounded">
                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-700" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
                </div>
            </div>

            <h5 class="mt-2 mb-0 text-2xl font-semibold tracking-wide text-gray-900 max-h-8 overflow-hidden">Job Description</h5>
            <p style="font-family: 'Inter', 'Poppins' !important;" class="!w-[75%] text-left whitespace-pre-line mx-auto text-sm my-3 font-normal text-gray-700">{{ $listing->description }}</p>
    
            <div class="w-full mt-6">
                <a href="mailto:{{ $listing->email }}" class="!w-[75%] text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center">
                    <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"></path>
                        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"></path>
                    </svg>
                    Contact Employer
                </a>
            </div>
            <div class="w-full mt-3">
                <a href="{{ $listing->website }}" class="!w-[75%] text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center">
                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M16.555 5.412a8.028 8.028 0 00-3.503-2.81 14.899 14.899 0 011.663 4.472 8.547 8.547 0 001.84-1.662zM13.326 7.825a13.43 13.43 0 00-2.413-5.773 8.087 8.087 0 00-1.826 0 13.43 13.43 0 00-2.413 5.773A8.473 8.473 0 0010 8.5c1.18 0 2.304-.24 3.326-.675zM6.514 9.376A9.98 9.98 0 0010 10c1.226 0 2.4-.22 3.486-.624a13.54 13.54 0 01-.351 3.759A13.54 13.54 0 0110 13.5c-1.079 0-2.128-.127-3.134-.366a13.538 13.538 0 01-.352-3.758zM5.285 7.074a14.9 14.9 0 011.663-4.471 8.028 8.028 0 00-3.503 2.81c.529.638 1.149 1.199 1.84 1.66zM17.334 6.798a7.973 7.973 0 01.614 4.115 13.47 13.47 0 01-3.178 1.72 15.093 15.093 0 00.174-3.939 10.043 10.043 0 002.39-1.896zM2.666 6.798a10.042 10.042 0 002.39 1.896 15.196 15.196 0 00.174 3.94 13.472 13.472 0 01-3.178-1.72 7.973 7.973 0 01.615-4.115zM10 15c.898 0 1.778-.079 2.633-.23a13.473 13.473 0 01-1.72 3.178 8.099 8.099 0 01-1.826 0 13.47 13.47 0 01-1.72-3.178c.855.151 1.735.23 2.633.23zM14.357 14.357a14.912 14.912 0 01-1.305 3.04 8.027 8.027 0 004.345-4.345c-.953.542-1.971.981-3.04 1.305zM6.948 17.397a8.027 8.027 0 01-4.345-4.345c.953.542 1.971.981 3.04 1.305a14.912 14.912 0 001.305 3.04z"></path>
                    </svg>
                    Visit Website
                </a>
            </div>
        </div>
    </div>
</div>

@include('partials._footer')