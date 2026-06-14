<div class="h-full min-h-screen flex flex-col px-6 py-8">
    <div class="mb-8">
        <div class="text-2xl font-semibold tracking-tight">Appointment SaaS</div>
        <p class="mt-2 text-sm text-slate-400">Admin dashboard</p>
    </div>

    <nav class="space-y-1 text-sm">
        <a href="{{ route('admin.dashboard') }}" class="block rounded-2xl bg-white/10 px-4 py-3 font-medium text-slate-50 shadow-sm ring-1 ring-white/10 hover:bg-white/15">Dashboard</a>
        <a href="{{ route('admin.subscription_plans.index') }}" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Subscription Plans</a>
        <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Businesses</a>
        <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Services</a>
        <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Staff</a>
        <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Appointments</a>
        <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Payments</a>
        <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Reports</a>
        <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 hover:bg-white/10 hover:text-white">Settings</a>
    </nav>

    <div class="mt-auto rounded-3xl bg-white/5 p-4 text-sm text-slate-400 ring-1 ring-white/10">
        <div class="font-semibold text-slate-100">Need help?</div>
        <p class="mt-2">Review system settings or contact support for assistance.</p>
    </div>
</div>