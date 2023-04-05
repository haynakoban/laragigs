@include('partials._header')

<div class="m-8 w-full max-w-lg mx-auto p-8 border shadow-md rounded-md">
    <div class="text-center pb-5">
        <a class="mb-6 text-2xl font-semibold text-rose-800"
            href="/"
            style="font-weight: 400; letter-spacing: 0.4px"
            > Hired<span style="color: rgb(39, 62, 172); font-weight: normal">Hub</span>
        </a>
        <div class="p-2 space-y-4 md:space-y-6 sm:p-4">
            <h1 class="text-xl uppercase font-medium leading-tight tracking-wide text-gray-900 md:text-2xl">
                Create a freelance gig
            </h1>
            <p class="text-sm capitalize font-normal tracking-wide text-gray-500" style="margin-top: 0 !important" style="font-family: 'Inter', 'Poppins' !important;">
                Post a job listing to hire a skilled developer
            </p>
        </div>
    </div>
    <form method="POST" action="/listings" enctype="multipart/form-data">
    @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('company')
                    <label for="company" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Company Name
                    </label>
                    <input value="{{ old('company') }}" id="company" name="company" type="text" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="company" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Company Name
                    </label>
                    <input value="{{ old('company') }}" id="company" name="company" type="text" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('image')
                    <label for="image" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Company Logo
                    </label>
                    <input id="image" name="image" type="file" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="image" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Company Logo
                    </label>
                    <input id="image" name="image" type="file" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('title')
                    <label for="title" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Job Title
                    </label>
                    <input value="{{ old('title') }}" id="title" name="title" type="text" placeholder="Example: Senior Laravel Developer" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="title" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Job Title
                    </label>
                    <input value="{{ old('title') }}" id="title" name="title" type="text" placeholder="Example: Senior Laravel Developer" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('location')
                    <label for="location" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Job Location
                    </label>
                    <input value="{{ old('location') }}" id="location" name="location" type="text" placeholder="Example: Tarlac, Philippines, Etc" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="location" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Job Location
                    </label>
                    <input value="{{ old('location') }} "id="location" name="location" type="text" placeholder="Example: Tarlac, Philippines, Etc" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @enderror 
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('email')
                    <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Contact Email
                    </label>
                    <input value="{{ old('email') }}" id="email" name="email" type="email" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Contact Email
                    </label>
                    <input value="{{ old('email') }}" id="email" name="email" type="email" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('website')
                    <label for="website" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Website/Application URL
                    </label>
                    <input value="{{ old('website') }}" id="website" name="website" type="text" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="website" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Website/Application URL
                    </label>
                    <input value="{{ old('website') }}" id="website" name="website" type="text" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('tags')
                    <label for="tags" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Tags (Comma Seperated)
                    </label>
                    <input value="{{ old('tags') }}" id="tags" name="tags" type="text" placeholder="Example: Laravel, Frontend, Backend, etc" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="tags" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Tags (Comma Seperated)
                    </label>
                    <input value="{{ old('tags') }}" id="tags" name="tags" type="text" placeholder="Example: Laravel, Frontend, Backend, etc" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @error('description')
                    <label for="description" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Job Description
                    </label>
                    <textarea id="description" name="description" placeholder="Include tasks, requirements, salary, etc" rows="4" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">{{ old('description') }}</textarea>
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @else
                    <label for="description" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Job Description
                    </label>
                    <textarea id="description" name="description" placeholder="Include tasks, requirements, salary, etc" rows="4" style="font-family: 'Inter', 'Poppins' !important;" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">{{ old('description') }}</textarea>
                @enderror
            </div>
        </div>
        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Save</button>
    </form>
</div>

@include('partials._footer')