<x-auth-layout>

    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{ route('dashboard') }}" action="{{ route('login') }}">
        @csrf
        <div class="text-center mb-15">
            <img src="{{ asset('assets/media/system/logo.png') }}" alt="">
        </div>

        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value="demo@codash.com"/>
        </div>

        <div class="fv-row mb-3">
            <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value="codash"/>
        </div>

        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>

            <a href="{{ route('password.request') }}" class="link-primary">
                Esqueceu a senha ?
            </a>
        </div>

        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                @include('partials/general/_button-indicator', ['label' => 'Entrar'])
            </button>
        </div>

        <div class="text-gray-500 text-center fw-semibold fs-5">
            Desfrute de benefícios exclusivos!

            <a href="{{ route('register') }}" class="link-primary">
                Registre-se
            </a>
            agora e faça parte.
        </div>
    </form>

</x-auth-layout>
