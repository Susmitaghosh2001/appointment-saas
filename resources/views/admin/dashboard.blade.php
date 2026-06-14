<x-app-layout>
    <div class="min-h-screen flex bg-slate-100">
        <div class="hidden lg:block w-80 bg-slate-950 text-slate-100 border-r border-slate-800">
            <x-admin.sidebar />
        </div>

        <div class="flex-1 flex flex-col">
            <x-admin.navbar />

            <main class="flex-1 px-4 py-6 sm:px-6 lg:px-8 lg:py-8">
                <x-admin.dashboard />
            </main>
        </div>
    </div>
</x-app-layout>