@include('partials._header')

<section class="bg-gray-50">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <a class="flex items-center mb-6 text-2xl font-semibold text-rose-800"
            href="/"
            style="font-weight: 400; letter-spacing: 0.4px"
            > Hired<span style="color: rgb(39, 62, 172); font-weight: normal">Hub</span>
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl" style="font-family: 'Inter', 'Poppins' !important;">
                  Register Now!
                </h1>
                <p class="text-sm font-light text-gray-500" style="margin-top: 0 !important" style="font-family: 'Inter', 'Poppins' !important;">
                    Aldready have an account? <a href="/login" class="font-medium text-blue-600 hover:underline" style="font-family: 'Inter', 'Poppins' !important;">Sign in</a>
                </p>
                <form class="space-y-4 md:space-y-6" action="/register" method="POST">
                @csrf
                    <div>
                        @error('name')
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900" style="font-family: 'Inter', 'Poppins' !important;">Your name</label>
                            <input value="{{ old('name') }}" type="text" name="name" id="name" class="bg-gray-50 border border-red-500 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" style="font-family: 'Inter', 'Poppins' !important;">
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @else
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900" style="font-family: 'Inter', 'Poppins' !important;">Your name</label>
                            <input value="{{ old('name') }}" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" style="font-family: 'Inter', 'Poppins' !important;">
                        @enderror
                    </div>
                    <div>
                        @error('email')
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900" style="font-family: 'Inter', 'Poppins' !important;">Your email</label>
                            <input value="{{ old('email') }}" type="email" name="email" id="email" class="bg-gray-50 border border-red-500 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" style="font-family: 'Inter', 'Poppins' !important;">
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @else
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900" style="font-family: 'Inter', 'Poppins' !important;">Your email</label>
                            <input value="{{ old('email') }}" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" style="font-family: 'Inter', 'Poppins' !important;">
                        @enderror
                    </div>
                    <div>
                        @error('password')
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900" style="font-family: 'Inter', 'Poppins' !important;">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-red-500 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" style="font-family: 'Inter', 'Poppins' !important;">
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @else
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900" style="font-family: 'Inter', 'Poppins' !important;">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" style="font-family: 'Inter', 'Poppins' !important;">
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900" style="font-family: 'Inter', 'Poppins' !important;">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" style="font-family: 'Inter', 'Poppins' !important;">
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" style="font-family: 'Inter', 'Poppins' !important;">Sign up</button>
                </form>
                <div class="inline-flex items-center justify-center w-full">
                    <hr class="w-full h-px my-8 bg-gray-200 border-0">
                    <span class="absolute px-3 font-medium text-gray-500 -translate-x-1/2 bg-white left-1/2" style="font-family: 'Inter', 'Poppins' !important;">or</span>
                </div>
                <div class="flex flex-col" style="margin-top: 18px !important;">
                    <a href="/auth/github/redirect" style="font-family: 'Inter', 'Poppins' !important;" class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
                        <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                        Sign in with Github
                    </a>
                    <a href="/auth/google/redirect" style="font-family: 'Inter', 'Poppins' !important;" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                        Sign up with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials._footer')