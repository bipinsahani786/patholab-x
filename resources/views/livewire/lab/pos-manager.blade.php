<div>
    <style>
        /* Modern POS Aesthetic based on screenshot */
        .pos-container {
            font-family: inherit;
        }
        .pos-card {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            transition: all 0.2s ease;
        }
        .pos-card-header {
            padding: 10px 16px;
            border-bottom: 1px solid #f1f5f9;
            background: #ffffff;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .pos-card-body {
            padding: 14px 16px;
        }
        .pos-form-label {
            font-size: 11px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            margin-bottom: 5px;
            display: block;
        }
        .pos-input {
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 12.5px;
            color: #0f172a;
            padding: 6px 10px;
            transition: border-color 0.15s ease, box-shadow 0.15s ease;
        }
        .pos-input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.12);
            outline: none;
        }
        .pos-search-btn-purple {
            background-color: #7c3aed;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: background 0.15s;
        }
        .pos-search-btn-purple:hover {
            background-color: #6d28d9;
            color: #ffffff;
        }
        .pos-search-btn-green {
            background-color: #10b981;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: background 0.15s;
        }
        .pos-search-btn-green:hover {
            background-color: #059669;
            color: #ffffff;
        }
        .pos-search-btn-orange {
            background-color: #f59e0b;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: background 0.15s;
        }
        .pos-search-btn-orange:hover {
            background-color: #d97706;
            color: #ffffff;
        }
        .pos-dropdown-menu {
            max-height: 280px;
            overflow-y: auto;
            z-index: 1060;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
            border: 1px solid #e2e8f0;
            background: #ffffff;
            border-radius: 8px;
            width: 100%;
        }
        .pos-dropdown-item {
            padding: 9px 14px;
            cursor: pointer;
            transition: background-color 0.15s;
            border-bottom: 1px solid #f1f5f9;
        }
        .pos-dropdown-item:last-child {
            border-bottom: none;
        }
        .pos-dropdown-item:hover {
            background-color: #f8fafc;
        }
        /* Sticky Summary */
        .pos-summary-card {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 1rem;
        }
        .pos-summary-header {
            background-color: #1e293b;
            color: #ffffff;
            padding: 12px 18px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            font-size: 13.5px;
        }
        .pos-net-payable-box {
            background-color: #f5f3ff;
            border: 1.5px solid #ddd6fe;
            border-radius: 8px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .pos-paid-status-box {
            border-radius: 8px;
            padding: 10px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .pos-btn-generate {
            background-color: #7c3aed;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 12px 18px;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 14px rgba(124, 58, 237, 0.35);
            transition: all 0.2s;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .pos-btn-generate:hover:not(:disabled) {
            background-color: #6d28d9;
            color: #ffffff;
            box-shadow: 0 6px 18px rgba(109, 40, 217, 0.45);
            transform: translateY(-1px);
        }
        .pos-btn-generate:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            box-shadow: none;
        }
        .pos-btn-split {
            border: 1.5px solid #8b5cf6;
            color: #7c3aed;
            background: #ffffff;
            font-weight: 700;
            font-size: 11px;
            border-radius: 6px;
            padding: 7px 14px;
            width: 100%;
            transition: all 0.15s;
        }
        .pos-btn-split:hover {
            background-color: #f5f3ff;
            color: #6d28d9;
        }
    </style>

    {{-- ======================== PAGE HEADER ======================== --}}
    <div class="page-header mb-3">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10 fw-bold">Point of Sale — Billing</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item">Lab</li>
                    <li class="breadcrumb-item active">POS</li>
                </ul>
            </div>
            <div class="page-header-right d-flex align-items-center gap-2">
                @if($active_membership)
                    <div class="d-flex align-items-center gap-2 px-3 py-1 rounded-3 fs-12 fw-bold" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0;">
                        <i class="feather-award fs-14"></i>
                        <span>{{ $active_membership['name'] }} ACTIVE ({{ number_format($active_membership['discount_percentage'] ?? 0, 0) }}% OFF)</span>
                    </div>
                @else
                    <button type="button" wire:click="$set('isMembershipModalOpen', true)" 
                        class="btn d-inline-flex align-items-center gap-2 px-3 py-2 fw-bold text-uppercase fs-11 shadow-sm"
                        style="border: 1.5px solid #f59e0b; color: #f59e0b; border-radius: 8px; letter-spacing: 0.5px; background: #ffffff; transition: all 0.2s;"
                        onmouseover="this.style.background='#fffbeb'; this.style.borderColor='#d97706'; this.style.color='#d97706';"
                        onmouseout="this.style.background='#ffffff'; this.style.borderColor='#f59e0b'; this.style.color='#f59e0b';">
                        <i class="feather-award fs-14"></i>
                        <span>BUY MEMBERSHIP</span>
                    </button>
                @endif
            </div>
        </div>
    </div>

    <div class="main-content pos-container">

        {{-- Flash Messages --}}
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2 mb-3" role="alert">
                <i class="feather-check-circle fs-16"></i>
                <div class="fw-semibold">{{ session('message') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center gap-2 mb-3" role="alert">
                <i class="feather-alert-triangle fs-16"></i>
                <div class="fw-semibold">{{ session('error') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Main Two-Column POS Layout --}}
        <div class="row g-3">
            
            {{-- ════════════════════════════════════════════════════════════════════════════════ --}}
            {{-- LEFT COLUMN: 3 Top Cards + Logistics + Tests & Cart Table                      --}}
            {{-- ════════════════════════════════════════════════════════════════════════════════ --}}
            <div class="col-lg-8 col-xl-8 col-xxl-9">

                {{-- ───────── ROW 1: Patient · Referring Doctor · Agent / Franchise ───────── --}}
                <div class="row g-3 mb-3">
                    
                    {{-- Patient Card --}}
                    <div class="col-md-4">
                        <div class="pos-card h-100">
                            <div class="pos-card-header">
                                <span class="d-flex align-items-center" style="color: #7c3aed; font-weight: 700; font-size: 13px;">
                                    <i class="feather-user me-1 fs-14"></i>Patient <span class="text-danger ms-1">*</span>
                                </span>
                                @if($selectedPatient)
                                    <div class="d-flex gap-1">
                                        <button wire:click="openEditPatientModal" class="btn btn-sm text-primary p-0" title="Edit Patient"><i class="feather-edit fs-13"></i></button>
                                        <button wire:click="clearPatient" class="btn btn-sm text-danger p-0 ms-1" title="Remove"><i class="feather-x-circle fs-13"></i></button>
                                    </div>
                                @endif
                            </div>
                            <div class="pos-card-body">
                                @if ($selectedPatient)
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="avatar-text avatar-md rounded-circle flex-shrink-0" style="background: #ede9fe; color: #7c3aed;">
                                            <span class="fw-bold">{{ strtoupper(substr($selectedPatient['name'], 0, 2)) }}</span>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <h6 class="mb-0 fw-bold fs-13 text-dark">{{ $selectedPatient['name'] ?? '' }} <span class="badge bg-soft-info text-info ms-1 fs-10">{{ $selectedPatient['formatted_id'] ?? '' }}</span></h6>
                                            <div class="fs-11 text-muted"><i class="feather-phone me-1 fs-10"></i>{{ $selectedPatient['phone'] ?? '' }}</div>
                                            @if($patientProfileData)
                                                <div class="d-flex flex-wrap gap-1 mt-1">
                                                    <span class="badge bg-light text-dark fs-10 border">{{ $patientProfileData['age'] ?? '' }} {{ $patientProfileData['age_type'] ?? 'Yrs' }}</span>
                                                    <span class="badge bg-soft-primary text-primary fs-10">{{ $patientProfileData['gender'] ?? '—' }}</span>
                                                    @if(!empty($patientProfileData['blood_group']))
                                                        <span class="badge bg-soft-danger text-danger fs-10">{{ $patientProfileData['blood_group'] }}</span>
                                                    @endif
                                                </div>
                                            @endif
                                            @if($active_membership)
                                                <div class="mt-1">
                                                    <span class="badge bg-success fs-10"><i class="feather-award me-1"></i>{{ $active_membership['name'] ?? '' }} ({{ number_format($active_membership['discount_percentage'] ?? 0, 0) }}% OFF)</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="position-relative" x-data="{ open: false }" wire:key="patient-search-box" @click.away="open = false" @focusin="open = true; $wire.set('activeSearchField', 'patient')">
                                        <div class="d-flex gap-2">
                                            <div class="input-group input-group-sm flex-grow-1">
                                                <span class="input-group-text bg-white border-end-0 text-muted" style="border-color:#e2e8f0;"><i class="feather-search fs-12"></i></span>
                                                <input type="text" class="form-control pos-input border-start-0" 
                                                    wire:model.live.debounce.300ms="patientSearch" 
                                                    @focus="open = true"
                                                    onclick="this.select()"
                                                    placeholder="Phone / Name">
                                            </div>
                                            @if(auth()->user()->can('create patients') || auth()->user()->collection_center_id)
                                                <button wire:click="$set('isPatientModalOpen', true)" @click="open = false" class="pos-search-btn-purple" title="New Patient">
                                                    <i class="feather-plus fs-14"></i>
                                                </button>
                                            @endif
                                        </div>
                                        <div x-show="open" x-transition.opacity.duration.150ms style="display:none;">
                                            @if (!empty($patients) && count($patients) > 0)
                                                <div class="pos-dropdown-menu position-absolute mt-1">
                                                    @foreach ($patients as $pt)
                                                        <div wire:click="selectPatient({{ $pt->id }})" @click="open = false" class="pos-dropdown-item">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <div class="fw-bold fs-12 text-dark">{{ $pt->name }} <span class="badge bg-soft-info text-info ms-1">{{ $pt->formatted_id }}</span></div>
                                                                    <div class="text-muted fs-11">{{ $pt->phone }}</div>
                                                                </div>
                                                                <span class="badge bg-light text-dark border fs-10">{{ $pt->patientProfile->age ?? '' }}{{ $pt->patientProfile->age_type == 'Years' ? 'Y' : ($pt->patientProfile->age_type == 'Months' ? 'M' : 'D') }}/{{ substr($pt->patientProfile->gender ?? '', 0, 1) }}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @elseif(!empty($patientSearch))
                                                <div class="pos-dropdown-menu position-absolute mt-1 p-3 text-center">
                                                    <div class="fw-bold text-muted fs-11">No patient found for "{{ $patientSearch }}"</div>
                                                    @if(auth()->user()->can('create patients') || auth()->user()->collection_center_id)
                                                        <button wire:click="$set('isPatientModalOpen', true)" @click="open = false" class="btn btn-sm btn-primary mt-2 fw-bold fs-11"><i class="feather-user-plus me-1"></i>Register New</button>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Referring Doctor Card --}}
                    <div class="col-md-4">
                        <div class="pos-card h-100">
                            <div class="pos-card-header">
                                <span class="d-flex align-items-center" style="color: #10b981; font-weight: 700; font-size: 13px;">
                                    <i class="feather-activity me-1 fs-14"></i>Referring Doctor
                                </span>
                                @if($selectedDoctor)
                                    <div class="d-flex gap-1">
                                        <button wire:click="openEditDoctorModal" class="btn btn-sm text-primary p-0" title="Edit Doctor"><i class="feather-edit fs-13"></i></button>
                                        <button wire:click="clearDoctor" class="btn btn-sm text-danger p-0 ms-1" title="Remove"><i class="feather-x-circle fs-13"></i></button>
                                    </div>
                                @endif
                            </div>
                            <div class="pos-card-body">
                                @if ($selectedDoctor)
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="avatar-text avatar-md rounded-circle flex-shrink-0" style="background: #d1fae5; color: #059669;">
                                            <i class="feather-user-check fs-16"></i>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="fw-bold text-dark fs-13">{{ $selectedDoctor['name'] }}</div>
                                            <div class="fs-11 text-muted"><i class="feather-phone fs-10 me-1"></i>{{ $selectedDoctor['phone'] ?? '' }}</div>
                                            @if($doctorProfileData)
                                                <div class="d-flex flex-wrap gap-1 mt-1">
                                                    @if(!empty($doctorProfileData['specialization']))
                                                        <span class="badge bg-soft-success text-success fs-10">{{ $doctorProfileData['specialization'] }}</span>
                                                    @endif
                                                    <span class="badge bg-soft-warning text-warning fs-10">{{ number_format($doctorProfileData['commission_percentage'] ?? 0, 1) }}% Comm.</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="position-relative" x-data="{ open: false }" wire:key="doctor-search-box" @click.away="open = false" @focusin="open = true; $wire.set('activeSearchField', 'doctor')">
                                        <div class="d-flex gap-2">
                                            <div class="input-group input-group-sm flex-grow-1">
                                                <span class="input-group-text bg-white border-end-0 text-muted" style="border-color:#e2e8f0;"><i class="feather-search fs-12"></i></span>
                                                <input type="text" class="form-control pos-input border-start-0" 
                                                    wire:model.live.debounce.300ms="doctorSearch" 
                                                    @focus="open = true"
                                                    onclick="this.select()"
                                                    placeholder="Doctor Name / Phone">
                                            </div>
                                            @if(auth()->user()->can('create doctors') || auth()->user()->collection_center_id)
                                                <button wire:click="$set('isDoctorModalOpen', true)" @click="open = false" class="pos-search-btn-green" title="New Doctor">
                                                    <i class="feather-plus fs-14"></i>
                                                </button>
                                            @endif
                                        </div>
                                        <div x-show="open" x-transition.opacity.duration.150ms style="display:none;">
                                            @if (!empty($doctors) && count($doctors) > 0)
                                                <div class="pos-dropdown-menu position-absolute mt-1">
                                                    @foreach ($doctors as $doc)
                                                        <div wire:click="selectDoctor({{ $doc->id }})" @click="open = false" class="pos-dropdown-item">
                                                            <div class="fw-bold fs-12 text-dark">{{ $doc->name }}</div>
                                                            <div class="text-muted fs-11">{{ $doc->doctorProfile->specialization ?? '' }} · {{ number_format($doc->doctorProfile->commission_percentage ?? 0, 1) }}%</div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @elseif(!empty($doctorSearch))
                                                <div class="pos-dropdown-menu position-absolute mt-1 p-3 text-center">
                                                    <div class="fw-bold text-muted fs-11">No doctor found for "{{ $doctorSearch }}"</div>
                                                    @if(auth()->user()->can('create doctors') || auth()->user()->collection_center_id)
                                                        <button wire:click="$set('isDoctorModalOpen', true)" @click="open = false" class="btn btn-sm btn-success mt-1 fw-bold fs-11"><i class="feather-plus me-1"></i>Add New</button>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Agent / Franchise Card --}}
                    <div class="col-md-4">
                        <div class="pos-card h-100">
                            <div class="pos-card-header">
                                <span class="d-flex align-items-center" style="color: #f59e0b; font-weight: 700; font-size: 13px;">
                                    <i class="feather-briefcase me-1 fs-14"></i>Agent / Franchise
                                </span>
                                @if($selectedAgent)
                                    <div class="d-flex gap-1">
                                        <button wire:click="openEditAgentModal" class="btn btn-sm text-primary p-0" title="Edit Agent"><i class="feather-edit fs-13"></i></button>
                                        <button wire:click="clearAgent" class="btn btn-sm text-danger p-0 ms-1" title="Remove"><i class="feather-x-circle fs-13"></i></button>
                                    </div>
                                @endif
                            </div>
                            <div class="pos-card-body">
                                @if ($selectedAgent)
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="avatar-text avatar-md rounded-circle flex-shrink-0" style="background: #fef3c7; color: #d97706;">
                                            <i class="feather-briefcase fs-16"></i>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="fw-bold text-dark fs-13">{{ $selectedAgent['name'] }}</div>
                                            <div class="fs-11 text-muted"><i class="feather-phone fs-10 me-1"></i>{{ $selectedAgent['phone'] ?? '' }}</div>
                                            @if($agentProfileData)
                                                <div class="d-flex flex-wrap gap-1 mt-1">
                                                    @if(!empty($agentProfileData['agency_name']))
                                                        <span class="badge bg-soft-warning text-warning fs-10">{{ $agentProfileData['agency_name'] }}</span>
                                                    @endif
                                                    <span class="badge bg-soft-info text-info fs-10">{{ number_format($agentProfileData['commission_percentage'] ?? 0, 1) }}% Comm.</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="position-relative" x-data="{ open: false }" wire:key="agent-search-box" @click.away="open = false" @focusin="open = true; $wire.set('activeSearchField', 'agent')">
                                        <div class="d-flex gap-2">
                                            <div class="input-group input-group-sm flex-grow-1">
                                                <span class="input-group-text bg-white border-end-0 text-muted" style="border-color:#e2e8f0;"><i class="feather-search fs-12"></i></span>
                                                <input type="text" class="form-control pos-input border-start-0" 
                                                    wire:model.live.debounce.300ms="agentSearch" 
                                                    @focus="open = true"
                                                    onclick="this.select()"
                                                    placeholder="Agent Name / Phone">
                                            </div>
                                            @if(auth()->user()->can('create agents') || auth()->user()->collection_center_id)
                                                <button wire:click="$set('isAgentModalOpen', true)" @click="open = false" class="pos-search-btn-orange" title="New Agent">
                                                    <i class="feather-plus fs-14"></i>
                                                </button>
                                            @endif
                                        </div>
                                        <div x-show="open" x-transition.opacity.duration.150ms style="display:none;">
                                            @if (!empty($agents) && count($agents) > 0)
                                                <div class="pos-dropdown-menu position-absolute mt-1">
                                                    @foreach ($agents as $agt)
                                                        <div wire:click="selectAgent({{ $agt->id }})" @click="open = false" class="pos-dropdown-item">
                                                            <div class="fw-bold fs-12 text-dark">{{ $agt->name }}</div>
                                                            <div class="text-muted fs-11">{{ $agt->agentProfile->agency_name ?? '' }} · {{ number_format($agt->agentProfile->commission_percentage ?? 0, 1) }}%</div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @elseif(!empty($agentSearch))
                                                <div class="pos-dropdown-menu position-absolute mt-1 p-3 text-center">
                                                    <div class="fw-bold text-muted fs-11">No agent found for "{{ $agentSearch }}"</div>
                                                    @if(auth()->user()->can('create agents') || auth()->user()->collection_center_id)
                                                        <button wire:click="$set('isAgentModalOpen', true)" @click="open = false" class="btn btn-sm btn-warning mt-1 fw-bold fs-11"><i class="feather-plus me-1"></i>Add New</button>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                {{-- ───────── ROW 2: Collection & Logistics Card ───────── --}}
                <div class="pos-card mb-3">
                    <div class="pos-card-header">
                        <span class="d-flex align-items-center" style="color: #0f172a; font-weight: 700; font-size: 13px;">
                            <i class="feather-map-pin me-2" style="color: #14b8a6;"></i>Collection & Logistics
                        </span>
                    </div>
                    <div class="pos-card-body">
                        {{-- Row 1: Collection Center, Lab Branch, Collected At --}}
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label class="pos-form-label">COLLECTION CENTER <span class="text-danger">*</span></label>
                                <select class="form-select pos-input @error('collection_center_id') is-invalid @enderror" wire:model.live="collection_center_id" {{ auth()->user()->hasRole('collection_center') ? 'disabled' : '' }}>
                                    <option value="">— Select —</option>
                                    @foreach ($centers as $center)
                                        <option value="{{ $center->id }}">
                                            {{ $center->name }} {{ $center->is_main_lab ? '⭐' : '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('collection_center_id')
                                    <div class="text-danger fs-11 fw-bold mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="pos-form-label">LAB BRANCH</label>
                                @php
                                    $restrictAccess = \App\Models\Configuration::getFor('restrict_branch_access', '1') === '1';
                                    $canSwitch = auth()->user()->hasRole('lab_admin') || auth()->user()->hasRole('super_admin') || !$restrictAccess;
                                @endphp
                                <select class="form-select pos-input @error('branch_id') is-invalid @enderror" 
                                    wire:model.live="branch_id"
                                    @if(!$canSwitch) disabled @endif>
                                    @if($canSwitch) <option value="">— Select Branch —</option> @endif
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                    @endforeach
                                </select>
                                @error('branch_id')
                                    <div class="text-danger fs-11 fw-bold mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="pos-form-label">COLLECTED AT</label>
                                <select class="form-select pos-input" wire:model="collection_type">
                                    <option value="Center">🏥 Center</option>
                                    <option value="Home Collection">🏠 Home Collection</option>
                                    <option value="Hospital">🏨 Hospital</option>
                                </select>
                            </div>
                        </div>

                        {{-- Row 2: Invoice Date & Time, Sample Received At --}}
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="pos-form-label">INVOICE DATE & TIME</label>
                                <input type="datetime-local" class="form-control pos-input" wire:model="invoice_date">
                            </div>
                            <div class="col-md-6">
                                <label class="pos-form-label">SAMPLE RECEIVED AT</label>
                                <input type="datetime-local" class="form-control pos-input" wire:model="sample_received_at">
                            </div>
                        </div>

                        {{-- Row 3: Report Date, Report Time --}}
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="pos-form-label">REPORT DATE</label>
                                <input type="date" class="form-control pos-input" wire:model="expected_report_date">
                            </div>
                            <div class="col-md-6">
                                <label class="pos-form-label">REPORT TIME</label>
                                <input type="time" class="form-control pos-input" wire:model="expected_report_time">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ───────── ROW 3: Lab Tests / Packages Card ───────── --}}
                <div class="pos-card mb-4">
                    <div class="pos-card-header">
                        <span class="d-flex align-items-center" style="color: #0f172a; font-weight: 700; font-size: 13.5px;">
                            <i class="feather-shopping-cart me-2" style="color: #7c3aed;"></i>Lab Tests / Packages
                        </span>
                        <div>
                            <span class="badge" style="background-color: #6d28d9; color: #ffffff; border-radius: 9999px; padding: 5px 14px; font-weight: 600; font-size: 11px;">
                                <span wire:loading.remove wire:target="removeFromCart, addTestToCart, calculateTotals, cart">
                                    {{ count($cart) }} items - ₹{{ number_format($subtotal, 2) }}
                                </span>
                                <span wire:loading wire:target="removeFromCart, addTestToCart, calculateTotals, cart">
                                    <span class="spinner-border spinner-border-sm me-1" role="status"></span> Updating...
                                </span>
                            </span>
                        </div>
                    </div>
                    
                    <div class="pos-card-body p-3">
                        {{-- Full-Width Test Search Bar --}}
                        <div class="position-relative mb-3" x-data="{ openTestDropdown: false }" @click.away="openTestDropdown = false">
                            <div class="input-group">
                                <span class="input-group-text border-end-0" style="background: #ede9fe; color: #7c3aed; border-color: #e2e8f0; border-top-left-radius: 6px; border-bottom-left-radius: 6px;">
                                    <i class="feather-search fs-14"></i>
                                </span>
                                <input type="text" class="form-control pos-input border-start-0" 
                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0; padding: 10px 14px; font-size: 13px;"
                                    wire:model.live.debounce.300ms="testSearch" 
                                    @focus="openTestDropdown = true"
                                    @input="openTestDropdown = true"
                                    placeholder="Search Test Name, Profile, or Code...">
                            </div>

                            {{-- Floating Autocomplete Dropdown for Tests --}}
                            <div x-show="openTestDropdown && $wire.testSearch.length > 0" x-transition.opacity.duration.150ms class="pos-dropdown-menu position-absolute mt-1" style="display:none;">
                                @if(!empty($tests) && count($tests) > 0)
                                    @foreach($tests as $t)
                                        <div wire:click="addTestToCart({{ $t->id }})" @click="openTestDropdown = false" class="pos-dropdown-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold text-dark fs-12">{{ $t->name }}</div>
                                                <div class="fs-10 text-muted">{{ $t->test_code ?? '' }}{{ $t->sample_type ? ' · '.$t->sample_type : '' }}</div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-success fs-13">₹{{ number_format($t->mrp, 0) }}</div>
                                                @if($t->is_package)
                                                    <span class="badge bg-primary fs-9 px-1">Package</span>
                                                @else
                                                    <span class="badge bg-soft-secondary text-secondary border fs-9 px-1">Test</span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="p-3 text-center text-muted fs-11">
                                        No tests found matching "{{ $testSearch }}"
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- Cart Table --}}
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 align-middle">
                                <thead style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                                    <tr>
                                        <th class="ps-3 text-uppercase fs-10 text-muted fw-bold" style="width:40px;">#</th>
                                        <th class="text-uppercase fs-10 text-muted fw-bold">TEST / PACKAGE</th>
                                        <th class="text-uppercase fs-10 text-muted fw-bold text-center" style="width:100px;">TYPE</th>
                                        <th class="text-uppercase fs-10 text-muted fw-bold text-end" style="width:140px;">MRP (₹)</th>
                                        <th class="text-uppercase fs-10 text-muted fw-bold text-center pe-3" style="width:50px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($cart as $index => $item)
                                        <tr wire:click="toggleCartItemDetail({{ $index }})" style="cursor:pointer;" class="{{ in_array($index, $expandedCartItems) ? 'table-active' : '' }}">
                                            <td class="ps-3 fw-bold text-muted fs-12">{{ $index + 1 }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <span class="fw-bold text-dark fs-13">{{ $item['name'] }}</span>
                                                    @if(!empty($item['linked_tests']) || !empty($item['parameters']))
                                                        <i class="feather-chevron-{{ in_array($index, $expandedCartItems) ? 'up' : 'down' }} text-muted fs-11 ms-1"></i>
                                                    @endif
                                                </div>
                                                <div class="fs-10 text-muted">{{ $item['test_code'] ?? '' }}{{ $item['department'] ? ' · '.$item['department'] : '' }}{{ $item['sample_type'] ? ' · '.$item['sample_type'] : '' }}</div>
                                            </td>
                                            <td class="text-center">
                                                @if ($item['is_package'])
                                                    <span class="badge bg-soft-primary text-primary rounded-pill fs-10">
                                                        <i class="feather-layers fs-10 me-1"></i>Package
                                                        @if(!empty($item['linked_tests']))
                                                            ({{ count($item['linked_tests']) }})
                                                        @endif
                                                    </span>
                                                @else
                                                    <span class="badge bg-soft-success text-success rounded-pill fs-10">Test</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <div class="input-group input-group-sm ms-auto" style="max-width: 130px;">
                                                    <span class="input-group-text bg-light border-end-0 fs-11" style="padding: 0 8px;">₹</span>
                                                    <input type="number" class="form-control form-control-sm fw-bold border-start-0 text-end" 
                                                        wire:model.live.debounce.300ms="cart.{{ $index }}.price" 
                                                        wire:change="calculateTotals"
                                                        onclick="event.stopPropagation(); this.select()">
                                                </div>
                                                <div class="fs-10 text-muted mt-1">MRP: <del>₹{{ number_format($item['mrp'], 0) }}</del></div>
                                            </td>
                                            <td class="text-center pe-3">
                                                <button wire:click.stop="removeFromCart({{ $index }})" class="btn btn-sm p-0 text-danger" title="Remove"><i class="feather-trash-2 fs-14"></i></button>
                                            </td>
                                        </tr>

                                        {{-- Expanded Package & Parameter Details --}}
                                        @if(in_array($index, $expandedCartItems))
                                            <tr>
                                                <td colspan="5" class="bg-light border-0 pt-0 pb-3 ps-5 pe-3">
                                                    <div class="card border-dashed bg-white shadow-none mb-0 overflow-hidden">
                                                        <div class="card-body p-2">
                                                            @if($item['is_package'] && !empty($item['linked_tests']))
                                                                <div class="fw-bold text-muted fs-11 mb-2 text-uppercase"><i class="feather-layers me-1"></i>Included Tests ({{ count($item['linked_tests']) }}):</div>
                                                                <div class="row g-2">
                                                                    @foreach($item['linked_tests'] as $lt)
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="d-flex align-items-start gap-2 p-2 border rounded bg-light bg-opacity-50">
                                                                                <div class="avatar-text avatar-xs bg-soft-primary rounded-circle mt-1"><i class="feather-check text-primary fs-10"></i></div>
                                                                                <div class="flex-grow-1 min-width-0">
                                                                                    <div class="fw-bold fs-11 text-dark text-truncate">{{ $lt['name'] }}</div>
                                                                                    <div class="fs-10 text-muted">{{ $lt['test_code'] ?? 'N/A' }} · ₹{{ number_format($lt['mrp'], 0) }}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                            
                                                            @if(!empty($item['parameters']))
                                                                <div class="@if($item['is_package']) mt-3 @endif">
                                                                    <div class="fw-bold text-muted fs-11 mb-2 text-uppercase"><i class="feather-activity me-1"></i>Parameters ({{ count($item['parameters']) }}):</div>
                                                                    <div class="d-flex flex-wrap gap-1">
                                                                        @foreach($item['parameters'] as $param)
                                                                            <span class="badge bg-soft-secondary text-secondary fs-10 border rounded-pill px-2 py-1">
                                                                                {{ is_array($param) ? ($param['param'] ?? $param['name'] ?? '—') : $param }}
                                                                                @if(is_array($param) && !empty($param['unit'])) <small class="ms-1">({{ $param['unit'] }})</small> @endif
                                                                            </span>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        {{-- Empty State matching screenshot --}}
                                        <tr>
                                            <td colspan="5" class="text-center py-5">
                                                <i class="feather-shopping-cart d-block mb-2" style="font-size: 38px; color: #94a3b8;"></i>
                                                <div style="color: #64748b; font-size: 13px; font-weight: 500;">Cart is empty — search above</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            {{-- ════════════════════════════════════════════════════════════════════════════════ --}}
            {{-- RIGHT COLUMN: Sticky Invoice Summary Sidebar                                   --}}
            {{-- ════════════════════════════════════════════════════════════════════════════════ --}}
            <div class="col-lg-4 col-xl-4 col-xxl-3">
                <div class="pos-summary-card">
                    <div class="pos-summary-header">
                        <i class="feather-file-text fs-15"></i>
                        <span>Invoice Summary</span>
                    </div>

                    <div class="p-3">
                        {{-- Cart Subtotal --}}
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span style="color: #475569; font-size: 13.5px; font-weight: 600;">Cart Subtotal</span>
                            <span style="color: #0f172a; font-size: 14.5px; font-weight: 700;">₹{{ number_format($subtotal, 0) }}</span>
                        </div>

                        {{-- Voucher Code Input --}}
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control pos-input fw-bold text-uppercase border-end-0" 
                                    style="border-top-right-radius: 0; border-bottom-right-radius: 0;"
                                    wire:model.defer="voucher_code" 
                                    placeholder="VOUCHER CODE" 
                                    {{ $applied_voucher ? 'disabled' : '' }}>
                                @if($applied_voucher)
                                    <button wire:click="removeVoucher" class="btn btn-danger px-3 fw-bold" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                        <i class="feather-x"></i>
                                    </button>
                                @else
                                    <button wire:click="applyVoucher" class="btn fw-bold px-3" style="background-color: #1e293b; color: #ffffff; border-top-left-radius: 0; border-bottom-left-radius: 0; font-size: 11px; letter-spacing: 0.5px;">
                                        APPLY
                                    </button>
                                @endif
                            </div>
                            @if($applied_voucher)
                                <div class="mt-1 text-success fs-11 fw-bold">
                                    <i class="feather-check-circle me-1"></i>Voucher applied (-₹{{ number_format($voucher_discount_amt, 0) }})
                                </div>
                            @endif
                        </div>

                        {{-- Membership / Loyalty Plan --}}
                        <div class="mb-3">
                            @if($active_membership)
                                <div class="p-2 rounded-2 d-flex align-items-center justify-content-between" style="background: #ecfdf5; border: 1px solid #a7f3d0;">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="feather-award text-success fs-15"></i>
                                        <div>
                                            <div class="fw-bold fs-11 text-success">{{ $active_membership['name'] }} Applied</div>
                                            <div class="text-muted fs-10">-₹{{ number_format($membership_discount_amt, 0) }} ({{ number_format($active_membership['discount_percentage'] ?? 0, 0) }}% OFF)</div>
                                        </div>
                                    </div>
                                    <button wire:click="$set('isMembershipModalOpen', true)" class="btn btn-xs btn-outline-success py-0 px-2 fs-10 fw-bold">Change</button>
                                </div>
                            @else
                                <button type="button" wire:click="$set('isMembershipModalOpen', true)" 
                                    class="btn w-100 d-flex align-items-center justify-content-center gap-2 py-2 fw-bold text-uppercase fs-11"
                                    style="border: 1.5px solid #f59e0b; color: #f59e0b; border-radius: 6px; letter-spacing: 0.5px; background: #ffffff; transition: all 0.2s;"
                                    onmouseover="this.style.background='#fffbeb'; this.style.borderColor='#d97706'; this.style.color='#d97706';"
                                    onmouseout="this.style.background='#ffffff'; this.style.borderColor='#f59e0b'; this.style.color='#f59e0b';">
                                    <i class="feather-award fs-14"></i>
                                    <span>BUY MEMBERSHIP</span>
                                </button>
                            @endif
                        </div>

                        {{-- Manual Discount --}}
                        <div class="mb-3">
                            <label class="pos-form-label">MANUAL DISCOUNT</label>
                            <div class="d-flex gap-2">
                                <select class="form-select pos-input fw-bold" style="width: 100px; flex-shrink: 0;" wire:model.live="manual_discount_type" wire:change="calculateTotals">
                                    <option value="flat">₹ Flat</option>
                                    <option value="percent">% Percent</option>
                                </select>
                                <input type="number" step="any" min="0" class="form-control pos-input fw-bold text-end" 
                                    wire:model.live.debounce.300ms="manual_discount_input" 
                                    wire:keyup="calculateTotals" 
                                    placeholder="0">
                            </div>
                        </div>

                        {{-- Discount Remarks / Reason --}}
                        <div class="mb-3">
                            <label class="pos-form-label">DISCOUNT REMARKS / REASON</label>
                            <input type="text" class="form-control pos-input" 
                                wire:model="discount_remarks" 
                                placeholder="Reason for discount (e.g. Doctor ref, Staff, VIP)">
                        </div>

                        {{-- Net Payable Box --}}
                        <div class="pos-net-payable-box mb-3">
                            <span style="color: #7c3aed; font-weight: 800; font-size: 12px; letter-spacing: 0.5px;">NET PAYABLE</span>
                            <span style="color: #7c3aed; font-weight: 800; font-size: 26px; line-height: 1;">₹{{ number_format($net_payable, 0) }}</span>
                        </div>

                        {{-- Payment Section --}}
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="d-flex align-items-center gap-1" style="font-weight: 800; font-size: 11px; color: #334155; letter-spacing: 0.5px;">
                                    <i class="feather-credit-card fs-12"></i> PAYMENT
                                </span>
                                @can('edit settings')
                                    <button wire:click="$set('isPaymentModeModalOpen', true)" class="btn btn-sm btn-outline-dark py-0 px-2 fw-bold" style="font-size: 10px; border-radius: 4px;">
                                        + MODE
                                    </button>
                                @endcan
                            </div>

                            {{-- Payment Rows --}}
                            <div class="d-flex flex-column gap-2 mb-2">
                                @foreach ($payments as $index => $payment)
                                    <div class="d-flex gap-2 align-items-center">
                                        <select class="form-select pos-input fw-bold" wire:model.live="payments.{{ $index }}.mode_id" style="flex: 1.2;">
                                            <option value="">Select Mode</option>
                                            @foreach($paymentModes as $mode)
                                                <option value="{{ $mode->id }}">{{ $mode->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group input-group-sm" style="flex: 1;">
                                            <span class="input-group-text bg-white border-end-0 text-muted" style="border-color:#e2e8f0; font-size:11px;">₹</span>
                                            <input type="number" class="form-control pos-input border-start-0 fw-bold text-end" 
                                                wire:model.live.debounce.300ms="payments.{{ $index }}.amount" 
                                                placeholder="Amount">
                                        </div>
                                        @if(count($payments) > 1)
                                            <button wire:click="removePaymentRow({{ $index }})" class="btn btn-sm p-1 text-danger" title="Remove Mode">
                                                <i class="feather-trash-2 fs-13"></i>
                                            </button>
                                        @endif
                                    </div>
                                @endforeach
                            </div>

                            {{-- Split Payment Button --}}
                            <button wire:click="addPaymentRow" type="button" class="pos-btn-split">
                                + SPLIT PAYMENT
                            </button>
                        </div>

                        {{-- Payment Status Box (Fully Paid / Due Amount) --}}
                        <div class="mb-3">
                            @if ($due_amount <= 0)
                                <div class="pos-paid-status-box" style="background-color: #ecfdf5; border: 1.5px solid #a7f3d0;">
                                    <span style="color: #059669; font-weight: 700; font-size: 12px;">Fully Paid</span>
                                    <span style="color: #059669; font-weight: 800; font-size: 24px; line-height: 1;">₹0</span>
                                </div>
                            @else
                                <div class="pos-paid-status-box" style="background-color: #fffbeb; border: 1.5px solid #fde68a;">
                                    <span style="color: #d97706; font-weight: 700; font-size: 12px;">Due Amount</span>
                                    <span style="color: #d97706; font-weight: 800; font-size: 24px; line-height: 1;">₹{{ number_format($due_amount, 0) }}</span>
                                </div>
                            @endif
                        </div>

                        {{-- Generate Invoice Button --}}
                        <button wire:click="generateBill" class="pos-btn-generate" {{ empty($cart) ? 'disabled' : '' }}>
                            <span wire:loading.remove wire:target="generateBill">
                                <i class="feather-check-circle fs-15"></i> GENERATE INVOICE
                            </span>
                            <span wire:loading wire:target="generateBill">
                                <span class="spinner-border spinner-border-sm me-1" role="status"></span> Generating...
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- ======================== MODALS ======================== --}}

    {{-- Quick Add / Edit Patient Modal --}}
    @if ($isPatientModalOpen)
        <div class="modal-backdrop fade show" style="z-index:1050;"></div>
        <div class="modal fade show d-block" tabindex="-1" style="z-index:1055;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title fs-14 fw-bold">
                            <i class="feather-user-{{ $editingPatientId ? 'edit' : 'plus' }} text-primary me-2"></i>{{ $editingPatientId ? 'Edit' : 'Quick Register' }} Patient
                        </h5>
                        <button wire:click="$set('isPatientModalOpen', false); $set('editingPatientId', null)" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        @if($modalError)<div class="alert alert-danger py-2 fs-12 mb-3"><i class="feather-alert-circle me-1"></i>{{ $modalError }}</div>@endif
                        @if($errors->any())<div class="alert alert-danger py-2 fs-12 mb-3">@foreach($errors->all() as $err)<div><i class="feather-x-circle me-1"></i>{{ $err }}</div>@endforeach</div>@endif
                        <div class="row g-3">
                            <div class="col-12"><label class="pos-form-label">Name <span class="text-danger">*</span></label><input type="text" class="form-control pos-input" wire:model="new_name" placeholder="Full Name"></div>
                            <div class="col-12"><label class="pos-form-label">Mobile</label><input type="text" class="form-control pos-input" wire:model="new_phone" placeholder="10 Digit" maxlength="10"></div>
                            <div class="col-6">
                                <label class="pos-form-label">Age <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control pos-input" wire:model="new_age" placeholder="Age">
                                    <select class="form-select bg-light pos-input" wire:model="new_age_type" style="max-width: 90px;">
                                        <option value="Years">Yrs</option>
                                        <option value="Months">Mos</option>
                                        <option value="Days">Dys</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6"><label class="pos-form-label">Gender</label><select class="form-select pos-input" wire:model="new_gender"><option value="Male">Male</option><option value="Female">Female</option><option value="Other">Other</option></select></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="$set('isPatientModalOpen', false); $set('editingPatientId', null)" class="btn btn-light btn-sm">Cancel</button>
                        <button wire:click="quickAddPatient" class="btn btn-primary btn-sm fw-bold">
                            <span wire:loading.remove wire:target="quickAddPatient"><i class="feather-save me-1"></i>{{ $editingPatientId ? 'Update Details' : 'Save & Select' }}</span>
                            <span wire:loading wire:target="quickAddPatient"><span class="spinner-border spinner-border-sm me-1"></span>Saving...</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Quick Add / Edit Doctor Modal --}}
    @if ($isDoctorModalOpen)
        <div class="modal-backdrop fade show" style="z-index:1050;"></div>
        <div class="modal fade show d-block" tabindex="-1" style="z-index:1055;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title fs-14 fw-bold">
                            <i class="feather-activity text-success me-2"></i>{{ $editingDoctorId ? 'Edit' : 'Quick Add' }} Doctor
                        </h5>
                        <button wire:click="$set('isDoctorModalOpen', false); $set('editingDoctorId', null)" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        @if($modalError)<div class="alert alert-danger py-2 fs-12 mb-3"><i class="feather-alert-circle me-1"></i>{{ $modalError }}</div>@endif
                        @if($errors->any())<div class="alert alert-danger py-2 fs-12 mb-3">@foreach($errors->all() as $err)<div><i class="feather-x-circle me-1"></i>{{ $err }}</div>@endforeach</div>@endif
                        <div class="row g-3">
                            <div class="col-12"><label class="pos-form-label">Name <span class="text-danger">*</span></label><div class="input-group"><span class="input-group-text fw-bold">Dr.</span><input type="text" class="form-control pos-input" wire:model="new_doc_name" placeholder="Full Name"></div></div>
                            <div class="col-12"><label class="pos-form-label">Mobile (Optional)</label><input type="text" class="form-control pos-input" wire:model="new_doc_phone" placeholder="10 Digit (optional)" maxlength="10"></div>
                            <div class="col-12"><label class="pos-form-label">Commission (%)</label><input type="number" class="form-control pos-input" wire:model="new_doc_commission" placeholder="e.g. 20"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="$set('isDoctorModalOpen', false); $set('editingDoctorId', null)" class="btn btn-light btn-sm">Cancel</button>
                        <button wire:click="quickAddDoctor" class="btn btn-success btn-sm fw-bold"><i class="feather-save me-1"></i>{{ $editingDoctorId ? 'Update Doctor' : 'Save & Select' }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Quick Add / Edit Agent Modal --}}
    @if ($isAgentModalOpen)
        <div class="modal-backdrop fade show" style="z-index:1050;"></div>
        <div class="modal fade show d-block" tabindex="-1" style="z-index:1055;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title fs-14 fw-bold">
                            <i class="feather-briefcase text-warning me-2"></i>{{ $editingAgentId ? 'Edit' : 'Quick Add' }} Agent
                        </h5>
                        <button wire:click="$set('isAgentModalOpen', false); $set('editingAgentId', null)" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        @if($modalError)<div class="alert alert-danger py-2 fs-12 mb-3"><i class="feather-alert-circle me-1"></i>{{ $modalError }}</div>@endif
                        @if($errors->any())<div class="alert alert-danger py-2 fs-12 mb-3">@foreach($errors->all() as $err)<div><i class="feather-x-circle me-1"></i>{{ $err }}</div>@endforeach</div>@endif
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="pos-form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control pos-input" wire:model="new_agent_name" placeholder="Full Name">
                            </div>
                            <div class="col-12">
                                <label class="pos-form-label">Mobile (Optional)</label>
                                <input type="text" class="form-control pos-input" wire:model="new_agent_phone" placeholder="10 Digit (optional)" maxlength="10">
                            </div>
                            <div class="col-12">
                                <label class="pos-form-label">Agency Name</label>
                                <input type="text" class="form-control pos-input" wire:model="new_agent_agency" placeholder="Agency/Shop Name">
                            </div>
                            <div class="col-12">
                                <label class="pos-form-label">Commission (%)</label>
                                <input type="number" class="form-control pos-input" wire:model="new_agent_commission" placeholder="e.g. 10">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="$set('isAgentModalOpen', false); $set('editingAgentId', null)" class="btn btn-light btn-sm">Cancel</button>
                        <button wire:click="quickAddAgent" class="btn btn-warning btn-sm fw-bold text-dark"><i class="feather-save me-1"></i>{{ $editingAgentId ? 'Update Agent' : 'Save & Select' }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Membership Purchase Modal --}}
    @if ($isMembershipModalOpen)
        <div class="modal-backdrop fade show" style="z-index:1050;"></div>
        <div class="modal fade show d-block" tabindex="-1" style="z-index:1055;">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title fs-14 fw-bold">
                            <i class="feather-award text-warning me-2"></i>Buy Membership for {{ $selectedPatient['name'] ?? 'Patient' }}
                        </h5>
                        <button wire:click="$set('isMembershipModalOpen', false)" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        @if($modalError)<div class="alert alert-danger py-2 fs-12 mb-3"><i class="feather-alert-circle me-1"></i>{{ $modalError }}</div>@endif
                        @if(!$selectedPatient)
                            <div class="alert alert-warning py-2 px-3 fs-12 mb-3 d-flex align-items-center gap-2">
                                <i class="feather-alert-triangle fs-15 text-warning flex-shrink-0"></i>
                                <span>Please search and select a <strong>Patient</strong> on the bill before activating a membership plan.</span>
                            </div>
                        @endif
                        <div class="row g-3">
                            @forelse ($memberships as $mem)
                                <div class="col-md-4 col-sm-6">
                                    <div wire:click="$set('selectedMembershipId', {{ $mem->id }})" class="card h-100 border-2 {{ $selectedMembershipId == $mem->id ? 'border-primary shadow' : 'border-gray-200' }}" style="cursor:pointer; transition:all .2s; border-radius:8px;">
                                        <div class="card-body text-center p-3">
                                            <div class="avatar-text avatar-lg mx-auto mb-2 rounded-circle" style="background-color:{{ $mem->color_code ?? '#3b71ca' }}20;">
                                                <i class="feather-award fs-3" style="color:{{ $mem->color_code ?? '#3b71ca' }};"></i>
                                            </div>
                                            <h6 class="fw-bold mb-1 fs-13" style="color:#1a1a2e;">{{ $mem->name }}</h6>
                                            <div class="fs-2 fw-bold mb-1" style="color:#1a1a2e;">₹{{ number_format($mem->price, 0) }}</div>
                                            <div class="badge fs-11 mb-1 px-2 py-1" style="background:#198754;color:#fff;">{{ number_format($mem->discount_percentage, 0) }}% OFF on all tests</div>
                                            <div class="fs-11 text-muted">Valid {{ $mem->validity_days }} days</div>
                                            @if($selectedMembershipId == $mem->id)
                                                <div class="mt-1"><i class="feather-check-circle text-primary fs-4"></i></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center py-3"><p class="text-muted">No plans configured.</p></div>
                            @endforelse

                            @if($selectedMembershipId)
                                @php $selectedMem = $memberships->firstWhere('id', $selectedMembershipId); @endphp
                                @if($selectedMem)
                                    <div class="col-12">
                                        <div class="alert mb-0 py-2 d-flex align-items-center gap-2" style="background:rgba(59,113,202,0.08);border:1px solid rgba(59,113,202,0.2);color:#1a1a2e;">
                                            <i class="feather-info text-primary"></i>
                                            <span class="fs-11"><strong>₹{{ number_format($selectedMem->price, 0) }}</strong> membership fee will be added to this bill. Patient will get <strong>{{ number_format($selectedMem->discount_percentage, 0) }}% discount</strong> on all tests.</span>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="$set('isMembershipModalOpen', false)" class="btn btn-light btn-sm">Cancel</button>
                        <button wire:click="purchaseMembership" class="btn btn-primary btn-sm fw-bold" {{ (!$selectedMembershipId || !$selectedPatient) ? 'disabled' : '' }}><i class="feather-check me-1"></i>Activate & Apply</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Quick Add Payment Mode Modal --}}
    @if ($isPaymentModeModalOpen)
        <div class="modal-backdrop fade show" style="z-index:1050;"></div>
        <div class="modal fade show d-block" tabindex="-1" style="z-index:1055;">
            <div class="modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title fs-14 fw-bold"><i class="feather-credit-card text-primary me-2"></i>Add Payment Mode</h5>
                        <button wire:click="$set('isPaymentModeModalOpen', false)" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        @if($modalError)<div class="alert alert-danger py-2 fs-12 mb-3"><i class="feather-alert-circle me-1"></i>{{ $modalError }}</div>@endif
                        <label class="pos-form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control pos-input" wire:model="new_payment_mode_name" placeholder="e.g. Cash, UPI, Card">
                    </div>
                    <div class="modal-footer">
                        <button wire:click="$set('isPaymentModeModalOpen', false)" class="btn btn-light btn-sm">Cancel</button>
                        <button wire:click="quickAddPaymentMode" class="btn btn-primary btn-sm fw-bold"><i class="feather-save me-1"></i>Save</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
