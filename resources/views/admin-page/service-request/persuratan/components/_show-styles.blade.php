{{-- Path: resources/views/admin-page/service-request/persuratan/components/_show-styles.blade.php --}}
<style>
/* ================================================================
   ADMIN PERSURATAN SHOW — LDK Syahid Design System Alignment
   ================================================================ */

/* ── Page Title Styles (Standard Admin Pattern) ──────────── */
.page-title {
    font-size: 1.65rem;
    font-weight: 600;
    text-align: center;
    color: #00a79d;
    margin: .75rem 0 1.5rem;
    position: relative;
    display: inline-block;
}
.page-title .highlighted-text {
    color: #008b84;
    font-weight: 700;
}
.page-title::after {
    content: '';
    display: block;
    height: 4px;
    width: 120px;
    margin: .35rem auto 0;
    border-radius: 3px;
    background: linear-gradient(90deg, #00a79d 0%, #008b84 100%);
}

.text-custom {
    color: #00a79d !important;
}

/* ── Section Title ───────────────────────────────────────── */
.section-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #00a79d;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #e0f7f5;
}

/* ── Custom Primary Button ───────────────────────────────── */
.btn-custom-primary {
    color: #fff !important;
    background-color: #00a79d;
    border: 1px solid #00a79d;
    transition: all 0.3s ease;
}
.btn-custom-primary:hover {
    background-color: #008b84;
    border-color: #008b84;
    color: #fff !important;
}
.btn-custom-primary:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 167, 157, 0.25);
}

.btn-outline-teal {
    color: #00a79d !important;
    border: 1.5px solid #00a79d !important;
    background-color: transparent !important;
    font-weight: 600;
    transition: all 0.2s ease;
}
.btn-outline-teal:hover {
    background-color: #00a79d !important;
    color: #ffffff !important;
}

/* ── Cards ───────────────────────────────────────────────── */
.card {
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    background: #ffffff;
}

/* ── Header Icons ────────────────────────────────────────── */
.adm-header-icon {
    width: 36px;
    height: 36px;
    min-width: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
}
.adm-header-icon.primary { background-color: #e0f7f5; color: #00a79d; }
.adm-header-icon.success { background-color: #d1fae5; color: #059669; }
.adm-header-icon.danger  { background-color: #fee2e2; color: #dc2626; }
.adm-header-icon.warning { background-color: #fef3c7; color: #d97706; }

/* ── Detail Table ────────────────────────────────────────── */
.adm-detail-table {
    width: 100%;
}
.adm-detail-table tr {
    border-bottom: 1px solid #f1f5f9;
}
.adm-detail-table tr:last-child {
    border-bottom: none;
}
.adm-detail-table td {
    padding: 0.8rem 0;
    vertical-align: top;
    font-size: 0.88rem;
}
.adm-detail-label {
    width: 38%;
    font-weight: 700;
    color: #64748b;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    padding-right: 1rem;
}
.adm-detail-val {
    color: #0f172a;
    font-weight: 600;
}

/* ── Badges ──────────────────────────────────────────────── */
.adm-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    padding: 0.35rem 0.75rem;
    border-radius: 50rem;
    font-size: 0.75rem;
    font-weight: 700;
}
.adm-badge-success { background-color: #dcfce7 !important; color: #15803d !important; border: 1px solid #86efac !important; }
.adm-badge-warning { background-color: #fef3c7 !important; color: #b45309 !important; border: 1px solid #fcd34d !important; }
.adm-badge-danger  { background-color: #fee2e2 !important; color: #b91c1c !important; border: 1px solid #fca5a5 !important; }
.adm-badge-neutral { background-color: #f1f5f9 !important; color: #334155 !important; border: 1px solid #cbd5e1 !important; }

/* ── Action Boxes ────────────────────────────────────────── */
.adm-action-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 0.85rem 1rem;
    margin-bottom: 1rem;
}

/* ── Department Picker Trigger Card ────────────────────────── */
.adm-dept-trigger-card {
    display: flex;
    align-items: center;
    gap: 0.85rem;
    padding: 0.85rem 1rem;
    background: #ffffff;
    border: 1.5px solid #cbd5e1;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    user-select: none;
    width: 100%;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
    overflow: hidden;
}
.adm-dept-trigger-card:hover {
    border-color: #00a79d;
    background: #f0fdfa;
    box-shadow: 0 4px 14px rgba(0, 167, 157, 0.15);
    transform: translateY(-1px);
}
.adm-dept-trigger-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 10px;
    background-color: #e0f7f5;
    color: #00a79d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
    transition: all 0.2s;
}
.adm-dept-trigger-card:hover .adm-dept-trigger-icon {
    background-color: #00a79d;
    color: #ffffff;
}
.adm-dept-card-text-wrap {
    flex: 1 1 0%;
    min-width: 0;
    overflow: hidden;
}
.adm-dept-code-tag {
    display: inline-block;
    padding: 0.15rem 0.45rem;
    background-color: #e0f7f5;
    color: #008b84;
    font-size: 0.7rem;
    font-weight: 700;
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    border-radius: 6px;
    border: 1px solid rgba(0, 167, 157, 0.25);
    line-height: 1.2;
}
.adm-dept-group-tag {
    font-size: 0.68rem;
    font-weight: 600;
    color: #64748b;
}
.adm-dept-picker-title {
    font-size: 0.88rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1.3;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.adm-dept-picker-desc {
    font-size: 0.72rem;
    color: #64748b;
    line-height: 1.2;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.adm-dept-arrow {
    width: 28px;
    height: 28px;
    min-width: 28px;
    border-radius: 50%;
    background-color: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #64748b;
    font-size: 0.75rem;
    flex-shrink: 0;
    transition: all 0.2s ease;
}
.adm-dept-trigger-card:hover .adm-dept-arrow {
    background-color: #00a79d;
    color: #ffffff;
    transform: translateX(2px);
}

/* ── Modal Search Box & Category Pills ───────────────────── */
.adm-modal-search-box {
    position: relative;
}
.adm-search-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
    font-size: 0.85rem;
    pointer-events: none;
    z-index: 4;
}
.adm-modal-search-input {
    padding-left: 2.3rem !important;
    padding-right: 2.3rem !important;
    height: 42px;
    border-radius: 10px !important;
    border: 1.5px solid #cbd5e1;
    font-size: 0.85rem;
    transition: all 0.2s ease;
}
.adm-modal-search-input:focus {
    border-color: #00a79d;
    box-shadow: 0 0 0 3px rgba(0, 167, 157, 0.15);
}
.adm-search-clear-btn {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
    background: transparent;
    border: none;
    padding: 4px 8px;
    font-size: 0.8rem;
    border-radius: 50%;
    cursor: pointer;
    z-index: 4;
}
.adm-search-clear-btn:hover {
    color: #ef4444;
}

.adm-modal-cat-pills {
    display: flex;
    gap: 0.5rem;
    overflow-x: auto;
    padding: 0.25rem 0 0.5rem;
    scrollbar-width: thin;
}
.adm-modal-cat-pill, .adm-dept-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.45rem 0.95rem;
    border-radius: 50rem;
    font-size: 0.78rem;
    font-weight: 700;
    border: 1.5px solid #e2e8f0;
    background: #ffffff;
    color: #475569 !important;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
}
.adm-modal-cat-pill:hover, .adm-dept-pill:hover {
    background: #e0f7f5;
    border-color: #00a79d;
    color: #008b84 !important;
    transform: translateY(-1px);
}
.adm-modal-cat-pill.active, .adm-dept-pill.active {
    background: linear-gradient(135deg, #00a79d 0%, #008b84 100%);
    border-color: #00a79d;
    color: #ffffff !important;
    box-shadow: 0 3px 10px rgba(0, 167, 157, 0.3);
}

/* ── Modal Department Items / Cards ──────────────────────── */
.adm-dept-card {
    display: flex;
    align-items: center;
    gap: 0.85rem;
    padding: 0.85rem 1rem;
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    user-select: none;
    height: 100%;
}
.adm-dept-card:hover {
    border-color: #00a79d;
    background: #f0fdfa;
    transform: translateY(-2px);
    box-shadow: 0 4px 14px rgba(0, 167, 157, 0.12);
}
.adm-dept-card.active {
    border-color: #00a79d;
    background: #e0f7f5;
    box-shadow: 0 4px 14px rgba(0, 167, 157, 0.2);
}
.adm-dept-card-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 10px;
    background-color: #e0f7f5;
    color: #00a79d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    transition: all 0.2s;
}
.adm-dept-card:hover .adm-dept-card-icon {
    background-color: #00a79d;
    color: #ffffff;
}
.adm-dept-card.active .adm-dept-card-icon {
    background-color: #00a79d;
    color: #ffffff;
}
.adm-dept-card-name {
    font-size: 0.85rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1.25;
}
.adm-dept-card-desc {
    font-size: 0.72rem;
    color: #64748b;
    line-height: 1.2;
}
.adm-code-badge {
    background-color: #f1f5f9;
    color: #475569;
    font-size: 0.68rem;
    font-weight: 700;
    padding: 0.15rem 0.4rem;
    border-radius: 4px;
    letter-spacing: 0.03em;
}
.adm-group-badge {
    font-size: 0.65rem;
    font-weight: 600;
    padding: 0.15rem 0.45rem;
    border-radius: 50rem;
}
.bg-soft-primary {
    background-color: #e0f7f5;
    color: #008b84;
}
.bg-soft-teal {
    background-color: #e0e7ff;
    color: #4338ca;
}
.adm-dept-check-circle {
    width: 26px;
    height: 26px;
    min-width: 26px;
    border-radius: 50%;
    border: 1.5px solid #cbd5e1;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    transition: all 0.2s ease;
    color: transparent;
    background-color: transparent;
}
.adm-dept-card:hover .adm-dept-check-circle {
    border-color: #00a79d;
}
.adm-dept-card.active .adm-dept-check-circle {
    background-color: #00a79d;
    border-color: #00a79d;
    color: #ffffff;
    box-shadow: 0 2px 6px rgba(0, 167, 157, 0.4);
}

/* Fallback for legacy class */
.adm-type-picker-btn {
    display: flex;
    align-items: center;
    gap: 0.65rem;
    min-height: 42px;
    padding: 0.5rem 0.95rem;
    background: #f8fafc;
    border: 1.5px solid #cbd5e1;
    border-radius: 10px;
    cursor: pointer;
    font-size: 0.84rem;
    color: #1e293b;
    transition: all 0.2s;
    user-select: none;
    width: 100%;
}

/* ── Verification Box ────────────────────────────────────── */
.adm-verify-token-box {
    background: #e0f7f5;
    border: 1px dashed rgba(0, 167, 157, 0.4);
    border-radius: 10px;
    padding: 0.75rem 1rem;
    color: #008b84;
}

/* ============================================================
   GLOBAL DARK MODE OVERRIDES (HTML.DARK-MODE)
   ============================================================ */
html.dark-mode .section-title {
    color: #2dd4bf;
    border-bottom-color: #373b3e;
}

html.dark-mode .card {
    background: #2b2f33 !important;
    border-color: #373b3e !important;
}

html.dark-mode .adm-detail-table tr {
    border-bottom-color: #373b3e;
}
html.dark-mode .adm-detail-label {
    color: #94a3b8;
}
html.dark-mode .adm-detail-val {
    color: #e4e6eb;
}

html.dark-mode .adm-action-box {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #e4e6eb !important;
}

html.dark-mode .adm-header-icon.primary {
    background: rgba(0, 167, 157, 0.2) !important;
    color: #2dd4bf !important;
}

html.dark-mode .adm-type-picker-btn {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #e4e6eb !important;
}
html.dark-mode .adm-type-picker-btn:hover,
html.dark-mode .adm-type-picker-btn.has-filter {
    background: rgba(0, 167, 157, 0.18) !important;
    border-color: #00a79d !important;
    color: #2dd4bf !important;
}

/* ── Department Picker Trigger & Modal in Dark Mode ──────── */
html.dark-mode .adm-dept-trigger-card {
    background: #1e2227 !important;
    border-color: #373b3e !important;
    color: #e4e6eb !important;
}
html.dark-mode .adm-dept-trigger-card:hover {
    background: rgba(0, 167, 157, 0.14) !important;
    border-color: #00a79d !important;
}
html.dark-mode .adm-dept-trigger-icon {
    background-color: rgba(0, 167, 157, 0.2) !important;
    color: #2dd4bf !important;
}
html.dark-mode .adm-dept-trigger-card:hover .adm-dept-trigger-icon {
    background-color: #00a79d !important;
    color: #ffffff !important;
}
html.dark-mode .adm-dept-picker-title {
    color: #f1f5f9 !important;
}
html.dark-mode .adm-dept-picker-desc {
    color: #94a3b8 !important;
}
html.dark-mode .adm-dept-code-tag {
    background-color: rgba(0, 167, 157, 0.2) !important;
    color: #2dd4bf !important;
    border-color: rgba(0, 167, 157, 0.4) !important;
}
html.dark-mode .adm-dept-group-tag {
    color: #94a3b8 !important;
}
html.dark-mode .adm-dept-arrow {
    background-color: #1a1d21 !important;
    color: #94a3b8 !important;
}
html.dark-mode .adm-dept-trigger-card:hover .adm-dept-arrow {
    background-color: #00a79d !important;
    color: #ffffff !important;
}

html.dark-mode .modal-content {
    background: #24282c !important;
    border-color: #373b3e !important;
    color: #e4e6eb !important;
}
html.dark-mode .modal-header {
    border-bottom-color: #373b3e !important;
}
html.dark-mode .modal-footer {
    background-color: #1a1d21 !important;
    border-top-color: #373b3e !important;
}
html.dark-mode .modal-title {
    color: #f1f5f9 !important;
}
html.dark-mode .adm-modal-search-wrap {
    background-color: #1e2227 !important;
    border-bottom: 1px solid #373b3e !important;
}
html.dark-mode .adm-modal-search-input {
    background-color: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #f1f5f9 !important;
}
html.dark-mode .adm-modal-search-input:focus {
    border-color: #00a79d !important;
    box-shadow: 0 0 0 3px rgba(0, 167, 157, 0.25) !important;
}
html.dark-mode .adm-modal-cat-pill,
html.dark-mode .adm-dept-pill {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #cbd5e1 !important;
}
html.dark-mode .adm-modal-cat-pill:hover,
html.dark-mode .adm-dept-pill:hover {
    background: rgba(0, 167, 157, 0.2) !important;
    border-color: #00a79d !important;
    color: #2dd4bf !important;
}
html.dark-mode .adm-modal-cat-pill.active,
html.dark-mode .adm-dept-pill.active {
    background: linear-gradient(135deg, #00a79d 0%, #008b84 100%) !important;
    border-color: #00a79d !important;
    color: #ffffff !important;
}
html.dark-mode .adm-dept-card {
    background: #1e2227 !important;
    border-color: #373b3e !important;
    color: #e4e6eb !important;
}
html.dark-mode .adm-dept-card:hover {
    background: rgba(0, 167, 157, 0.12) !important;
    border-color: #00a79d !important;
}
html.dark-mode .adm-dept-card.active {
    background: rgba(0, 167, 157, 0.2) !important;
    border-color: #00a79d !important;
}
html.dark-mode .adm-dept-card-icon {
    background-color: rgba(0, 167, 157, 0.2) !important;
    color: #2dd4bf !important;
}
html.dark-mode .adm-dept-card:hover .adm-dept-card-icon,
html.dark-mode .adm-dept-card.active .adm-dept-card-icon {
    background-color: #00a79d !important;
    color: #ffffff !important;
}
html.dark-mode .adm-dept-card-name {
    color: #f1f5f9 !important;
}
html.dark-mode .adm-dept-card-desc {
    color: #94a3b8 !important;
}
html.dark-mode .adm-code-badge {
    background-color: #1a1d21 !important;
    color: #94a3b8 !important;
}
html.dark-mode .bg-soft-primary {
    background-color: rgba(0, 167, 157, 0.25) !important;
    color: #2dd4bf !important;
}
html.dark-mode .bg-soft-teal {
    background-color: rgba(99, 102, 241, 0.25) !important;
    color: #a5b4fc !important;
}
html.dark-mode .adm-dept-check-circle {
    border-color: #4b5563 !important;
}
html.dark-mode .adm-dept-card.active .adm-dept-check-circle {
    background-color: #00a79d !important;
    border-color: #00a79d !important;
    color: #ffffff !important;
}

html.dark-mode .adm-verify-token-box {
    background: rgba(0, 167, 157, 0.15) !important;
    border-color: rgba(0, 167, 157, 0.3) !important;
    color: #2dd4bf !important;
}

html.dark-mode .adm-badge-neutral {
    background-color: #1a1d21 !important;
    color: #cbd5e1 !important;
    border-color: #373b3e !important;
}


/* ── Status Badges in Dark Mode (High Specificity to beat global body span rule) ── */
html.dark-mode .adm-badge-success,
html.dark-mode span.adm-badge-success {
    background-color: rgba(16, 185, 129, 0.2) !important;
    color: #34d399 !important;
    border: 1px solid rgba(16, 185, 129, 0.4) !important;
}

html.dark-mode .adm-badge-warning,
html.dark-mode span.adm-badge-warning {
    background-color: rgba(245, 158, 11, 0.2) !important;
    color: #fbbf24 !important;
    border: 1px solid rgba(245, 158, 11, 0.4) !important;
}

html.dark-mode .adm-badge-danger,
html.dark-mode span.adm-badge-danger {
    background-color: rgba(239, 68, 68, 0.2) !important;
    color: #f87171 !important;
    border: 1px solid rgba(239, 68, 68, 0.4) !important;
}

html.dark-mode .adm-badge-neutral,
html.dark-mode span.adm-badge-neutral {
    background-color: #1a1d21 !important;
    color: #cbd5e1 !important;
    border: 1px solid #373b3e !important;
}

/* ── Status Text Helpers in Dark Mode ── */
html.dark-mode .btn-outline-teal {
    color: #2dd4bf !important;
    border-color: #00a79d !important;
}
html.dark-mode .btn-outline-teal:hover {
    background-color: #00a79d !important;
    color: #ffffff !important;
}
html.dark-mode .text-success { color: #34d399 !important; }
html.dark-mode .text-danger  { color: #f87171 !important; }
html.dark-mode .text-warning { color: #fbbf24 !important; }

/* ── Mobile Responsive Overrides ─────────────────────────── */
@media (max-width: 767.98px) {
    .page-title { font-size: 1.35rem; }
    .card-body { padding: 1rem; }
    .adm-detail-label { width: 45%; font-size: 0.75rem; }
    .adm-detail-val { font-size: 0.82rem; }
}
</style>