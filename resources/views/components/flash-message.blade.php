@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" id="toast-bottom-left" class="fixed flex justify-between items-center w-full max-w-xs p-4 space-x-4 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 text-white divide-x divide-gray-200 rounded-lg shadow bottom-5 left-5" role="alert">
        <div class="text-sm font-normal tracking-wide">{{ session('message') }}</div>
        <button @click="show=false" type="button" class="!border-l-[0px] ml-auto -mx-1.5 -my-1.5 rounded-lg p-1.5 inline-flex h-8 w-8" data-dismiss-target="#toast-notification" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
@endif