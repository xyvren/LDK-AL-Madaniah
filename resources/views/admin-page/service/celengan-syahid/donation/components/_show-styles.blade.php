<style>
/* Page title — mirrors comment view */
.page-title {
    font-size: 1.65rem !important;
    font-weight: 600 !important;
    text-align: center !important;
    color: #2563eb !important;
    margin: .75rem 0 1.5rem !important;
    position: relative;
    display: inline-block;
}
.page-title .highlighted-text { color: #008b84; font-weight: 700; }
.page-title::after {
    content: '';
    display: block;
    height: 4px;
    width: 120px;
    margin: .35rem auto 0;
    border-radius: 3px;
    background: linear-gradient(90deg, #2563eb 0%, #008b84 100%);
}
.page-title small {
    color: #6c757d !important;
    font-size: .9rem !important;
    font-weight: 400 !important;
    display: block !important;
    margin-top: .4rem;
}

/* Section title — mirrors comment view */
.section-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #2563eb;
    padding-bottom: .5rem;
    border-bottom: 2px solid #e0f7f5;
}
html.dark-mode .section-title { color: #2dd4bf; border-bottom-color: rgba(45,212,191,.15); }

/* Cards — mirrors comment view */
.card { border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,.08); }

/* Label/value rows */
.form-label.fw-bold { color: #495057; font-weight: 600; }
html.dark-mode .form-label.fw-bold { color: #9ca3af; }

.form-control-plaintext {
    padding: .375rem 0;
    margin-bottom: 0;
    line-height: 1.5;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
    min-height: 38px;
    display: flex;
    align-items: center;
    word-break: break-word;
}

/* Amount highlight */
.dd-amount { font-size: 1.6rem; font-weight: 800; color: #2563eb; }
html.dark-mode .dd-amount { color: #2dd4bf; }

/* btn-custom-primary — defined here so the button renders correctly on this page */
.btn-custom-primary {
    color: #fff !important;
    background-color: #2563eb;
    border: 1px solid #2563eb;
    transition: all .3s ease;
}
.btn-custom-primary:hover,
.btn-custom-primary:focus {
    background-color: #008b84;
    border-color: #008b84;
    color: #fff !important;
    box-shadow: 0 0 0 .2rem rgba(37,99,235,.25);
}
html.dark-mode .btn-custom-primary {
    background-color: #2563eb !important;
    border-color: #2563eb !important;
    color: #ffffff !important;
}
html.dark-mode .btn-custom-primary:hover {
    background-color: #008b84 !important;
    border-color: #008b84 !important;
}

/* Payment link URL text */
.payment-link-url { color: #6c757d; }
html.dark-mode .payment-link-url { color: #9ca3af; }
</style>
