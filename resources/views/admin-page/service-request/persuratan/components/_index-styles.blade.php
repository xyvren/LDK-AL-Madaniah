{{-- Path: resources/views/admin-page/service-request/persuratan/components/_index-styles.blade.php --}}
<style>
/* ================================================================
   ADMIN PERSURATAN — LDK Al-Madaniah Design System Alignment
   ================================================================ */

/* ── Page Title Styles (Standard Admin Pattern) ──────────── */
.page-title {
    font-size: 1.65rem;
    font-weight: 600;
    text-align: center;
    color: #2563eb;
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
    background: linear-gradient(90deg, #2563eb 0%, #008b84 100%);
}

.text-custom {
    color: #2563eb !important;
}

/* ── Custom Primary Button ───────────────────────────────── */
.btn-custom-primary {
    color: #fff !important;
    background-color: #2563eb;
    border: 1px solid #2563eb;
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

/* ── KPI Stat Cards ──────────────────────────────────────── */
.adm-kpi-link {
    text-decoration: none !important;
    color: inherit !important;
    display: block;
}
.adm-kpi-card {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid #e2e8f0;
    padding: 1.1rem 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.95rem;
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}
.adm-kpi-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
}
.adm-kpi-icon {
    width: 46px;
    height: 46px;
    min-width: 46px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
}
.adm-kpi-icon.primary   { background: #e0f7f5; color: #2563eb; }
.adm-kpi-icon.warning   { background: #fef3c7; color: #d97706; }
.adm-kpi-icon.success   { background: #d1fae5; color: #059669; }
.adm-kpi-icon.danger    { background: #fee2e2; color: #dc2626; }
.adm-kpi-icon.secondary { background: #f1f5f9; color: #64748b; }

.adm-kpi-title {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #64748b;
    margin-bottom: 0.15rem;
}
.adm-kpi-number {
    font-size: 1.45rem;
    font-weight: 800;
    line-height: 1;
    color: #0f172a;
    margin: 0;
}
.adm-kpi-number.warning { color: #d97706 !important; }
.adm-kpi-number.success { color: #059669 !important; }
.adm-kpi-number.danger  { color: #dc2626 !important; }

/* ── Status Filter Pills ─────────────────────────────────── */
.adm-status-pills-wrap {
    display: flex;
    gap: 0.5rem;
    overflow-x: auto;
    padding: 0.25rem 0 0.5rem;
    scrollbar-width: thin;
    margin-bottom: 1rem;
}
.adm-status-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    padding: 0.5rem 0.95rem;
    border-radius: 50rem;
    font-size: 0.8rem;
    font-weight: 700;
    text-decoration: none !important;
    background: #ffffff;
    color: #475569 !important;
    border: 1.5px solid #e2e8f0;
    white-space: nowrap;
    transition: all 0.2s cubic-bezier(.4,0,.2,1);
    box-shadow: 0 1px 3px rgba(0,0,0,0.03);
}
.adm-status-pill:hover {
    background: #e0f7f5;
    border-color: #2563eb;
    color: #008b84 !important;
    transform: translateY(-1px);
}
.adm-status-pill.active {
    background: linear-gradient(135deg, #2563eb 0%, #008b84 100%);
    border-color: #2563eb;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(0, 167, 157, 0.35);
}
.adm-status-pill.pending.active  { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border-color: #f59e0b; box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35); }
.adm-status-pill.approved.active { background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-color: #10b981; box-shadow: 0 4px 14px rgba(16, 185, 129, 0.35); }
.adm-status-pill.rejected.active { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); border-color: #ef4444; box-shadow: 0 4px 14px rgba(239, 68, 68, 0.35); }
.adm-status-pill.expired.active  { background: linear-gradient(135deg, #64748b 0%, #475569 100%); border-color: #64748b; box-shadow: 0 4px 14px rgba(100, 116, 139, 0.35); }

/* ── Filter Card & Type Selector Trigger ─────────────────── */
.adm-filter-card {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid #e2e8f0;
    padding: 1rem 1.25rem;
    margin-bottom: 1.25rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}

.adm-filter-card .input-group-text {
    background-color: #ffffff;
    border-color: #ced4da;
}

.adm-type-picker-btn {
    display: flex;
    align-items: center;
    gap: 0.65rem;
    min-height: 38px;
    padding: 0.45rem 0.95rem;
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
.adm-type-picker-btn:hover {
    border-color: #2563eb;
    background: #e0f7f5;
    color: #008b84;
}
.adm-type-picker-btn.has-filter {
    background: #e0f7f5;
    border-color: #2563eb;
    font-weight: 700;
    color: #008b84;
}

.adm-clear-filter-btn {
    margin-left: auto;
    color: #ef4444;
    padding: 0.15rem 0.45rem;
    border-radius: 6px;
    font-size: 0.75rem;
    transition: all 0.2s;
    text-decoration: none !important;
}
.adm-clear-filter-btn:hover {
    background: #fee2e2;
    color: #b91c1c;
}

/* ── Status Badges ───────────────────────────────────────── */
.adm-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    padding: 0.35rem 0.75rem;
    border-radius: 50rem;
    font-size: 0.75rem;
    font-weight: 700;
    line-height: 1.3;
}
.adm-badge-success { background-color: #dcfce7 !important; color: #15803d !important; border: 1px solid #86efac !important; }
.adm-badge-warning { background-color: #fef3c7 !important; color: #b45309 !important; border: 1px solid #fcd34d !important; }
.adm-badge-danger  { background-color: #fee2e2 !important; color: #b91c1c !important; border: 1px solid #fca5a5 !important; }
.adm-badge-neutral { background-color: #f1f5f9 !important; color: #334155 !important; border: 1px solid #cbd5e1 !important; }

/* ── User Avatar ─────────────────────────────────────────── */
.adm-user-avatar {
    width: 36px;
    height: 36px;
    min-width: 36px;
    border-radius: 50%;
    background-color: #e0f7f5;
    color: #2563eb;
    font-weight: 700;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* ── Table Style ─────────────────────────────────────────── */
.adm-table-wrap {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    overflow: hidden;
}
.adm-table {
    width: 100%;
    margin-bottom: 0;
}
.adm-table th {
    background-color: #f8fafc !important;
    color: #475569 !important;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    padding: 0.95rem 1rem;
    border-bottom: 2px solid #e2e8f0;
    border-top: none;
}
.adm-table td {
    padding: 0.95rem 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
    color: #1e293b;
    font-size: 0.85rem;
}
.adm-table tbody tr:hover {
    background-color: #e0f7f5 !important;
}

/* ── Modal Letter Selector Styles (Admin) ────────────────── */
.adm-modal-cat-pills {
    display: flex;
    gap: 0.45rem;
    overflow-x: auto;
    padding-bottom: 0.25rem;
    scrollbar-width: thin;
}
.adm-modal-cat-pill {
    border: 1px solid #cbd5e1;
    background: #ffffff;
    color: #475569;
    border-radius: 50rem;
    padding: 0.3rem 0.8rem;
    font-size: 0.76rem;
    font-weight: 700;
    white-space: nowrap;
    cursor: pointer;
    transition: all 0.2s;
}
.adm-modal-cat-pill:hover {
    background: #e0f7f5;
    border-color: #2563eb;
    color: #008b84;
}
.adm-modal-cat-pill.active {
    background: #2563eb;
    border-color: #2563eb;
    color: #ffffff !important;
}

.adm-letter-filter-item {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    padding: 0.85rem 1rem;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    background: #ffffff;
    cursor: pointer;
    transition: all 0.2s;
    text-decoration: none !important;
    color: #1e293b !important;
    height: 100%;
}
.adm-letter-filter-item:hover {
    border-color: #2563eb;
    background: #e0f7f5;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 167, 157, 0.15);
}
.adm-letter-filter-item.active {
    border-color: #2563eb;
    background: #e0f7f5;
    font-weight: 700;
}

.adm-modal-search-wrap {
    background-color: #f8fafc;
    border-bottom: 1px solid #e2e8f0;
}

/* ── Flash Feedback Alert & Header Icons ─────────────────── */
.adm-header-icon {
    width: 38px;
    height: 38px;
    min-width: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.05rem;
}
.adm-header-icon.primary { background-color: #e0f7f5; color: #2563eb; }
.adm-header-icon.success { background-color: #d1fae5; color: #059669; }
.adm-header-icon.danger  { background-color: #fee2e2; color: #dc2626; }
.adm-header-icon.warning { background-color: #fef3c7; color: #d97706; }

.adm-alert-success {
    background-color: #ecfdf5 !important;
    border: 1px solid #a7f3d0 !important;
    color: #065f46 !important;
}
.adm-alert-danger {
    background-color: #fef2f2 !important;
    border: 1px solid #fecaca !important;
    color: #991b1b !important;
}

/* ============================================================
   GLOBAL DARK MODE OVERRIDES (HTML.DARK-MODE)
   ============================================================ */
html.dark-mode .adm-kpi-card,
html.dark-mode .adm-filter-card,
html.dark-mode .adm-table-wrap,
html.dark-mode .modal-content {
    background: #2b2f33 !important;
    border-color: #373b3e !important;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3) !important;
    color: #e4e6eb !important;
}

html.dark-mode .adm-kpi-title {
    color: #94a3b8 !important;
}
html.dark-mode .adm-kpi-number {
    color: #f1f5f9 !important;
}
html.dark-mode .adm-kpi-icon.primary {
    background: rgba(0, 167, 157, 0.2) !important;
    color: #2dd4bf !important;
}

html.dark-mode .adm-status-pill {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #b0b3b8 !important;
}
html.dark-mode .adm-status-pill:hover {
    background: #252b3b !important;
    border-color: #2563eb !important;
    color: #2dd4bf !important;
}

html.dark-mode .adm-filter-card .input-group-text,
html.dark-mode .adm-type-picker-btn {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #e4e6eb !important;
}
html.dark-mode .adm-type-picker-btn.has-filter {
    background: rgba(0, 167, 157, 0.18) !important;
    border-color: #2563eb !important;
    color: #2dd4bf !important;
}

html.dark-mode .adm-table th {
    background-color: #212529 !important;
    color: #94a3b8 !important;
    border-color: #373b3e !important;
}
html.dark-mode .adm-table td {
    color: #e4e6eb !important;
    border-color: #373b3e !important;
}
html.dark-mode .adm-table tbody tr:hover {
    background-color: rgba(0, 167, 157, 0.1) !important;
}

html.dark-mode .adm-user-avatar {
    background-color: rgba(0, 167, 157, 0.2) !important;
    color: #2dd4bf !important;
}

html.dark-mode .modal-header,
html.dark-mode .modal-footer,
html.dark-mode .adm-modal-search-wrap {
    background: #212529 !important;
    border-color: #373b3e !important;
}

html.dark-mode .adm-letter-filter-item {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #e4e6eb !important;
}
html.dark-mode .adm-letter-filter-item:hover {
    background: rgba(0, 167, 157, 0.15) !important;
    border-color: #2563eb !important;
    color: #2dd4bf !important;
}
html.dark-mode .adm-letter-filter-item.active {
    background: rgba(0, 167, 157, 0.25) !important;
    border-color: #2563eb !important;
    color: #2dd4bf !important;
}

html.dark-mode .adm-modal-cat-pill {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #94a3b8 !important;
}
html.dark-mode .adm-modal-cat-pill.active {
    background: #2563eb !important;
    border-color: #2563eb !important;
    color: #ffffff !important;
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

/* ── Status Filter Pills in Dark Mode ── */
html.dark-mode .adm-status-pill,
html.dark-mode a.adm-status-pill {
    background: #1a1d21 !important;
    border-color: #373b3e !important;
    color: #cbd5e1 !important;
}

html.dark-mode .adm-status-pill.pending,
html.dark-mode a.adm-status-pill.pending {
    color: #fbbf24 !important;
    border-color: rgba(245, 158, 11, 0.35) !important;
    background: rgba(245, 158, 11, 0.1) !important;
}

html.dark-mode .adm-status-pill.approved,
html.dark-mode a.adm-status-pill.approved {
    color: #34d399 !important;
    border-color: rgba(16, 185, 129, 0.35) !important;
    background: rgba(16, 185, 129, 0.1) !important;
}

html.dark-mode .adm-status-pill.rejected,
html.dark-mode a.adm-status-pill.rejected {
    color: #f87171 !important;
    border-color: rgba(239, 68, 68, 0.35) !important;
    background: rgba(239, 68, 68, 0.1) !important;
}

html.dark-mode .adm-status-pill.expired,
html.dark-mode a.adm-status-pill.expired {
    color: #94a3b8 !important;
    border-color: rgba(100, 116, 139, 0.35) !important;
    background: rgba(100, 116, 139, 0.1) !important;
}

/* Hover States in Dark Mode */
html.dark-mode .adm-status-pill:hover,
html.dark-mode a.adm-status-pill:hover {
    background: #252b3b !important;
    border-color: #2563eb !important;
    color: #2dd4bf !important;
}
html.dark-mode .adm-status-pill.pending:hover,
html.dark-mode a.adm-status-pill.pending:hover {
    border-color: #f59e0b !important;
    color: #fde68a !important;
    background: rgba(245, 158, 11, 0.2) !important;
}
html.dark-mode .adm-status-pill.approved:hover,
html.dark-mode a.adm-status-pill.approved:hover {
    border-color: #10b981 !important;
    color: #6ee7b7 !important;
    background: rgba(16, 185, 129, 0.2) !important;
}
html.dark-mode .adm-status-pill.rejected:hover,
html.dark-mode a.adm-status-pill.rejected:hover {
    border-color: #ef4444 !important;
    color: #fca5a5 !important;
    background: rgba(239, 68, 68, 0.2) !important;
}

/* Active State in Dark Mode */
html.dark-mode .adm-status-pill.active,
html.dark-mode a.adm-status-pill.active {
    background: linear-gradient(135deg, #2563eb 0%, #008b84 100%) !important;
    border-color: #2563eb !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(0, 167, 157, 0.45) !important;
}
html.dark-mode .adm-status-pill.pending.active,
html.dark-mode a.adm-status-pill.pending.active {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
    border-color: #f59e0b !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(245, 158, 11, 0.45) !important;
}
html.dark-mode .adm-status-pill.approved.active,
html.dark-mode a.adm-status-pill.approved.active {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
    border-color: #10b981 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(16, 185, 129, 0.45) !important;
}
html.dark-mode .adm-status-pill.rejected.active,
html.dark-mode a.adm-status-pill.rejected.active {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
    border-color: #ef4444 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(239, 68, 68, 0.45) !important;
}
html.dark-mode .adm-status-pill.expired.active,
html.dark-mode a.adm-status-pill.expired.active {
    background: linear-gradient(135deg, #64748b 0%, #475569 100%) !important;
    border-color: #64748b !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(100, 116, 139, 0.45) !important;
}

/* ── KPI Numbers in Dark Mode ── */
html.dark-mode .adm-kpi-number.warning { color: #fbbf24 !important; }
html.dark-mode .adm-kpi-number.success { color: #34d399 !important; }
html.dark-mode .adm-kpi-number.danger  { color: #f87171 !important; }

/* ── Status Text Helpers in Dark Mode ── */
html.dark-mode .text-success { color: #34d399 !important; }
html.dark-mode .text-danger  { color: #f87171 !important; }
html.dark-mode .text-warning { color: #fbbf24 !important; }

/* ── Mobile Responsive Overrides ─────────────────────────── */
@media (max-width: 767.98px) {
    .page-title { font-size: 1.35rem; }
    .adm-status-pills-wrap { padding-bottom: 0.5rem; -webkit-overflow-scrolling: touch; }
    .adm-kpi-card { padding: 0.85rem 1rem; border-radius: 12px; }
    .adm-filter-card { padding: 0.85rem; border-radius: 12px; }
    .adm-table th, .adm-table td { padding: 0.75rem 0.85rem; }
    .adm-user-avatar { width: 32px; height: 32px; min-width: 32px; font-size: 0.8rem; }
}
</style>