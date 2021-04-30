<!DOCTYPE html>
<html>
<head>
    @include('system._components.metas')
    @include('system._components.styles')
    @yield('page-styles')
    
</head>

<body>  
        @yield('content')

        @include('system._components.scripts')
        @yield('page-scripts')
</body>
</html>