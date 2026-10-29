<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB PPATQ RAUDLATUL FALAH - Sistem Penerimaan Santri Baru</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Splide.js for Carousels -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <!-- Lightbox2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.dataTables.min.css">

    <!-- Select2 & Steps & Ripple -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('assets/css/jquery.steps.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/riple.css')}}" rel="stylesheet" />

    <!-- Vite (Tailwind CSS v4 + DaisyUI + MaryUI) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- jQuery & Core Libraries -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="{{asset('assets/js/jquery.steps.js')}}"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, rgba(16, 85, 45, 0.85) 0%, rgba(5, 46, 22, 0.92) 100%), url("{{asset('assets/images/background3.jpg')}}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .main-shell {
            max-width: 1080px;
            margin: 0 auto;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 45px -10px rgba(0, 40, 20, 0.25);
        }

        .nav-modern-bg {
            background: linear-gradient(135deg, #15803d 0%, #047857 50%, #065f46 100%);
            box-shadow: 0 4px 15px -1px rgba(5, 120, 87, 0.3);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
        }

        /* =========================================================
           DATATABLES MODERN DAISYUI / TAILWIND DESIGN
           ========================================================= */
        .dataTables_wrapper {
            position: relative;
            width: 100%;
            margin-top: 0.5rem;
            clear: both;
        }

        /* Top controls (Length & Filter) */
        .dataTables_wrapper .dataTables_length {
            float: left;
            margin-bottom: 1.25rem;
            font-size: 0.875rem;
            color: #475569;
        }
        .dataTables_wrapper .dataTables_length label {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
        }
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #cbd5e1 !important;
            border-radius: 0.75rem !important;
            padding: 0.45rem 2rem 0.45rem 0.75rem !important;
            font-size: 0.875rem !important;
            background-color: #f8fafc !important;
            color: #1e293b !important;
            font-weight: 600 !important;
            cursor: pointer;
            outline: none !important;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }
        .dataTables_wrapper .dataTables_length select:focus {
            border-color: #059669 !important;
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.15) !important;
            background-color: #ffffff !important;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            margin-bottom: 1.25rem;
            font-size: 0.875rem;
        }
        .dataTables_wrapper .dataTables_filter label {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: #1e293b;
        }
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #cbd5e1 !important;
            border-radius: 0.75rem !important;
            padding: 0.45rem 1rem !important;
            font-size: 0.875rem !important;
            background-color: #f8fafc !important;
            color: #1e293b !important;
            outline: none !important;
            min-width: 240px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #059669 !important;
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.15) !important;
            background-color: #ffffff !important;
        }

        /* Clean clearfix after top and bottom */
        .dataTables_wrapper::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Table itself */
        .dataTables_wrapper table.dataTable {
            width: 100% !important;
            margin-bottom: 1.25rem !important;
            border-collapse: separate !important;
            border-spacing: 0 !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 1rem !important;
            overflow: hidden !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04) !important;
        }
        .dataTables_wrapper table.dataTable thead th {
            background-color: #ecfdf5 !important;
            color: #064e3b !important;
            font-weight: 700 !important;
            font-size: 0.75rem !important;
            text-transform: uppercase !important;
            letter-spacing: 0.05em !important;
            padding: 0.85rem 1rem !important;
            border-bottom: 1px solid #a7f3d0 !important;
            border-top: none !important;
        }
        .dataTables_wrapper table.dataTable tbody td {
            padding: 0.85rem 1rem !important;
            border-bottom: 1px solid #f1f5f9 !important;
            vertical-align: middle !important;
            font-size: 0.875rem !important;
        }
        .dataTables_wrapper table.dataTable tbody tr:last-child td {
            border-bottom: none !important;
        }
        .dataTables_wrapper table.dataTable tbody tr:hover {
            background-color: #f0fdf4 !important;
        }

        /* Bottom Controls (Info & Pagination) */
        .dataTables_wrapper .dataTables_info {
            float: left;
            padding: 0.75rem 0 !important;
            font-size: 0.85rem !important;
            font-weight: 500 !important;
            color: #64748b !important;
        }
        .dataTables_wrapper .dataTables_info b {
            color: #0f172a;
            font-weight: 700;
        }

        .dataTables_wrapper .dataTables_paginate {
            float: right;
            padding: 0.5rem 0 !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 0.35rem !important;
            user-select: none;
        }

        /* Pagination Buttons (Restoring complete button styling) */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            min-width: 2.25rem !important;
            height: 2.25rem !important;
            padding: 0 0.75rem !important;
            border-radius: 0.625rem !important;
            border: 1px solid #e2e8f0 !important;
            background: #ffffff !important;
            color: #334155 !important;
            font-size: 0.825rem !important;
            font-weight: 600 !important;
            text-decoration: none !important;
            cursor: pointer !important;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05) !important;
            transition: all 0.15s ease-in-out !important;
            margin: 0 0.1rem !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover:not(.disabled):not(.current) {
            background: #ecfdf5 !important;
            border-color: #10b981 !important;
            color: #047857 !important;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(5, 150, 105, 0.15) !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: #059669 !important;
            border-color: #059669 !important;
            color: #ffffff !important;
            font-weight: 700 !important;
            box-shadow: 0 2px 6px rgba(5, 150, 105, 0.35) !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            background: #f8fafc !important;
            border-color: #e2e8f0 !important;
            color: #94a3b8 !important;
            cursor: not-allowed !important;
            box-shadow: none !important;
            opacity: 0.6 !important;
        }

        .dataTables_wrapper .dataTables_paginate .ellipsis {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            min-width: 1.5rem !important;
            padding: 0 0.25rem !important;
            color: #94a3b8 !important;
            font-weight: 700 !important;
        }

        @media (max-width: 640px) {
            .dataTables_wrapper .dataTables_length,
            .dataTables_wrapper .dataTables_filter,
            .dataTables_wrapper .dataTables_info,
            .dataTables_wrapper .dataTables_paginate {
                float: none !important;
                text-align: center !important;
                width: 100% !important;
                justify-content: center !important;
            }
            .dataTables_wrapper .dataTables_filter input {
                min-width: 100% !important;
            }
        }

        /* WYSIWYG / HTML Render Restoration */
        .wysiwyg-content,
        .html-render {
            color: #334155;
            line-height: 1.8;
            font-size: 0.95rem;
        }

        /* =========================================================
           JQUERY STEPS WIZARD MODERN RESPONSIVE STYLING
           ========================================================= */
        .wizard {
            width: 100%;
        }
        .wizard > .steps {
            position: relative;
            display: block;
            width: 100%;
            margin-bottom: 1.5rem;
        }
        .wizard > .steps > ul {
            display: grid !important;
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            gap: 0.5rem !important;
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        @media (min-width: 640px) {
            .wizard > .steps > ul {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
                gap: 0.75rem !important;
            }
        }
        .wizard > .steps > ul > li {
            float: none !important;
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        .wizard > .steps a,
        .wizard > .steps a:hover,
        .wizard > .steps a:active {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important;
            padding: 0.75rem 0.85rem !important;
            border-radius: 0.875rem !important;
            text-decoration: none !important;
            font-size: 0.825rem !important;
            font-weight: 600 !important;
            transition: all 0.2s ease !important;
            border: 1px solid #e2e8f0 !important;
            background: #f8fafc !important;
            color: #64748b !important;
            cursor: default;
        }
        .wizard > .steps .number {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 1.6rem !important;
            height: 1.6rem !important;
            border-radius: 9999px !important;
            background: #e2e8f0 !important;
            color: #475569 !important;
            font-size: 0.75rem !important;
            font-weight: 700 !important;
            flex-shrink: 0 !important;
        }
        .wizard > .steps .current a,
        .wizard > .steps .current a:hover,
        .wizard > .steps .current a:active {
            background: linear-gradient(135deg, #059669 0%, #047857 100%) !important;
            color: #ffffff !important;
            border-color: #059669 !important;
            box-shadow: 0 4px 12px rgba(5, 150, 105, 0.25) !important;
        }
        .wizard > .steps .current .number {
            background: #ffffff !important;
            color: #047857 !important;
        }
        .wizard > .steps .done a,
        .wizard > .steps .done a:hover,
        .wizard > .steps .done a:active {
            background: #ecfdf5 !important;
            color: #065f46 !important;
            border-color: #a7f3d0 !important;
            cursor: pointer;
        }
        .wizard > .steps .done .number {
            background: #10b981 !important;
            color: #ffffff !important;
        }
        .wizard > .content {
            background: transparent !important;
            display: block !important;
            margin: 0 !important;
            min-height: auto !important;
            overflow: visible !important;
            position: relative !important;
            width: auto !important;
            border-radius: 0 !important;
        }
        .wizard > .content > .body {
            float: none !important;
            position: relative !important;
            width: 100% !important;
            height: auto !important;
            padding: 0 !important;
        }
        .wizard > .actions {
            position: relative !important;
            display: block !important;
            text-align: right !important;
            width: 100% !important;
            margin-top: 2rem !important;
            padding-top: 1.5rem !important;
            border-top: 1px solid #e2e8f0 !important;
        }
        .wizard > .actions > ul {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 0.75rem !important;
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        .wizard > .actions > ul > li {
            float: none !important;
            margin: 0 !important;
        }
        .wizard > .actions a,
        .wizard > .actions a:hover,
        .wizard > .actions a:active {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.75rem 1.5rem !important;
            border-radius: 0.75rem !important;
            font-size: 0.875rem !important;
            font-weight: 700 !important;
            text-decoration: none !important;
            cursor: pointer !important;
            transition: all 0.2s ease !important;
        }
        .wizard > .actions a[href="#next"],
        .wizard > .actions a[href="#finish"] {
            background: linear-gradient(135deg, #059669 0%, #047857 100%) !important;
            color: #ffffff !important;
            border: 1px solid #059669 !important;
            box-shadow: 0 4px 12px rgba(5, 150, 105, 0.25) !important;
        }
        .wizard > .actions a[href="#next"]:hover,
        .wizard > .actions a[href="#finish"]:hover {
            background: linear-gradient(135deg, #047857 0%, #065f46 100%) !important;
            box-shadow: 0 6px 16px rgba(5, 150, 105, 0.35) !important;
            transform: translateY(-1px);
        }
        .wizard > .actions a[href="#previous"] {
            background: #ffffff !important;
            color: #475569 !important;
            border: 1px solid #cbd5e1 !important;
        }
        .wizard > .actions a[href="#previous"]:hover {
            background: #f1f5f9 !important;
            color: #1e293b !important;
        }
        .wizard > .actions .disabled a,
        .wizard > .actions .disabled a:hover,
        .wizard > .actions .disabled a:active {
            display: none !important;
        }
        label.error {
            color: #e11d48 !important;
            font-size: 0.75rem !important;
            font-weight: 600 !important;
            margin-top: 0.25rem !important;
            display: block !important;
        }
        input.error, select.error, textarea.error {
            border-color: #f43f5e !important;
            background-color: #fff1f2 !important;
        }

        /* Select2 Modern DaisyUI / Emerald Styling */
        .select2-container--default .select2-selection--single {
            height: 46px !important;
            padding: 0.4rem 0.85rem !important;
            border: 1px solid #cbd5e1 !important;
            border-radius: 0.75rem !important;
            background-color: #ffffff !important;
            display: flex !important;
            align-items: center !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #1e293b !important;
            padding-left: 0 !important;
            font-size: 0.875rem !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 44px !important;
            right: 8px !important;
        }
        .select2-dropdown {
            border: 1px solid #e2e8f0 !important;
            border-radius: 0.75rem !important;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1) !important;
            overflow: hidden !important;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #059669 !important;
        }
        .wysiwyg-content p,
        .html-render p {
            margin-bottom: 0.75rem;
        }
        .wysiwyg-content p:last-child,
        .html-render p:last-child {
            margin-bottom: 0;
        }
        .wysiwyg-content ol,
        .html-render ol {
            list-style-type: decimal !important;
            padding-left: 2rem !important;
            margin-top: 0.5rem !important;
            margin-bottom: 1rem !important;
        }
        .wysiwyg-content ul,
        .html-render ul {
            list-style-type: disc !important;
            padding-left: 2rem !important;
            margin-top: 0.5rem !important;
            margin-bottom: 1rem !important;
        }
        .wysiwyg-content li,
        .html-render li {
            display: list-item !important;
            margin-bottom: 0.45rem !important;
            padding-left: 0.25rem !important;
        }
        .wysiwyg-content ol > li::marker,
        .html-render ol > li::marker {
            font-weight: 700;
            color: #047857;
        }
        .wysiwyg-content ul > li::marker,
        .html-render ul > li::marker {
            color: #047857;
        }
        .wysiwyg-content strong,
        .wysiwyg-content b,
        .html-render strong,
        .html-render b {
            font-weight: 700 !important;
        }
        .wysiwyg-content em,
        .wysiwyg-content i,
        .html-render em,
        .html-render i {
            font-style: italic !important;
        }
        .wysiwyg-content a,
        .html-render a {
            color: #0284c7;
            text-decoration: underline;
        }
        .wysiwyg-content a[style*="background-color"],
        .html-render a[style*="background-color"] {
            display: inline-flex !important;
            align-items: center !important;
            padding: 0.35rem 0.85rem !important;
            border-radius: 0.5rem !important;
            text-decoration: none !important;
            font-weight: 700 !important;
            font-size: 0.85rem !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12) !important;
            margin: 0.25rem 0 !important;
        }
        .wysiwyg-content table,
        .html-render table {
            width: 100% !important;
            border-collapse: collapse !important;
            margin-top: 0.5rem !important;
            margin-bottom: 1rem !important;
        }
        .wysiwyg-content table td,
        .wysiwyg-content table th,
        .html-render table td,
        .html-render table th {
            padding: 0.75rem 1rem !important;
            border-bottom: 1px solid #f1f5f9 !important;
            vertical-align: top !important;
        }
    </style>
</head>
<body class="py-4 md:py-8 px-2 sm:px-4 text-slate-800 antialiased">

    <!-- Top Theme Switcher Bar -->
    <div class="main-shell mb-3">
        <div class="flex flex-wrap items-center justify-between gap-2 px-4 py-2 rounded-2xl bg-slate-900/80 backdrop-blur text-white text-xs md:text-sm shadow-lg border border-white/10">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-1.5 animate-pulse"></span>
                    Versi Tampilan Baru
                </span>
                <span class="hidden sm:inline text-slate-300">Desain Modern MaryUI & DaisyUI (Laravel 11)</span>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('switch.theme', 'classic') }}" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-xl bg-white/10 hover:bg-white/20 text-white font-medium transition duration-200 border border-white/20 hover:border-emerald-400 text-xs">
                    <i class="fa-solid fa-clock-rotate-left text-amber-400"></i>
                    Beralih ke Tampilan Klasik
                </a>
            </div>
        </div>
    </div>

    <!-- Main Container Card (Layout Same As Original) -->
    <div class="main-shell glass-panel rounded-3xl overflow-hidden shadow-2xl transition-all duration-300">

        <!-- HEADER SECTION (Preserving Exact Layout Structure) -->
        <header class="p-6 md:p-8 bg-gradient-to-r from-emerald-50/60 via-white to-emerald-50/40 border-b border-emerald-100/80">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- Logo -->
                <div class="shrink-0 group">
                    <div class="p-3 bg-white rounded-2xl shadow-md border border-emerald-100 group-hover:scale-105 transition-transform duration-300">
                        <img src="https://ppatq-rf.id/img/cropped-header-objectpatq.png" alt="Logo PPATQ Raudlatul Falah" class="w-24 md:w-28 h-auto object-contain drop-shadow" />
                    </div>
                </div>

                <!-- Detail / Title -->
                <div class="text-center md:text-left flex-1">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-200 mb-2">
                        <i class="fa-solid fa-moon text-emerald-600"></i>
                        Penerimaan Santri Baru Online (PSB)
                    </div>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-emerald-900 tracking-tight leading-tight">
                        PPATQ RAUDLATUL FALAH
                    </h1>
                    <p class="mt-1 text-xs sm:text-sm md:text-base font-medium text-emerald-700/90 leading-snug">
                        PONDOK PESANTREN ANAK-ANAK TAHFIDZUL QUR'AN RAUDLATUL FALAH – PATI
                    </p>
                    <div class="mt-2 flex flex-wrap items-center justify-center md:justify-start gap-3 text-xs text-slate-500">
                        <span class="inline-flex items-center gap-1"><i class="fa-solid fa-location-dot text-emerald-600"></i> Pati, Jawa Tengah</span>
                        <span class="inline-flex items-center gap-1"><i class="fa-solid fa-phone text-emerald-600"></i> Layanan Informasi PSB</span>
                        <span class="inline-flex items-center gap-1 text-emerald-700 font-semibold"><i class="fa-solid fa-circle-check text-emerald-600"></i> Terakreditasi A</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- NAVBAR SECTION (Modern DaisyUI + MaryUI, Preserving Original Menu Structure) -->
        <nav class="nav-modern-bg px-4 py-2 sticky top-0 z-40">
            <div class="flex items-center justify-between">
                <!-- Mobile Toggle Button -->
                <div class="lg:hidden">
                    <button type="button" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')" class="btn btn-ghost btn-sm text-white hover:bg-emerald-800/60 rounded-xl" aria-label="Toggle Navigation">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-1 flex-1">
                    <a href="{{URL::to('/')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition duration-150 {{ Request::is('/') ? 'bg-white/20 text-white shadow-sm' : '' }}">
                        <i class="fa-solid fa-house mr-1.5 opacity-80"></i> Home
                    </a>
                    <a href="{{URL::to('/program_kegiatan')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition duration-150 {{ Request::is('program_kegiatan') ? 'bg-white/20 text-white shadow-sm' : '' }}">
                        <i class="fa-solid fa-images mr-1.5 opacity-80"></i> Program Kegiatan
                    </a>
                    <a href="{{URL::to('/pesantren')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition duration-150 {{ Request::is('pesantren') ? 'bg-white/20 text-white shadow-sm' : '' }}">
                        <i class="fa-solid fa-mosque mr-1.5 opacity-80"></i> Kepesantrenan
                    </a>
                    <a href="{{URL::to('psb/create')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition duration-150 {{ Request::is('psb/create') ? 'bg-white/20 text-white shadow-sm' : '' }}">
                        <i class="fa-solid fa-user-plus mr-1.5 opacity-80"></i> Form Pendaftaran
                    </a>

                    <!-- Dropdown Data Santri -->
                    <div class="relative group">
                        <button class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 inline-flex items-center gap-1.5 transition duration-150 {{ Request::is('psb') || Request::is('santri_aktif') ? 'bg-white/20 text-white shadow-sm' : '' }}">
                            <i class="fa-solid fa-users mr-1 opacity-80"></i> Data Santri
                            <i class="fa-solid fa-chevron-down text-xs opacity-70 group-hover:rotate-180 transition-transform"></i>
                        </button>
                        <div class="absolute left-0 mt-1 w-52 rounded-2xl bg-white shadow-2xl border border-emerald-100 py-2 hidden group-hover:block hover:block z-50 animate-fadeIn">
                            <a href="{{URL::to('psb')}}" class="flex items-center gap-2.5 px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition">
                                <i class="fa-solid fa-user-clock text-emerald-600 w-4"></i> Data Calon Santri
                            </a>
                            <a href="{{URL::to('santri_aktif')}}" class="flex items-center gap-2.5 px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition">
                                <i class="fa-solid fa-user-check text-emerald-600 w-4"></i> Data Santri Aktif
                            </a>
                        </div>
                    </div>

                    @if(!empty(session('psb_username')))
                    <a href="{{URL::to('psb/data_pribadi')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition duration-150 {{ Request::is('psb/data_pribadi') ? 'bg-white/20 text-white shadow-sm' : '' }}">
                        <i class="fa-solid fa-id-card mr-1.5 opacity-80"></i> Update Data
                    </a>
                    <a href="{{URL::to('psb/upload_bukti')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition duration-150 {{ Request::is('psb/upload_bukti') ? 'bg-white/20 text-white shadow-sm' : '' }}">
                        <i class="fa-solid fa-receipt mr-1.5 opacity-80"></i> Bukti Bayar
                    </a>
                    @endif
                </div>

                <!-- Right Auth Button -->
                <div class="flex items-center gap-2">
                    @if(empty(session('psb_username')))
                    <a href="{{URL::to('login')}}" class="btn btn-sm bg-white text-emerald-800 hover:bg-emerald-50 border-0 rounded-xl px-4 shadow-sm font-bold">
                        <i class="fa-solid fa-right-to-bracket mr-1.5 text-emerald-600"></i> Login
                    </a>
                    @else
                    <div class="flex items-center gap-2">
                        <span class="hidden md:inline text-xs text-white/90 bg-emerald-800/80 px-2.5 py-1 rounded-lg border border-white/10">
                            <i class="fa-solid fa-circle-user mr-1 text-emerald-300"></i> {{ session('psb_username') }}
                        </span>
                        <a href="{{URL::to('logout')}}" class="btn btn-sm bg-rose-600 hover:bg-rose-700 text-white border-0 rounded-xl px-3 shadow-sm font-semibold">
                            <i class="fa-solid fa-power-off mr-1"></i> Logout
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Mobile Menu Drawer (Collapsible) -->
            <div id="mobileMenu" class="hidden lg:hidden pt-3 pb-2 border-t border-emerald-600/50 mt-2 space-y-1">
                <a href="{{URL::to('/')}}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-white hover:bg-white/10 {{ Request::is('/') ? 'bg-white/20' : '' }}">
                    <i class="fa-solid fa-house mr-2"></i> Home
                </a>
                <a href="{{URL::to('/program_kegiatan')}}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-white hover:bg-white/10 {{ Request::is('program_kegiatan') ? 'bg-white/20' : '' }}">
                    <i class="fa-solid fa-images mr-2"></i> Program Kegiatan
                </a>
                <a href="{{URL::to('/pesantren')}}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-white hover:bg-white/10 {{ Request::is('pesantren') ? 'bg-white/20' : '' }}">
                    <i class="fa-solid fa-mosque mr-2"></i> Kepesantrenan
                </a>
                <a href="{{URL::to('psb/create')}}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-white hover:bg-white/10 {{ Request::is('psb/create') ? 'bg-white/20' : '' }}">
                    <i class="fa-solid fa-user-plus mr-2"></i> Form Pendaftaran
                </a>
                <div class="px-3 py-1 text-xs font-bold uppercase tracking-wider text-emerald-200">Data Santri</div>
                <a href="{{URL::to('psb')}}" class="block pl-6 pr-3 py-1.5 rounded-lg text-sm font-medium text-white/90 hover:bg-white/10">
                    <i class="fa-solid fa-user-clock mr-2"></i> Data Calon Santri
                </a>
                <a href="{{URL::to('santri_aktif')}}" class="block pl-6 pr-3 py-1.5 rounded-lg text-sm font-medium text-white/90 hover:bg-white/10">
                    <i class="fa-solid fa-user-check mr-2"></i> Data Santri Aktif
                </a>
                @if(!empty(session('psb_username')))
                <div class="px-3 py-1 text-xs font-bold uppercase tracking-wider text-emerald-200">Menu Santri</div>
                <a href="{{URL::to('psb/data_pribadi')}}" class="block pl-6 pr-3 py-1.5 rounded-lg text-sm font-medium text-white/90 hover:bg-white/10">
                    <i class="fa-solid fa-id-card mr-2"></i> Update Data
                </a>
                <a href="{{URL::to('psb/upload_bukti')}}" class="block pl-6 pr-3 py-1.5 rounded-lg text-sm font-medium text-white/90 hover:bg-white/10">
                    <i class="fa-solid fa-receipt mr-2"></i> Bukti Bayar
                </a>
                @endif
            </div>
        </nav>

        <!-- MAIN CONTENT AREA (Retaining Card Structure With Visual Enhancements) -->
        <main class="p-4 sm:p-6 md:p-8 bg-white min-h-[500px]">
            @yield('content')
        </main>

        <!-- FOOTER SECTION (Modern & Clean) -->
        <footer class="bg-slate-50 border-t border-slate-200/80 px-6 py-6 text-center text-xs md:text-sm text-slate-500">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="text-left">
                    <p class="font-bold text-emerald-950">PPATQ Raudlatul Falah Pati</p>
                    <p class="text-xs text-slate-400">Pondok Pesantren Anak-Anak Tahfidzul Qur'an</p>
                </div>
                <div class="flex items-center gap-3">
                    <a href="{{ route('switch.theme', 'classic') }}" class="btn btn-ghost btn-xs text-slate-600 hover:text-emerald-700">
                        <i class="fa-solid fa-repeat mr-1"></i> Mode Klasik
                    </a>
                    <span class="text-slate-300">|</span>
                    <span class="text-xs text-emerald-700 font-semibold">Tampilan Baru maryUI</span>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-200/60 text-slate-400 text-xs">
                &copy; {{ date('Y') }} PPATQ Raudlatul Falah Pati. All rights reserved.
            </div>
        </footer>

    </div>

    <!-- Livewire Scripts & Plugin Assets -->
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

</body>
</html>
