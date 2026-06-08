<header class="nxl-header">
    <div class="header-wrapper">
        <div class="header-left d-flex align-items-center gap-4">
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>
            
            {{-- Global Search Trigger (Removed) --}}
        </div>

        <div class="header-right ms-auto">
            <div class="d-flex align-items-center gap-1 gap-md-2 gap-lg-3">
                {{-- Branch Switcher --}}
                @if(!auth()->user()->hasRole('super_admin'))
                    <livewire:lab.branch-switcher />
                @endif

                {{-- Subscription Timer --}}
                @php
                    $company = auth()->user()->company;
                    $daysLeft = $company && $company->trial_ends_at ? now()->diffInHours($company->trial_ends_at, false) / 24 : 0;
                    $daysLeftInt = max(0, ceil($daysLeft));
                    $isExpiringSoon = $daysLeftInt <= 7;
                @endphp

                @if($company && auth()->user()->hasAnyRole(['lab_admin', 'staff', 'branch_admin']))
                    <div class="d-none d-xl-flex align-items-center me-3 px-3 py-2 rounded-pill border-0 transition-all" style="background-color: #f4f7fe;">
                        <div class="text-primary me-2 flex-shrink-0">
                            <i class="feather-zap fs-14"></i>
                        </div>
                        <div class="me-3 flex-shrink-0" style="border-right: 1px solid rgba(0,0,0,0.05); padding-right: 12px;">
                            <span class="fs-9 fw-bold text-uppercase text-muted ls-1 d-block mb-0" style="font-size: 8px !important;">Current Plan</span>
                            <span class="fs-12 fw-bolder text-dark">{{ $company->plan->name ?? 'Professional' }}</span>
                        </div>
                        <div class="flex-shrink-0 text-center">
                            <span class="fs-10 fw-bold text-uppercase {{ $isExpiringSoon ? 'text-danger pulse-once' : 'text-success' }} ls-1 d-block mb-0">
                                {{ $daysLeftInt > 0 ? $daysLeftInt . ' Days Left' : 'Expired' }}
                            </span>
                            <span class="fs-10 fw-medium text-muted" style="font-size: 9px !important;">Active Trial</span>
                        </div>
                    </div>
                @endif

                <div class="nxl-h-item d-none d-sm-flex">
                    <div class="full-screen-switcher">
                        <a href="javascript:void(0);" class="nxl-head-link me-0"
                            onclick="$('html').fullScreenHelper('toggle');">
                            <i class="feather-maximize maximize"></i>
                            <i class="feather-minimize minimize"></i>
                        </a>
                    </div>
                </div>

                @if(!auth()->user()->patientProfile)
                <div class="nxl-h-item dark-light-theme">
                    <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                        <i class="feather-moon"></i>
                    </a>
                    <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                        <i class="feather-sun"></i>
                    </a>
                </div>
                @endif

                <div class="dropdown nxl-h-item" style="position: relative;">
                    @php
                        $userPhoto = auth()->user()->details->profile_photo ?? null;
                        $avatarUrl = $userPhoto 
                            ? Storage::url($userPhoto) 
                            : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=3b71ca&color=fff&bold=true';
                    @endphp
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-display="static" role="button" data-bs-auto-close="outside">
                        <img src="{{ $avatarUrl }}" alt="user-image"
                            class="img-fluid user-avtar me-0 rounded-circle border border-white shadow-sm" style="width: 40px; height: 40px; object-fit: cover;" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow-xl border-0 rounded-4 p-0" style="min-width: 280px; overflow: hidden; position: absolute; right: 0; left: auto; top: 100%; margin-top: 10px;">
                        <div class="p-3 position-relative" style="background: linear-gradient(135deg, #0b1437 0%, #1a2a6c 100%) !important;">
                            <div class="position-absolute top-0 end-0 p-2 opacity-25">
                                <i class="feather-user" style="font-size: 40px; color: white;"></i>
                            </div>
                            <div class="d-flex align-items-center gap-3 position-relative z-index-1">
                                <img src="{{ $avatarUrl }}" alt="user-image"
                                    class="img-fluid user-avtar rounded-circle border border-white border-2 shadow" style="width:48px; height:48px; object-fit: cover;" />
                                <div class="overflow-hidden">
                                    <h6 class="text-white fw-bold mb-0 text-truncate" style="font-size: 14px; max-width: 150px;">{{ auth()->user()->name }} 
                                        @if($company && isset($company->plan))
                                        <span class="badge bg-white text-primary ms-1 px-1 py-0 rounded" style="font-size: 9px; vertical-align: top;">
                                            {{ $company->plan->name ?? 'Free' }}
                                        </span>
                                        @endif
                                    </h6>
                                    <span class="text-white opacity-75 d-block text-truncate mt-1" style="font-size: 11px; max-width: 160px;">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-2" style="background-color: #f8f9fa;">
                            @php
                                $isInternalStaff = auth()->user()->hasAnyRole(['lab_admin', 'staff', 'branch_admin']);
                                $profileRoute = $isInternalStaff ? 'lab.profile' : 'partner.profile';
                                $settingsRoute = $isInternalStaff ? 'lab.settings' : 'partner.profile';
                            @endphp
                            <a href="{{ route($profileRoute) }}" wire:navigate class="d-flex align-items-center gap-3 p-2 rounded-2 mb-1 text-decoration-none transition-all border border-transparent hover-bg-white hover-shadow-sm">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-soft-primary text-primary flex-shrink-0" style="width: 28px; height: 28px;">
                                    <i class="feather-user" style="font-size: 12px;"></i>
                                </div>
                                <span class="fw-bold text-dark m-0 p-0" style="font-size: 12px;">Profile Details</span>
                            </a>
                            <a href="{{ route($settingsRoute) }}" wire:navigate class="d-flex align-items-center gap-3 p-2 rounded-2 mb-1 text-decoration-none transition-all border border-transparent hover-bg-white hover-shadow-sm">
                                <div class="rounded-circle d-flex align-items-center justify-content-center bg-soft-info text-info flex-shrink-0" style="width: 28px; height: 28px;">
                                    <i class="feather-settings" style="font-size: 12px;"></i>
                                </div>
                                <span class="fw-bold text-dark m-0 p-0" style="font-size: 12px;">Account Settings</span>
                            </a>
                            
                            <div class="dropdown-divider my-2 mx-2"></div>
                            
                            <form method="POST" action="{{ route('logout') }}" id="logout-form-header">
                                @csrf
                                <button type="submit" class="w-100 bg-transparent border-0 text-start d-flex align-items-center gap-3 p-2 rounded-2 text-decoration-none transition-all border border-transparent hover-bg-white hover-shadow-sm">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center bg-soft-danger text-danger flex-shrink-0" style="width: 28px; height: 28px;">
                                        <i class="feather-log-out" style="font-size: 12px;"></i>
                                    </div>
                                    <span class="fw-bold text-danger m-0 p-0" style="font-size: 12px;">Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Modal Backdrop & Global Blur: Remove blur effect */
        .modal-backdrop.show {
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
            background-color: rgba(0, 0, 0, 0.4) !important;
        }

        body.modal-open .nxl-container, 
        body.modal-open .nxl-navigation, 
        body.modal-open .nxl-header {
            filter: none !important;
            backdrop-filter: none !important;
        }

        /* Search Trigger Refinement */
        .search-form-group {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0,0,0,0.1) !important;
        }
        .search-form-group:hover, .search-form-group:focus-within {
            border-color: var(--bs-primary) !important;
            background: white !important;
            box-shadow: 0 4px 15px rgba(var(--bs-primary-rgb), 0.1) !important;
            transform: scale(1.02);
        }

        .avatar-text.rounded-3 { border-radius: 10px !important; transition: all 0.3s ease; }
        .ls-2 { letter-spacing: 1px; }
        .transition-all { transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1); }
        
        /* Dropdown Alignment: Eliminate hover 'dead zone' with a pseudo-element bridge */
        .nxl-h-dropdown {
            margin-top: 10px !important;
            border: 1px solid rgba(0,0,0,0.05) !important;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
            border-radius: 12px !important;
            overflow: visible !important; /* Allow pseudo-element to overflow for the hover bridge */
            background: white !important;
        }
        
        /* The Hover Bridge: Standardized for all header dropdowns */
        .nxl-h-dropdown::before {
            content: "";
            position: absolute;
            top: -20px; /* Increased coverage to ensure it overlaps the trigger */
            left: 0;
            right: 0;
            height: 20px;
            background: transparent;
            z-index: -1;
        }

        /* Explicitly keep dropdown open on hover for supported themes */
        @media (min-width: 992px) {
            .nxl-h-item.dropdown:hover > .dropdown-menu {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }
        }


        /* Pulse Animation for Expiring Subscription */
        .pulse-once {
            animation: pulse-red 2s infinite;
        }
        @keyframes pulse-red {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); color: #dc3545; }
            100% { transform: scale(1); }
        }
    </style>
</header>
