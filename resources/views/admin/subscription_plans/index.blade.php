<x-app-layout>
    <div class="min-h-screen flex bg-slate-100">
        <div class="hidden lg:block w-80 bg-slate-950 text-slate-100 border-r border-slate-800">
            <x-admin.sidebar />
        </div>

        <div class="flex-1 flex flex-col">
            <x-admin.navbar />

            <main class="flex-1 px-4 py-6 sm:px-6 lg:px-8 lg:py-8">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                        <div>
                            <h1 class="text-3xl font-semibold text-slate-900">Subscription Plans</h1>
                            <p class="mt-2 text-sm text-slate-500">Manage your plan pricing, limits, and active status.</p>
                        </div>
                        <a href="{{ route('admin.subscription_plans.create') }}" class="inline-flex items-center justify-center rounded-2xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-800">
                            New Plan
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="rounded-3xl bg-emerald-50 p-4 text-sm text-emerald-700 ring-1 ring-emerald-200">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200/60">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-slate-200">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-600">Plan</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-600">Booking Limit</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-600">Staff Limit</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-600">Price</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-600">Features</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-600">Status</th>
                                        <th class="px-4 py-3 text-right text-xs font-semibold text-slate-600">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100">
                                    @forelse($plans as $plan)
                                        <tr>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <div class="text-sm font-semibold text-slate-900">{{ $plan->plan_name }}</div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-slate-500">{{ $plan->booking_limit ?? 'Unlimited' }}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-slate-500">{{ $plan->staff_limit ?? 'Unlimited' }}</td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <div class="text-sm font-semibold text-slate-900">${{ number_format($plan->price, 2) }}</div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-slate-500">{{ $plan->features ?? 'No features listed.' }}</td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-medium {{ $plan->status ? 'bg-emerald-100 text-emerald-700' : 'bg-slate-100 text-slate-600' }}">
                                                    {{ $plan->status ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('admin.subscription_plans.edit', $plan) }}" class="inline-block mr-2 rounded-2xl border border-slate-200 bg-white px-3 py-1 text-sm font-semibold text-slate-700 hover:bg-slate-50">Edit</a>
                                                <form action="{{ route('admin.subscription_plans.destroy', $plan) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Delete this plan?')" class="inline-block rounded-2xl bg-rose-600 px-3 py-1 text-sm font-semibold text-white hover:bg-rose-700">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="px-4 py-6 text-sm text-slate-600">No subscription plans found yet. Create one using the button above.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        {{ $plans->links() }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
