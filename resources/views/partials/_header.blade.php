<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HiredHub {{ $title ? '| '.$title : ''}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
      
      *,
      *::before,
      ::after {
        font-family: 'Poppins', 'Roboto', Georgia, 'Times New Roman', Times, serif;
      }

      html {
        scroll-behavior: smooth;
      }

      hr {
        margin: 0 !important;
      }

      .burger {
        cursor: pointer;
      }

      #paginator > nav {
        display: flex;
        width: 100%;
        justify-content: space-between !important;
        align-items: center !important;
      }

      .navbar-toggler {
        border: none !important;
        padding: 0 !important;
      }

      .burger > div {
        background-color: #212121;
        width: 25px;
        height: 3px;
        margin: 5px;
        transition: all 0.3s ease;
      }

      .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
      }
      .toggle .line2 {
        opacity: 0;
      }
      .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
      }

      .person-data {
        font-size: 16px;
        letter-spacing: 1px;
      }

      .subject-data {
        font-size: 14px;
      }

      .header-data {
        font-size: 12px;
        letter-spacing: 1.5px;
      }

      #user-card {
        transition: all 500ms ease-in-out;
      }

      #user-card:hover div:first-child {
        border-radius: 0.5rem 0.5rem 0 0;
      }
      #user-card:hover div:last-child {
        border-radius: 0 0 0.5rem 0.5rem;
      }

      #user-card:hover,
      #user-card:hover div {
        background-color: #273eac !important;
        color: #f0f4f9;
      }

      #user-card:hover .card-body > h5,
      #user-card:hover .card-body > h5 > small {
        color: #fff !important;
      }

      #user-card:hover .card-body > div > small {
        background-color: transparent;
        color: #fff !important;
      }

      .btn-add-product:hover > svg {
        fill: #fff !important;
      }

      @media screen and (max-width: 575px) { 
        #show-sm {
          display: none !important;
        }

        #show-xs {
          display: block !important;
        }
      }

      @media screen and (min-width: 576px) { 
        #show-xs {
          display: none !important;
        }
      }
    </style>
  </head>
  <body>
    <nav x-data="{ open: false }" class="bg-white sticky w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 xl:px-0">
            <a
                class="flex items-center text-lg font-semibold text-rose-800"
                href="/"
                style="font-weight: 400; letter-spacing: 0.4px"
                >
                Hired<span style="color: rgb(39, 62, 172); font-weight: normal">Hub</span>
            </a>
            <div class="flex md:order-2">
                <ul class="hidden p-4 md:flex md:p-0 mt-4 font-medium border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    @auth
                      <li style="margin: 0 !important">
                        <p class="block py-2 px-4 text-[#212121] rounded">{{ auth()->user()->name }}</p>
                      </li>
                      <li style="margin: 0 !important">
                        <a href="/listings/manage" class="block py-2 px-4 text-[#273eac] rounded hover:text-white hover:bg-[#273eac]">Manage Listings</a>
                      </li>
                      <li style="margin: 0 !important">
                          <form action="/logout" method="POST" class="w-full"> 
                            @csrf
                            <button type="submit" class="w-full py-2 px-4 text-white bg-rose-800 rounded hover:bg-red-900">Log out</a>
                          </form>
                      </li>
                    @else
                      <li style="margin: 0 !important">
                          <a href="/register" class="block py-2 px-4 text-[#273eac] rounded hover:text-white hover:bg-[#273eac]">Sign Up</a>
                      </li>
                      <li style="margin: 0 !important">
                          <a href="/login" class="block py-2 px-4 text-white bg-rose-800 rounded hover:bg-red-900">Log In</a>
                      </li>
                    @endauth
                </ul>
                @auth
                  <p class="block md:hidden font-semibold py-2 px-4 text-[#212121] rounded">{{ auth()->user()->name }}</p>
                @endauth
                <button @click="open = !open" class="burger md:hidden">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </button>
            </div>
            <div x-show="open" class="items-center justify-between w-full block md:hidden md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col lg:p-0 mt-4 font-medium border rounded-lg lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0">
                    @auth
                      <li style="margin: 0 !important">
                        <a href="/listings/create" class="block py-2 px-4 text-[#273eac] rounded hover:text-white hover:bg-green-800">Create Gig</a>
                      </li>
                      <li style="margin: 0 !important">
                        <a href="/listings/manage" class="block py-2 px-4 text-[#273eac] rounded hover:text-white hover:bg-[#273eac]">Manage Listings</a>
                      </li>
                      <li style="margin: 0 !important">
                          <form action="/logout" method="POST" class="w-full"> 
                            @csrf 
                            <button type="submit" class="w-full text-left py-2 px-4 text-white bg-rose-800 rounded hover:bg-red-900">Log out</a>
                          </form>
                      </li>
                    @else
                      <li style="margin: 0 !important">
                          <a href="/register" class="block py-2 px-4 text-[#273eac] rounded hover:text-white hover:bg-[#273eac]">Sign Up</a>
                      </li>
                      <li style="margin: 0 !important">
                          <a href="/login" class="block py-2 px-4 text-white bg-rose-800 rounded hover:bg-red-900">Log In</a>
                      </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <hr style="margin: 0"/>