<div>
    <style>
        /* Boxy UI Overrides for Consistency */
        .card, .form-control, .form-select, .btn, .input-group-text, .badge, .list-group-item, .dropdown-menu {
            border-radius: 2px !important;
        }
        .rounded, .rounded-top, .rounded-bottom, .rounded-3, .rounded-4, .rounded-pill, .rounded-circle {
            border-radius: 2px !important;
        }

        .dropdown-menu { border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.05) !important; z-index: 2000; background: #fff !important; min-width: 160px; }
        .dropdown-item:hover { background-color: #f8f9fa; }
        .grayscale { filter: grayscale(1); }
        .opacity-50 { opacity: 0.5; }

        /* Custom Action Buttons */
        .action-btn-group {
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .action-btn {
            width: 32px !important;
            height: 32px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0 !important;
            border-radius: 2px !important;
            transition: all 0.2s ease-in-out !important;
            border: 1px solid transparent !important;
            background-color: #f8f9fa !important;
            color: #4b5563 !important;
        }
        .action-btn i, .action-btn span {
            font-size: 14px !important;
            line-height: 1 !important;
            display: inline-block !important;
        }
        .action-btn:hover {
            transform: translateY(-1px);
        }
        .action-btn-warning {
            color: #d97706 !important;
            background-color: #fef3c7 !important;
            border-color: #fde68a !important;
        }
        .action-btn-warning:hover {
            color: #ffffff !important;
            background-color: #d97706 !important;
            border-color: #d97706 !important;
        }
        .action-btn-info {
            color: #0891b2 !important;
            background-color: #ecfeff !important;
            border-color: #cffafe !important;
        }
        .action-btn-info:hover {
            color: #ffffff !important;
            background-color: #0891b2 !important;
            border-color: #0891b2 !important;
        }
        .action-btn-success {
            color: #16a34a !important;
            background-color: #f0fdf4 !important;
            border-color: #bbf7d0 !important;
        }
        .action-btn-success:hover {
            color: #ffffff !important;
            background-color: #16a34a !important;
            border-color: #16a34a !important;
        }
        .action-btn-whatsapp {
            color: #128c7e !important;
            background-color: #e8f9ee !important;
            border-color: #c3f2d2 !important;
        }
        .action-btn-whatsapp:hover {
            color: #ffffff !important;
            background-color: #128c7e !important;
            border-color: #128c7e !important;
        }
        .action-btn-primary {
            color: #2563eb !important;
            background-color: #eff6ff !important;
            border-color: #bfdbfe !important;
        }
        .action-btn-primary:hover {
            color: #ffffff !important;
            background-color: #2563eb !important;
            border-color: #2563eb !important;
        }
        .action-btn-danger {
            color: #dc2626 !important;
            background-color: #fef2f2 !important;
            border-color: #fee2e2 !important;
        }
        .action-btn-danger:hover {
            color: #ffffff !important;
            background-color: #dc2626 !important;
            border-color: #dc2626 !important;
        }
        .action-btn.dropdown-toggle::after {
            display: none !important;
        }

        /* Stats Cards */
        .stat-card {
            border: 1px solid #e2e8f0;
            background: #ffffff;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.06) !important;
            border-color: #cbd5e1;
        }
        .stat-card.bg-gradient-primary {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            border: none;
            color: #ffffff;
        }
        .stat-card.bg-gradient-primary .text-muted {
            color: rgba(255,255,255,0.7) !important;
        }
        .stat-card.bg-gradient-primary .text-dark {
            color: #ffffff !important;
        }
        .stat-icon-wrapper {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 2px;
            font-size: 24px;
        }

        /* Table Overrides */
        .table-custom th {
            background-color: #f1f5f9 !important;
            color: #475569;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.5px;
            padding: 14px 16px;
            border-bottom: 2px solid #e2e8f0;
        }
        .table-custom td {
            vertical-align: middle;
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
        }
        .table-custom tbody tr:hover {
            background-color: #f8fafc;
        }
        .item-chip {
            font-size: 11px;
            font-weight: 600;
            color: #334155;
            background: #f1f5f9;
            padding: 3px 6px;
            border-radius: 2px;
            display: inline-block;
            margin-bottom: 4px;
            margin-right: 4px;
            border: 1px solid #e2e8f0;
        }
        
        /* Filters section */
        .filters-wrapper {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            padding: 16px;
            margin-bottom: 1rem;
        }
        .filters-wrapper .form-control, .filters-wrapper .form-select, .filters-wrapper .input-group-text {
            background-color: #f8fafc;
            border-color: #e2e8f0;
            font-size: 13px;
        }
        .filters-wrapper .form-control:focus, .filters-wrapper .form-select:focus {
            background-color: #ffffff;
            border-color: #94a3b8;
            box-shadow: 0 0 0 2px rgba(148, 163, 184, 0.1);
        }
    </style>

    {{-- ======================== PAGE HEADER ======================== --}}
    <div class="page-header mb-4">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="text-dark fw-bold mb-0">Invoices</h5>
            </div>
            <ul class="breadcrumb d-none d-md-flex ms-3 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('lab.dashboard') }}" wire:navigate class="text-muted">Home</a></li>
                <li class="breadcrumb-item text-primary fw-medium">Billing</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            @if(auth()->user()->can('create pos') || auth()->user()->collection_center_id)
                <a href="{{ route('lab.pos') }}" wire:navigate class="btn btn-primary fw-bold px-4 shadow-sm">
                    <i class="feather-plus me-2"></i>New Bill
                </a>
            @endif
        </div>
    </div>

    {{-- ======================== MAIN CONTENT ======================== --}}
    <div class="main-content">

        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show border border-success mb-4 rounded-0" role="alert">
                <i class="feather-check-circle me-2"></i> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show border border-danger mb-4 rounded-0" role="alert">
                <i class="feather-alert-triangle me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ═══════ Stats Cards ═══════ --}}
        <div class="row g-4 mb-4">
            <div class="col-md-3 col-6">
                <div class="stat-card shadow-sm h-100">
                    <div class="p-4 d-flex align-items-center gap-3">
                        <div class="stat-icon-wrapper bg-soft-primary text-primary">
                            <i class="feather-file-text"></i>
                        </div>
                        <div>
                            <div class="fs-10 fw-bold text-muted text-uppercase tracking-wide mb-1">Total Bills</div>
                            <div class="fs-3 fw-bolder text-dark lh-1">{{ number_format($stats['total']) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card shadow-sm h-100 border-success border-opacity-25">
                    <div class="p-4 d-flex align-items-center gap-3">
                        <div class="stat-icon-wrapper bg-soft-success text-success">
                            <i class="feather-calendar"></i>
                        </div>
                        <div>
                            <div class="fs-10 fw-bold text-muted text-uppercase tracking-wide mb-1">Today's Collection</div>
                            <div class="fs-3 fw-bolder text-success lh-1">₹{{ number_format($stats['todayRevenue'], 0) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card bg-gradient-primary shadow-sm h-100">
                    <div class="p-4 d-flex align-items-center gap-3">
                        <div class="stat-icon-wrapper bg-white bg-opacity-25 text-white">
                            <i class="feather-trending-up"></i>
                        </div>
                        <div>
                            <div class="fs-10 fw-bold text-white-50 text-uppercase tracking-wide mb-1">Total Revenue</div>
                            <div class="fs-3 fw-bolder text-white lh-1">₹{{ number_format($stats['totalRevenue'], 0) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card shadow-sm h-100 border-danger border-opacity-25">
                    <div class="p-4 d-flex align-items-center gap-3">
                        <div class="stat-icon-wrapper bg-soft-danger text-danger">
                            <i class="feather-alert-circle"></i>
                        </div>
                        <div>
                            <div class="fs-10 fw-bold text-muted text-uppercase tracking-wide mb-1">Total Outstanding</div>
                            <div class="fs-3 fw-bolder text-danger lh-1">₹{{ number_format($stats['due'], 0) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ═══════ Filters & Search ═══════ --}}
        <div class="filters-wrapper shadow-sm">
            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Search</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0 bg-white"><i class="feather-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0 bg-white" wire:model.live.debounce.300ms="search" placeholder="Invoice ID, Patient Name, Phone...">
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Collection Center</label>
                    <select class="form-select fw-medium" wire:model.live="filterCC">
                        <option value="">All Centers</option>
                        @foreach($collectionCenters as $cc)
                            <option value="{{ $cc->id }}">{{ \Illuminate\Support\Str::limit($cc->name, 15) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Date From</label>
                    <input type="date" class="form-control fw-medium" wire:model.live="filterDateFrom">
                </div>
                <div class="col-md-3">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Date To</label>
                    <input type="date" class="form-control fw-medium" wire:model.live="filterDateTo">
                </div>
            </div>
            
            <hr class="my-3 opacity-25">
            
            <div class="row g-3 align-items-end">
                <div class="col-md-2">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Payment Status</label>
                    <select class="form-select fw-medium" wire:model.live="filterStatus">
                        <option value="">All Payments</option>
                        <option value="Paid">Paid</option>
                        <option value="Partial">Partial</option>
                        <option value="Unpaid">Unpaid</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Invoice Status</label>
                    <select class="form-select fw-medium" wire:model.live="filterInvoiceStatus">
                        <option value="">All Active/Cancelled</option>
                        <option value="Active">Active</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Sample Status</label>
                    <select class="form-select fw-medium" wire:model.live="filterSampleStatus">
                        <option value="">All Statuses</option>
                        @foreach(['Pending', 'Collected', 'Dispatched', 'Received', 'Processing', 'Ready'] as $st)
                            <option value="{{ $st }}">{{ $st }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Doctor</label>
                    <select class="form-select fw-medium" wire:model.live="filterDoctor">
                        <option value="">All Doctors</option>
                        @foreach($doctors as $dr)
                            <option value="{{ $dr->user_id }}">{{ $dr->user->name ?? 'Doctor' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="fs-11 fw-bold text-muted text-uppercase mb-1">Agent</label>
                    <select class="form-select fw-medium" wire:model.live="filterAgent">
                        <option value="">All Agents</option>
                        @foreach($agents as $ag)
                            <option value="{{ $ag->user_id }}">{{ $ag->user->name ?? 'Agent' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button wire:click="clearFilters" class="btn btn-light w-100 fw-bold border text-muted" title="Clear Filters" style="height: 38px;">
                        <i class="feather-refresh-cw me-2"></i> Reset Filters
                    </button>
                </div>
            </div>
        </div>

        {{-- ═══════ Invoice Table ═══════ --}}
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-custom mb-0 align-middle w-100">
                        <thead>
                            <tr>
                                <th style="width:16%;">Invoice Info</th>
                                <th style="width:18%;">Patient Details</th>
                                <th style="width:25%;">Tests Ordered</th>
                                <th class="text-end" style="width:10%;">Billing</th>
                                <th class="text-center" style="width:10%;">Payment</th>
                                <th class="text-center" style="width:10%;">Status</th>
                                <th class="text-center" style="width:11%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($invoices as $i => $inv)
                                <tr class="{{ $inv->status === 'Cancelled' ? 'opacity-50 grayscale bg-light' : '' }}">
                                    <!-- Invoice Info -->
                                    <td>
                                        <div class="fw-bolder text-primary fs-13 mb-1">
                                            {{ $inv->invoice_number }}
                                            @if($inv->status === 'Cancelled')
                                                <span class="badge bg-danger fs-9 ms-1 py-1 px-2">CANCELLED</span>
                                            @endif
                                        </div>
                                        <div class="fs-11 text-muted fw-medium mb-1"><i class="feather-hash me-1"></i>{{ $inv->barcode }}</div>
                                        <div class="fs-11 text-muted"><i class="feather-calendar me-1"></i>{{ $inv->invoice_date->format('d M y, h:i A') }}</div>
                                    </td>
                                    
                                    <!-- Patient Details -->
                                    <td>
                                        <div class="fw-bold text-dark fs-13 mb-1">{{ $inv->patient->name }}</div>
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            <span class="badge bg-soft-info text-info border border-info border-opacity-25 fs-10 fw-bolder">{{ $inv->patient->formatted_id }}</span>
                                            <span class="fs-11 text-muted">{{ $inv->patient->patientProfile->gender ?? 'N/A' }} / {{ $inv->patient->patientProfile->age ?? 'N/A' }}y</span>
                                        </div>
                                        <div class="fs-11 text-muted"><i class="feather-phone me-1"></i>{{ $inv->patient->phone ?? 'N/A' }}</div>
                                    </td>
                                    
                                    <!-- Tests Ordered -->
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            @foreach($inv->items->take(3) as $item)
                                                <div class="item-chip">{{ $item->test_name }}</div>
                                            @endforeach
                                            @if($inv->items->count() > 3)
                                                <div class="item-chip bg-soft-secondary text-muted border-secondary">
                                                    +{{ $inv->items->count() - 3 }} more
                                                </div>
                                            @endif
                                        </div>
                                    </td>

                                    <!-- Billing -->
                                    <td class="text-end">
                                        <div class="fw-bolder text-dark fs-14 mb-1">₹{{ number_format($inv->total_amount, 2) }}</div>
                                        <div class="fs-11 text-success fw-bold">Paid: ₹{{ number_format($inv->paid_amount, 2) }}</div>
                                        @if($inv->due_amount > 0)
                                            <div class="fs-11 text-danger fw-bold mt-1">Due: ₹{{ number_format($inv->due_amount, 2) }}</div>
                                        @endif
                                    </td>
                                    
                                    <!-- Payment -->
                                    <td class="text-center">
                                        @php
                                            $statusMap = [
                                                'Paid' => ['bg' => 'bg-soft-success text-success border border-success border-opacity-25', 'icon' => 'feather-check-circle'],
                                                'Partial' => ['bg' => 'bg-soft-warning text-warning border border-warning border-opacity-25', 'icon' => 'feather-alert-triangle'],
                                                'Unpaid' => ['bg' => 'bg-soft-danger text-danger border border-danger border-opacity-25', 'icon' => 'feather-x-circle'],
                                            ];
                                            $s = $statusMap[$inv->payment_status] ?? ['bg' => 'bg-soft-secondary text-secondary border border-secondary', 'icon' => ''];
                                        @endphp
                                        <span class="badge {{ $s['bg'] }} fs-11 px-2 py-1 fw-bold w-100 d-inline-block text-truncate" style="max-width: 90px;">
                                            <i class="{{ $s['icon'] }} me-1"></i>{{ $inv->payment_status }}
                                        </span>
                                        @if($inv->collection_type)
                                            <div class="fs-10 text-muted mt-2 fw-medium text-uppercase">{{ $inv->collection_type }}</div>
                                        @endif
                                    </td>
                                    
                                    <!-- Sample Status -->
                                    <td class="text-center">
                                        <div class="dropdown">
                                            @php
                                                $sampleStatusColors = [
                                                    'Pending' => 'bg-light text-muted border border-secondary border-opacity-25',
                                                    'Collected' => 'bg-soft-info text-info border border-info border-opacity-25',
                                                    'Dispatched' => 'bg-soft-warning text-warning border border-warning border-opacity-25',
                                                    'Received' => 'bg-soft-primary text-primary border border-primary border-opacity-25',
                                                    'Processing' => 'bg-soft-danger text-danger border border-danger border-opacity-25',
                                                    'Ready' => 'bg-soft-success text-success border border-success border-opacity-25',
                                                ];
                                                $c = $sampleStatusColors[$inv->sample_status] ?? 'bg-light text-muted';
                                            @endphp
                                            <button class="btn btn-sm dropdown-toggle fw-bold fs-11 {{ $c }} w-100 d-inline-block text-truncate"
                                                style="padding: 4px 8px; max-width: 100px;"
                                                type="button" data-bs-toggle="dropdown" @if(!auth()->user()->can('edit invoices') && !auth()->user()->collection_center_id) disabled @endif>
                                                {{ $inv->sample_status ?? 'Pending' }}
                                            </button>
                                            @if(auth()->user()->can('edit invoices') || auth()->user()->collection_center_id)
                                                <ul class="dropdown-menu shadow-sm border-0 fs-12 p-1">
                                                    <li class="px-3 py-2 bg-light border-bottom mb-1"><span class="fw-bolder text-muted text-uppercase fs-10">Update Status</span></li>
                                                    @foreach(['Pending', 'Collected', 'Dispatched', 'Received', 'Processing', 'Ready'] as $st)
                                                        <li>
                                                            <a class="dropdown-item py-2 fw-medium {{ ($inv->sample_status ?? 'Pending') == $st ? 'bg-soft-primary text-primary fw-bold' : 'text-dark' }}"
                                                                href="javascript:void(0)"
                                                                wire:click="updateSampleStatus({{ $inv->id }}, '{{ $st }}')">
                                                                {{ $st }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </td>
                                    
                                    <!-- Actions -->
                                    <td class="text-center">
                                        <div class="action-btn-group justify-content-center flex-wrap">
                                            @if(auth()->user()->can('edit invoices') || auth()->user()->collection_center_id)
                                                <a href="{{ route('lab.invoice.edit', $inv->id) }}" wire:navigate class="action-btn action-btn-warning" title="Edit Invoice">
                                                    <i class="feather-edit-2"></i>
                                                </a>
                                                <a href="{{ route('lab.pos.summary', $inv->id) }}" wire:navigate class="action-btn action-btn-info" title="View Summary">
                                                    <i class="feather-file-text"></i>
                                                </a>
                                                <a href="{{ route('lab.reports.entry', $inv->id) }}" wire:navigate class="action-btn action-btn-success" title="Enter Results">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            @endif
                                            
                                            <div class="dropdown">
                                                <button class="action-btn action-btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" title="Print Options">
                                                    <i class="feather-printer"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm p-1 border-0" style="min-width: 180px;">
                                                    @php
                                                        $billTemplate = \App\Models\Configuration::getFor('bill_template', 'classic');
                                                    @endphp
                                                    @if(in_array($billTemplate, ['halfpage', 'thermal']))
                                                    <li><a class="dropdown-item fs-12 py-2" href="javascript:void(0)" wire:click="printInvoice({{ $inv->id }}, 1)"><i class="feather-file-text me-2 text-primary"></i> Print Receipt</a></li>
                                                    @else
                                                    <li><a class="dropdown-item fs-12 py-2" href="javascript:void(0)" wire:click="printInvoice({{ $inv->id }}, 1)"><i class="feather-file-text me-2 text-primary"></i> With Header</a></li>
                                                    <li><a class="dropdown-item fs-12 py-2" href="javascript:void(0)" wire:click="printInvoice({{ $inv->id }}, 0)"><i class="feather-file me-2 text-warning"></i> Without Header</a></li>
                                                    @endif
                                                    <li><hr class="dropdown-divider my-1"></li>
                                                    <li><a class="dropdown-item fs-12 py-2 fw-bold text-dark" href="{{ route('lab.invoice.barcode.stickers', $inv->id) }}" target="_blank"><i class="feather-maximize me-2 text-muted"></i> Barcode Stickers</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown">
                                                <button class="action-btn action-btn-whatsapp dropdown-toggle" type="button" data-bs-toggle="dropdown" @if(!$inv->patient->phone) disabled title="Phone missing" @endif>
                                                    <i class="bi bi-whatsapp"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm p-1 border-0">
                                                    <li><a class="dropdown-item fs-12 py-2" href="{{ $inv->getWhatsappLink('invoice') }}" target="_blank"><i class="feather-file-text me-2 text-success"></i>Share Invoice</a></li>
                                                    @if($inv->status === 'Completed' || $inv->sample_status === 'Ready')
                                                        <li><a class="dropdown-item fs-12 py-2" href="{{ $inv->getWhatsappLink('report') }}" target="_blank"><i class="feather-check-circle me-2 text-success"></i>Share Report</a></li>
                                                    @endif
                                                </ul>
                                            </div>

                                            @if($inv->status !== 'Cancelled' && !in_array($inv->sample_status, ['Processing', 'Ready']))
                                                @if(auth()->user()->can('delete invoices') || auth()->user()->collection_center_id)
                                                    <button onclick="confirm('Are you sure you want to CANCEL this invoice? This action will VOID the invoice and REVERSE all credited commissions.') || event.stopImmediatePropagation()"
                                                        wire:click="cancelInvoice({{ $inv->id }})" class="action-btn action-btn-danger" title="Cancel Invoice">
                                                        <i class="feather-trash-2"></i>
                                                    </button>
                                                @endif
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-5">
                                        <div class="mb-3">
                                            <i class="feather-inbox text-muted opacity-50" style="font-size:64px;"></i>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-1">No Invoices Found</h6>
                                        <div class="text-muted fs-13 mb-4">Try adjusting your filters or search query.</div>
                                        <a href="{{ route('lab.pos') }}" wire:navigate class="btn btn-primary px-4 fw-bold shadow-sm">
                                            <i class="feather-plus me-2"></i>Create New Bill
                                        </a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination Footer --}}
                <div class="d-flex justify-content-between align-items-center px-4 py-3 border-top bg-light">
                    <div class="d-flex align-items-center gap-3">
                        <span class="fs-12 text-muted fw-medium">Rows per page:</span>
                        <select class="form-select form-select-sm fw-bold border-secondary border-opacity-25 bg-white" wire:model.live="perPage" style="width:75px;">
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                        <span class="fs-12 text-muted ms-2">
                            Showing {{ $invoices->firstItem() ?? 0 }} to {{ $invoices->lastItem() ?? 0 }} of <strong>{{ $invoices->total() }}</strong> entries
                        </span>
                    </div>

                    @if($invoices->hasPages())
                        <nav>
                            <ul class="pagination pagination-sm mb-0 gap-1">
                                {{-- Previous --}}
                                @if ($invoices->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link border-0 bg-transparent text-muted"><i class="feather-chevron-left"></i></span></li>
                                @else
                                    <li class="page-item"><button wire:click="previousPage" class="page-link border-0 bg-transparent text-dark fw-bold"><i class="feather-chevron-left"></i></button></li>
                                @endif

                                {{-- Page Numbers --}}
                                @php
                                    $currentPage = $invoices->currentPage();
                                    $lastPage = $invoices->lastPage();
                                    $start = max(1, $currentPage - 1);
                                    $end = min($lastPage, $currentPage + 1);
                                @endphp

                                @if($start > 1)
                                    <li class="page-item"><button wire:click="gotoPage(1)" class="page-link border bg-white rounded-1 fs-12 fw-bold text-dark">1</button></li>
                                    @if($start > 2)
                                        <li class="page-item disabled"><span class="page-link border-0 bg-transparent fs-12 text-muted">...</span></li>
                                    @endif
                                @endif

                                @for($p = $start; $p <= $end; $p++)
                                    <li class="page-item {{ $p == $currentPage ? 'active' : '' }}">
                                        <button wire:click="gotoPage({{ $p }})" class="page-link border rounded-1 fs-12 fw-bold {{ $p == $currentPage ? 'bg-primary text-white border-primary' : 'bg-white text-dark' }}">{{ $p }}</button>
                                    </li>
                                @endfor

                                @if($end < $lastPage)
                                    @if($end < $lastPage - 1)
                                        <li class="page-item disabled"><span class="page-link border-0 bg-transparent fs-12 text-muted">...</span></li>
                                    @endif
                                    <li class="page-item"><button wire:click="gotoPage({{ $lastPage }})" class="page-link border bg-white rounded-1 fs-12 fw-bold text-dark">{{ $lastPage }}</button></li>
                                @endif

                                {{-- Next --}}
                                @if ($invoices->hasMorePages())
                                    <li class="page-item"><button wire:click="nextPage" class="page-link border-0 bg-transparent text-dark fw-bold"><i class="feather-chevron-right"></i></button></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link border-0 bg-transparent text-muted"><i class="feather-chevron-right"></i></span></li>
                                @endif
                            </ul>
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>