<div class="w-full md:max-w-[350px] lg:max-w-[480px] xl:max-w-[620px] block lg:flex bg-white border border-gray-200 rounded-lg shadow">
    <a href="/listings/{{ $listing->id }}">
        <img src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('/images/laravel.avif') }}" alt="{{ $listing->title }}" class="hidden md:block rounded-t-lg lg:rounded-tr-none lg:rounded-s-lg lg:max-w-[220px] lg:h-[100%]"/>
    </a>
    <div class="p-3">
        <a href="/listings/{{ $listing->id }}">
            <h5 style="font-family: 'Inter', 'Poppins' !important;" class="mb-0 text-2xl font-semibold tracking-tight text-gray-900 max-h-8 overflow-hidden">{{ $listing->title }}</h5>
        </a>
        <p style="font-family: 'Inter', 'Poppins' !important;" class="text-sm mb-3 font-normal text-gray-700 max-h-20 overflow-hidden">{{ $listing->description }}</p>
        
        <x-listing-tags :tagsCSV="$listing->tags" />
        <p class="w-full flex text-wrap py-1 text-sm !leading-[24px] font-medium text-indigo-500 !max-h-8 !overflow-hidden">
            <span class="!mr-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="currentColor" class="!w-6 !h-6 stroke-indigo-500">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
            </span>
            <span>{{ $listing->location }}</span>
        </p>
    </div>
</div>  