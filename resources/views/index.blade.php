<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body id="page-top">
    
    <!-- Include Navigation-->
    @include('layouts.navbar')

    <!-- Masthead-->
    @include('layouts.header')
    
    <!-- Bagian Sponsor -->
    {{-- @include('layouts.sponsor') --}}

    {{-- Section including --}}
    @include('layouts.section')

     <!-- Portfolio Modals-->
     {{-- @include('layouts.portofolio') --}}

    {{-- file footer --}}
    @include('layouts.footer')

   

    {{-- Include script --}}
    @include('layouts.script')

</body>

</html>