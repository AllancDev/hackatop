<x-auth-layout>

    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="{{ route('login') }}" action="{{ route('password.request') }}">
        @csrf
        <div class="text-center mb-15">
            <img src="{{ asset('assets/media/system/logo.png') }}" alt="">
        </div>

        <div class="text-center mb-10">
            <h1 class="text-gray-900 fw-bolder mb-3">
                Esqueceu sua senha ?
            </h1>

            <div class="text-gray-500 fw-semibold fs-6">
                Digite seu email para redefinir a senha.
            </div>
        </div>

        <div class="fv-row mb-8">
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value="demo@codash.com"/>
        </div>

        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                @include('partials/general/_button-indicator', ['label' => 'Enviar'])
            </button>

            <a href="{{ route('login') }}" class="btn btn-light">Cancelar</a>
        </div>
    </form>

</x-auth-layout>
