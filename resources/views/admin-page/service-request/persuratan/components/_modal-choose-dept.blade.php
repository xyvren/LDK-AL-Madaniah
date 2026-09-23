{{-- Path: resources/views/admin-page/service-request/persuratan/components/_modal-choose-dept.blade.php --}}
<div class="modal fade" id="modalAdminChooseDept" tabindex="-1" role="dialog" aria-labelledby="modalAdminChooseDeptLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content rounded-4 border-0 shadow overflow-hidden">

            {{-- Top Teal Gradient Accent Line --}}
            <div style="height: 4px; background: linear-gradient(90deg, #2563eb 0%, #008b84 100%);"></div>

            {{-- Modal Header --}}
            <div class="modal-header border-bottom px-4 pt-3 pb-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="adm-header-icon primary">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <div>
                        <span class="small font-weight-bold text-custom text-uppercase letter-spacing-1 d-block" style="font-size:0.72rem;">
                            Department Selector
                        </span>
                        <h5 class="modal-title font-weight-bold text-dark mb-0" id="modalAdminChooseDeptLabel">
                            Pilih Bidang / LDKS Fakultas
                        </h5>
                    </div>
                </div>
                <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close" style="font-size:1.5rem; line-height: 1;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- Search & Category Filter Section --}}
            <div class="px-4 py-3 adm-modal-search-wrap border-bottom bg-light">
                {{-- Live Search Bar --}}
                <div class="adm-modal-search-box mb-2">
                    <i class="fas fa-search adm-search-icon"></i>
                    <input type="text" id="admSearchDeptModalInput" class="form-control adm-modal-search-input"
                           placeholder="Ketik untuk mencari bidang, kode, atau fakultas (e.g. kaderisasi, humas, fst)..."
                           autocomplete="off">
                    <button type="button" id="admSearchDeptClear" class="adm-search-clear-btn d-none" title="Hapus pencarian">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                {{-- Category Filter Pills --}}
                <div class="adm-modal-cat-pills">
                    <button type="button" class="adm-modal-cat-pill active adm-dept-pill" data-cat="all">
                        <i class="fas fa-th-large me-1"></i> Semua (23)
                    </button>
                    <button type="button" class="adm-modal-cat-pill adm-dept-pill" data-cat="pusat">
                        <i class="fas fa-landmark me-1"></i> Pengurus Pusat (13)
                    </button>
                    <button type="button" class="adm-modal-cat-pill adm-dept-pill" data-cat="fakultas">
                        <i class="fas fa-graduation-cap me-1"></i> LDKS Fakultas (10)
                    </button>
                </div>
            </div>

            {{-- Modal Body: Department Grid --}}
            <div class="modal-body p-4" style="max-height: 460px; overflow-y: auto;">
                <div class="row g-2" id="admModalDeptGrid">
                    @foreach (\App\Support\DepartmentRegistry::items() as $code => $dept)
                        @php
                            $isCurrent = old('kode_bidang', $suratLog->kodeBidangPengaju()) === $code;
                            $groupLabel = ($dept['group'] ?? '') === 'pusat' ? 'Pengurus Pusat' : 'LDKS Fakultas';
                        @endphp
                        <div class="col-md-6 col-12 mb-2 adm-dept-modal-item"
                             data-cat="{{ $dept['group'] }}"
                             data-name="{{ strtolower($dept['name']) }} {{ strtolower($dept['code']) }} {{ strtolower($dept['desc']) }}">
                            <div class="adm-dept-card {{ $isCurrent ? 'active' : '' }}"
                                 data-code="{{ $code }}"
                                 data-name="{{ $dept['name'] }}"
                                 data-icon="{{ $dept['icon'] }}"
                                 data-desc="{{ $dept['desc'] }}"
                                 data-group="{{ $groupLabel }}"
                                 role="button"
                                 tabindex="0">
                                <div class="adm-dept-card-icon">
                                    <i class="fas {{ $dept['icon'] }}"></i>
                                </div>
                                <div class="flex-grow-1 min-width-0">
                                    <div class="d-flex align-items-center gap-1 mb-1">
                                        <span class="adm-code-badge font-monospace">{{ $dept['code'] }}</span>
                                        <span class="badge adm-group-badge {{ $dept['group'] === 'pusat' ? 'bg-soft-primary' : 'bg-soft-teal' }}">
                                            {{ $dept['badge'] ?? ($dept['group'] === 'pusat' ? 'Pusat' : 'Fakultas') }}
                                        </span>
                                    </div>
                                    <div class="adm-dept-card-name text-truncate" title="{{ $dept['name'] }}">
                                        {{ $dept['name'] }}
                                    </div>
                                    <div class="adm-dept-card-desc text-truncate" title="{{ $dept['desc'] }}">
                                        {{ $dept['desc'] }}
                                    </div>
                                </div>
                                <div class="adm-dept-check-circle flex-shrink-0 ms-1">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Empty State --}}
                    <div id="admDeptEmptyState" class="col-12 text-center py-5 d-none">
                        <div class="mb-3 text-muted" style="font-size: 2.5rem; opacity: 0.6;">
                            <i class="fas fa-search-minus"></i>
                        </div>
                        <h6 class="font-weight-bold text-dark mb-1">Bidang Tidak Ditemukan</h6>
                        <p class="text-muted small mb-3">Tidak ada bidang atau fakultas yang cocok dengan kata kunci pencarian Anda.</p>
                        <button type="button" class="btn btn-outline-teal btn-sm rounded-pill px-3" id="admResetDeptSearch">
                            <i class="fas fa-undo me-1"></i> Reset Pencarian
                        </button>
                    </div>
                </div>
            </div>

            {{-- Modal Footer --}}
            <div class="modal-footer border-top px-4 py-2 bg-light d-flex justify-content-between align-items-center">
                <div class="small text-muted text-truncate me-2" style="max-width: 65%;">
                    <i class="fas fa-info-circle text-custom me-1"></i>
                    Bidang terpilih akan digunakan sebagai penentu kode klasifikasi surat resmi.
                </div>
                <button type="button" class="btn btn-secondary btn-sm rounded-pill px-3 font-weight-bold" data-dismiss="modal">
                    Tutup
                </button>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var searchDeptInput = document.getElementById('admSearchDeptModalInput');
    var clearSearchBtn  = document.getElementById('admSearchDeptClear');
    var resetSearchBtn  = document.getElementById('admResetDeptSearch');
    var deptPills       = document.querySelectorAll('.adm-dept-pill');
    var deptItems       = document.querySelectorAll('.adm-dept-modal-item');
    var deptCards       = document.querySelectorAll('.adm-dept-card');
    var emptyState      = document.getElementById('admDeptEmptyState');

    // Trigger target elements
    var hiddenDeptInput = document.getElementById('admin_kode_bidang');
    var triggerIcon     = document.getElementById('admDeptPickerIcon');
    var triggerTitle    = document.getElementById('admDeptPickerTitle');
    var triggerDesc     = document.getElementById('admDeptPickerDesc');
    var triggerCode     = document.getElementById('admDeptPickerCode');
    var triggerGroup    = document.getElementById('admDeptPickerGroup');

    var activeCat       = 'all';

    function filterDeptItems() {
        var query = (searchDeptInput ? searchDeptInput.value.toLowerCase().trim() : '');
        var visibleCount = 0;

        if (clearSearchBtn) {
            if (query.length > 0) {
                clearSearchBtn.classList.remove('d-none');
            } else {
                clearSearchBtn.classList.add('d-none');
            }
        }

        deptItems.forEach(function (item) {
            var itemCat  = item.getAttribute('data-cat');
            var itemName = item.getAttribute('data-name') || '';

            var matchesCat   = (activeCat === 'all' || itemCat === activeCat);
            var matchesQuery = (query === '' || itemName.indexOf(query) !== -1);

            if (matchesCat && matchesQuery) {
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        if (emptyState) {
            if (visibleCount === 0) {
                emptyState.classList.remove('d-none');
            } else {
                emptyState.classList.add('d-none');
            }
        }
    }

    if (searchDeptInput) {
        searchDeptInput.addEventListener('input', filterDeptItems);
    }

    if (clearSearchBtn) {
        clearSearchBtn.addEventListener('click', function () {
            if (searchDeptInput) {
                searchDeptInput.value = '';
                searchDeptInput.focus();
            }
            filterDeptItems();
        });
    }

    if (resetSearchBtn) {
        resetSearchBtn.addEventListener('click', function () {
            if (searchDeptInput) searchDeptInput.value = '';
            deptPills.forEach(function (p) {
                if (p.getAttribute('data-cat') === 'all') {
                    p.classList.add('active');
                } else {
                    p.classList.remove('active');
                }
            });
            activeCat = 'all';
            filterDeptItems();
        });
    }

    deptPills.forEach(function (pill) {
        pill.addEventListener('click', function () {
            deptPills.forEach(function (p) { p.classList.remove('active'); });
            this.classList.add('active');
            activeCat = this.getAttribute('data-cat');
            filterDeptItems();
        });
    });

    function selectDepartment(card) {
        var code  = card.getAttribute('data-code');
        var name  = card.getAttribute('data-name');
        var icon  = card.getAttribute('data-icon');
        var desc  = card.getAttribute('data-desc');
        var group = card.getAttribute('data-group');

        if (hiddenDeptInput) hiddenDeptInput.value = code;
        if (triggerIcon && icon) triggerIcon.innerHTML = '<i class="fas ' + icon + '"></i>';
        if (triggerTitle && name) triggerTitle.textContent = name;
        if (triggerDesc && desc) triggerDesc.textContent = desc;
        if (triggerCode && code) triggerCode.textContent = code;
        if (triggerGroup && group) triggerGroup.textContent = group;

        deptCards.forEach(function (c) {
            c.classList.remove('active');
        });

        card.classList.add('active');

        $('#modalAdminChooseDept').modal('hide');
    }

    deptCards.forEach(function (card) {
        card.addEventListener('click', function () {
            selectDepartment(this);
        });

        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                selectDepartment(this);
            }
        });
    });

    $('#modalAdminChooseDept').on('shown.bs.modal', function () {
        if (searchDeptInput) {
            searchDeptInput.focus();
            searchDeptInput.select();
        }
    });
});
</script>