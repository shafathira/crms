<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'crms') }}</title>

        @include('partials.stylesheet')

        </head>
    <body>
        <div class="wrapper">

            {{-- @include('partials.sidebar') --}}

            <div class="main-panel">

                {{-- @include('partials.navbar') --}}

                <div class="content">
                    <div class="container-fluid">

                     @yield('content')

                    </div>
                </div>

            {{-- @include('partials.footer') --}}
            </div>
        </div>


        @include('partials.script')
    </body>
</html>
