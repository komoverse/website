<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-1 text-center">
    <div class="max-w-7xl mx-auto px-6">
        <div class="rounded-lg bg-yellow-100">
            <div class="d-inline-flex items-center justify-between flex-wrap p-1">
                <div class="w-0 flex-1 items-center hidden md:inline">
                    <span class="ml-3 cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </span>
                </div>
                <div class="flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <a class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center rounded-md text-sm fs-7 ms-2 btn btn-secondary">
                        {{ trans('cookie-consent::texts.agree') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
