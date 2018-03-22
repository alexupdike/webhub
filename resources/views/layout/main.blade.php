<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include("partials.head")

<body>
    @include("components.navbar")
    @yield("content")

    <footer>
        @include("partials.footer")
    </footer>
</body>


</html>