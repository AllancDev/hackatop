<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">GERAL</span>
                </div>
                <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ request()->routeIs('company') ? 'active' : '' }}" href="{{ route('company') }}" target="_blank">
                    <span class="menu-icon">{!! getIcon('chart-simple', 'fs-2') !!}</span>
                    <span class="menu-title">Painel</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ request()->routeIs('company') ? 'active' : '' }}" href="#" target="_blank">
                    <span class="menu-icon">{!! getIcon('dots-square', 'fs-2') !!}</span>
                    <span class="menu-title">Collabs</span>
                </a>
                <!--end:Menu link-->
            </div>

            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ request()->routeIs('company') ? 'active' : '' }}" href="#" target="_blank">
                    <span class="menu-icon">{!! getIcon('chart', 'fs-2') !!}</span>
                    <span class="menu-title">Tendências de mercado</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ request()->routeIs('company') ? 'active' : '' }}" href="#" target="_blank">
                    <span class="menu-icon">{!! getIcon('chart-line-up', 'fs-2') !!}</span>
                    <span class="menu-title">Ranking</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">CONFIGURAÇÕES</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link {{ request()->routeIs('company') ? 'active' : '' }}" href="{{ route('company') }}" target="_blank">
					<span class="menu-icon">{!! getIcon('chart-line-down', 'fs-2') !!}</span>
					<span class="menu-title">Informações da Empresa</span>
				</a>
				<!--end:Menu link-->
			</div>
            <!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link {{ request()->routeIs('company') ? 'active' : '' }}" href="#" target="_blank">
					<span class="menu-icon">{!! getIcon('user', 'fs-2') !!}</span>
					<span class="menu-title">Usuários</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
            <!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link {{ request()->routeIs('company') ? 'active' : '' }}" href="#" target="_blank">
					<span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
					<span class="menu-title">Permissões</span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<!--end:Menu item-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
