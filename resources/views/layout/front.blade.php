@extends('layout.master')

@section('navbar')
    <section class="hero is-dark is-bold is-fullheight">
        <div class="particles-filter mobile--hidden"></div>
        <div id="particles" class="mobile--hidden">
            <vue-particles
                :particles-number="10"
            ></vue-particles>
        </div>
        <div class="hero-head">
            @include('layout.navbar')
        </div>
@endsection

@section('body')

<section class="hero-body">
    <div class="container">
        @yield('content')

    </div>
</section>

@endsection


@section('footer')
        <section class="hero-footer">
            <footer>
                Cryptovault &copy; <span id="date"></span>
            </footer>
        </section>
    </section>
@endsection

@section('foot')

    @yield('scripts')

    <script src="{{ asset('js/front.js') }}"></script>

@endsection
