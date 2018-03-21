<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include("partials.head")

<body>
    @yield("content")

    <footer>
        @include("partials.footer")
    </footer>
</body>


</html>