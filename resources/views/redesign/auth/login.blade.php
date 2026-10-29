@extends('layouts/layout')

@section('content')
<div class="max-w-md mx-auto my-8">

    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-4 sm:p-6">
        <!-- Card Header Icon & Title -->
        <div class="text-center mb-6">
            <div class="w-16 h-16 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto mb-3 shadow-inner text-2xl">
                <i class="fa-solid fa-lock"></i>
            </div>
            <h3 class="text-2xl font-extrabold text-emerald-950">Masuk Akun Calon Santri</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Gunakan No. Pendaftaran dan Password yang telah dikirimkan.</p>
        </div>

        <!-- Session Flash Messages -->
        @if(!empty(Session::has('message')))
        <div class="p-3 mb-4 rounded-xl bg-blue-50 border border-blue-200 text-blue-800 text-xs flex items-center gap-2">
            <i class="fa-solid fa-circle-info"></i>
            <span>{{ Session::get('message') }}</span>
        </div>
        @endif

        @if(!empty(Session::has('error')))
        <div class="p-3 mb-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-xs flex items-center gap-2">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span>{{ Session::get('error') }}</span>
        </div>
        @endif

        <form method="POST" id="login-form" action="{{ URL::to('login') }}" class="space-y-4">
            @csrf

            <!-- Username / No Pendaftaran -->
            <div>
                <label for="username" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Username / No. Pendaftaran <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-regular fa-user"></i>
                    </span>
                    <input id="username" type="text" name="username" required autofocus placeholder="Contoh: 2026xxxxxx"
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
                </div>
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                        Password <span class="text-rose-500">*</span>
                    </label>
                    <a href="{{URL::to('forgot_password')}}" class="text-xs text-emerald-700 hover:underline font-medium">
                        Lupa Password?
                    </a>
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-solid fa-key"></i>
                    </span>
                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan password"
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
                </div>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer text-xs text-slate-600 select-none">
                    <input type="checkbox" name="remember" id="remember" class="checkbox checkbox-xs checkbox-primary rounded" />
                    <span>Ingat Saya di Perangkat Ini</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" class="btn w-full bg-gradient-to-r from-emerald-600 to-teal-700 hover:from-emerald-700 hover:to-teal-800 text-white rounded-xl shadow-md font-bold text-sm py-2.5">
                    <i class="fa-solid fa-right-to-bracket mr-1.5"></i> Masuk Sekarang
                </button>
            </div>

            <!-- Quick Register Link -->
            <div class="text-center pt-3 text-xs text-slate-500 border-t border-slate-100">
                Belum mendaftar?
                <a href="{{URL::to('psb/create')}}" class="font-bold text-emerald-700 hover:underline ml-1">
                    Isi Formulir Pendaftaran Baru
                </a>
            </div>
        </form>
    </x-mary-card>

</div>
@endsection

