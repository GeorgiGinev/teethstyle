@section('footer')
    <footer class="footer">
        <div class="flex-grow-1">
            <a class="logo" title="@lang('basic.logo')" href="{{route('index')}}">
                @lang('basic.website')
            </a>
            <div class="reserved">
                <p class="font-weight-bold">
                    @lang('basic.rights_reserved')
                </p>
            </div>
        </div>
        <div class="flex-grow-0">
            <ul class="footer-menu">
                <li>
                    <a href="#" title="@lang('basic.privacy_policy')">
                        @lang('basic.privacy_policy')
                    </a>
                </li>
                <li>
                    <a href="{{route('termsAndConditions')}}" title="@lang('basic.terms_conditions')">
                        @lang('basic.terms_conditions')
                    </a>
                </li>
            </ul>
        </div>
    </footer>
@endsection
