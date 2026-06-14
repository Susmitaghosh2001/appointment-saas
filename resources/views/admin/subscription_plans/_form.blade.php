<div class="grid gap-6">
    <div>
        <label class="block text-sm font-medium text-slate-700">Plan name</label>
        <input type="text" name="plan_name" value="{{ old('plan_name', $subscriptionPlan->plan_name ?? '') }}" class="mt-2 block w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm focus:border-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-200" required>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div>
            <label class="block text-sm font-medium text-slate-700">Price</label>
            <input type="number" name="price" step="0.01" value="{{ old('price', $subscriptionPlan->price ?? '') }}" class="mt-2 block w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm focus:border-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-200" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Booking limit</label>
            <input type="number" name="booking_limit" value="{{ old('booking_limit', $subscriptionPlan->booking_limit ?? '') }}" class="mt-2 block w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm focus:border-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-200">
            <p class="mt-2 text-xs text-slate-500">Leave blank for unlimited bookings.</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700">Staff limit</label>
            <input type="number" name="staff_limit" value="{{ old('staff_limit', $subscriptionPlan->staff_limit ?? '') }}" class="mt-2 block w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm focus:border-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-200">
            <p class="mt-2 text-xs text-slate-500">Leave blank for unlimited staff.</p>
        </div>

        <div class="flex items-center gap-3 pt-6">
            <input type="hidden" name="status" value="0">
            <label class="inline-flex items-center gap-2 text-sm font-medium text-slate-700">
                <input type="checkbox" name="status" value="1" {{ old('status', $subscriptionPlan->status ?? true) ? 'checked' : '' }} class="h-4 w-4 rounded border-slate-300 text-slate-900 focus:ring-slate-500">
                Active plan
            </label>
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700">Features</label>
        <textarea name="features" rows="5" class="mt-2 block w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm focus:border-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-200">{{ old('features', $subscriptionPlan->features ?? '') }}</textarea>
        <p class="mt-2 text-xs text-slate-500">List important features separated by commas or line breaks.</p>
    </div>
</div>
