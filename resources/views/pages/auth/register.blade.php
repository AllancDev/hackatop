<x-auth-layout>

    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="{{ route('login') }}" action="{{ route('register') }}">
        @csrf
        <div class="text-center mb-15">
            <img src="{{ asset('assets/media/system/logo.png') }}" alt="">
        </div>

        <div class="separator separator-content my-14">
            <span class="w-300px text-gray-500 fw-semibold fs-7">Registre-se com seu e-mail</span>
        </div>

        <!--begin::Input group--->
        <div class="fv-row mb-8">
            <input type="text" placeholder="Nome Completo" name="name" autocomplete="off" class="form-control bg-transparent"/>
        </div>

        <div class="fv-row mb-8">
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/>
        </div>

        <div class="fv-row mb-8" data-kt-password-meter="true">
            <div class="mb-1">
                <div class="position-relative mb-3">
                    <input class="form-control bg-transparent" type="password" placeholder="Senha" name="password" autocomplete="off"/>

                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>

                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
            </div>

            <div class="text-muted">
                Utilize 8 ou mais caracteres, incluindo letras, números e símbolos.
            </div>
            <!--end::Hint-->
        </div>

        <div class="fv-row mb-8">
            <input placeholder="Confirme sua senha" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent"/>
        </div>
        <!--end::Input group--->

        <!--begin::Input group--->
        <div class="fv-row mb-10">
            <div class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1"/>

                <label class="form-check-label fw-semibold text-gray-700 fs-6">
                    Concordar com os

                    <a href="#" class="ms-1 link-primary">Termos e Condições</a>.
                </label>
            </div>
        </div>

        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                @include('partials/general/_button-indicator', ['label' => 'Criar conta'])
            </button>
        </div>

        <div class="text-gray-500 text-center fw-semibold fs-6">
            Já tem uma conta?

            <a href="/login" class="link-primary fw-semibold">
                Entrar
            </a>
        </div>
        <!--end::Sign up-->
    </form>
    <!--end::Form-->

</x-auth-layout>
