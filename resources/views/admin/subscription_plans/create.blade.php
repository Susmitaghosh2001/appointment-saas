<x-app-layout>
    <div class="min-h-screen flex bg-slate-100">
        <div class="hidden lg:block w-80 bg-slate-950 text-slate-100 border-r border-slate-800">
            <x-admin.sidebar />
        </div>

        <div class="flex-1 flex flex-col">
            <x-admin.navbar />

            <main class="flex-1 px-4 py-6 sm:px-6 lg:px-8 lg:py-8">
                <div class="max-w-4xl space-y-6">
                    <div class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-200/60">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h1 class="text-3xl font-semibold text-slate-900">Create Subscription Plan</h1>
                                <p class="mt-2 text-sm text-slate-500">Add pricing, limits, and plan features.</p>
                            </div>
                            <a href="{{ route('admin.subscription_plans.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">Back</a>
                        </div>

                        @if($errors->any())
                            <div class="mt-6 rounded-3xl bg-rose-50 p-4 text-sm text-rose-700 ring-1 ring-rose-200">
                                <ul class="list-disc pl-5">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.subscription_plans.store') }}" method="POST" class="mt-6 space-y-6">
                            @csrf
                            @include('admin.subscription_plans._form')

                            <button type="submit" class="rounded-2xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white hover:bg-slate-800">Create plan</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
