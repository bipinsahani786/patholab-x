<div class="nxl-h-item dropdown" x-data="{ open: false }" @click.outside="open = false" style="position: relative;">
    @if(auth()->user()->hasRole('lab_admin') || auth()->user()->hasRole('super_admin'))
        <a href="javascript:void(0);" 
           @click="open = !open"
           class="nxl-head-link me-3 d-flex align-items-center gap-3 transition-all p-2 rounded-3 hover-bg-light" 
           role="button" 
           style="border: 1px dashed rgba(0,0,0,0.1); cursor: pointer;">
            
            <div class="d-flex flex-column align-items-end">
                <span class="fs-9 fw-bold text-uppercase text-muted ls-1 mb-0">Workspace</span>
                <span class="fs-13 fw-bolder text-dark text-truncate" style="max-width: 150px;">
                    @if($activeBranchId === 'all' || !$activeBranchId)
                        All Branches
                    @else
                        {{ collect($branches)->firstWhere('id', $activeBranchId)['name'] ?? \App\Models\Branch::find($activeBranchId)?->name ?? 'Select Branch' }}
                    @endif
                </span>
            </div>
            
            <div class="bg-primary text-white rounded d-flex align-items-center justify-content-center shadow-sm" style="width: 32px; height: 32px;">
                <i class="feather-layers fs-14"></i>
            </div>
        </a>
        
        <div x-show="open"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95"
             class="dropdown-menu dropdown-menu-end shadow-xl border-0 rounded-4 p-0 show force-dropdown-down" 
             style="min-width: 300px; overflow: hidden; position: absolute; right: 0; left: auto; top: calc(100% + 8px); z-index: 1065; display: none;">
            
            <!-- CURRENT WORKSPACE HERO -->
            <div class="p-3 position-relative" style="background: linear-gradient(135deg, #0b1437 0%, #1a2a6c 100%);">
                <div class="position-absolute top-0 end-0 p-2 opacity-25">
                    <i class="feather-map-pin" style="font-size: 40px; color: white;"></i>
                </div>
                <h6 class="text-white opacity-50 mb-2 fs-9 text-uppercase ls-1">Active Context</h6>
                <div class="d-flex align-items-center gap-3 position-relative z-index-1">
                    <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 36px; height: 36px;">
                        <i class="feather-briefcase fs-16"></i>
                    </div>
                    <div>
                        <h5 class="text-white mb-1 fw-bolder" style="font-size: 14px;">
                            @if($activeBranchId === 'all' || !$activeBranchId)
                                All Branches
                            @else
                                {{ collect($branches)->firstWhere('id', $activeBranchId)['name'] ?? \App\Models\Branch::find($activeBranchId)?->name ?? 'Select Branch' }}
                            @endif
                        </h5>
                        <span class="badge bg-white text-primary fw-bolder border-0 fs-9 px-2 py-1">
                            {{ $activeBranchId === 'all' ? 'Global View' : 'Branch View' }}
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- BRANCH SELECTION GRID -->
            <div class="p-2 bg-light border-bottom">
                <span class="fw-bolder text-dark text-uppercase ms-2" style="font-size: 10px; letter-spacing: 1px;">Switch Workspace</span>
            </div>

            <div class="p-2 overflow-y-auto" style="background-color: #f8f9fa; max-height: 400px;">
                
                <!-- ALL BRANCHES OPTION -->
                <a href="javascript:void(0);" 
                   wire:click="switchBranch('all')" 
                   @click="open = false"
                   class="d-flex align-items-center gap-2 p-2 rounded-2 mb-1 text-decoration-none transition-all {{ ($activeBranchId === 'all' || !$activeBranchId) ? 'border border-primary bg-white shadow-sm' : 'border border-transparent hover-bg-white hover-shadow-sm' }}">
                    
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 {{ ($activeBranchId === 'all' || !$activeBranchId) ? 'bg-primary text-white' : 'bg-soft-secondary text-secondary' }}" style="width: 28px; height: 28px;">
                        <i class="feather-globe" style="font-size: 12px;"></i>
                    </div>
                    
                    <div class="flex-grow-1">
                        <div class="fw-bold m-0 p-0 {{ ($activeBranchId === 'all' || !$activeBranchId) ? 'text-primary' : 'text-dark' }}" style="font-size: 12px; line-height: 1.2;">Standard View</div>
                        <div class="text-muted m-0 p-0" style="font-size: 10px; line-height: 1.2;">See data from all branches</div>
                    </div>
                    
                    @if($activeBranchId === 'all' || !$activeBranchId)
                        <i class="feather-check-circle text-primary" style="font-size: 14px;"></i>
                    @endif
                </a>

                <!-- INDIVIDUAL BRANCHES -->
                <div class="row g-1 mt-1">
                    @forelse($branches as $branch)
                        <div class="col-12">
                            <a href="javascript:void(0);" 
                               wire:click="switchBranch({{ $branch->id }})" 
                               @click="open = false"
                               class="d-flex align-items-center gap-2 p-2 rounded-2 text-decoration-none transition-all {{ $activeBranchId == $branch->id ? 'border border-primary bg-white shadow-sm' : 'border border-light bg-white hover-shadow-sm' }}">
                                
                                <div class="rounded d-flex align-items-center justify-content-center flex-shrink-0 {{ $activeBranchId == $branch->id ? 'bg-primary text-white' : ($branch->type === 'main_lab' ? 'bg-soft-danger text-danger' : 'bg-soft-info text-info') }}" style="width: 28px; height: 28px;">
                                    <i class="feather-home" style="font-size: 12px;"></i>
                                </div>
                                
                                <div class="flex-grow-1 overflow-hidden">
                                    <div class="fw-bold text-truncate m-0 p-0 {{ $activeBranchId == $branch->id ? 'text-primary' : 'text-dark' }}" style="font-size: 12px; line-height: 1.2;">{{ $branch->name }}</div>
                                    <div class="opacity-75 text-muted m-0 p-0" style="font-size: 10px; line-height: 1.2;">{{ $branch->type === 'main_lab' ? 'Main Lab' : 'Processing Center' }}</div>
                                </div>
                                
                                @if($activeBranchId == $branch->id)
                                    <i class="feather-check-circle text-primary" style="font-size: 14px;"></i>
                                @endif
                            </a>
                        </div>
                    @empty
                        <div class="col-12 p-3 text-center">
                            <i class="feather-folder-minus text-muted d-block mb-1" style="font-size: 24px;"></i>
                            <span class="text-muted fw-medium" style="font-size: 11px;">No branches available</span>
                        </div>
                    @endforelse
                </div>
            </div>
            
            <!-- FOOTER ACTION -->
            <div class="p-2 bg-white text-center border-top">
                <a href="{{ route('lab.branches') }}" wire:navigate @click="open = false" class="btn btn-light btn-sm w-100 fw-bold d-flex align-items-center justify-content-center gap-1" style="font-size: 11px; padding: 6px;">
                    <i class="feather-settings" style="font-size: 12px;"></i> Manage Branch Settings
                </a>
            </div>
        </div>
    @endif
    
    <style>
        .max-h-300 { max-height: 250px; }
        .overflow-y-auto { overflow-y: auto; }
        .transition-all { transition: all 0.2s ease; }
        .hover-bg-light:hover { background-color: rgba(0,0,0,0.02); }
        .hover-bg-white:hover { background-color: #ffffff; }
        .hover-shadow-sm:hover { box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; }
        .z-index-1 { z-index: 1; }
        
        /* Force Dropdown to always open downwards and ignore Popper.js upward transforms */
        .force-dropdown-down {
            top: calc(100% + 8px) !important;
            bottom: auto !important;
            transform: none !important;
            right: 0 !important;
            left: auto !important;
        }
    </style>
</div>
