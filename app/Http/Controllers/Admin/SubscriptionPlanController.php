<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    public function index()
    {
        $plans = SubscriptionPlan::orderByDesc('created_at')->paginate(12);

        return view('admin.subscription_plans.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.subscription_plans.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'plan_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'booking_limit' => 'nullable|integer|min:0',
            'staff_limit' => 'nullable|integer|min:0',
            'features' => 'nullable|string|max:1000',
            'status' => 'sometimes|boolean',
        ]);

        $data['status'] = $request->has('status');

        SubscriptionPlan::create($data);

        return redirect()->route('admin.subscription_plans.index')
            ->with('success', 'Subscription plan created successfully.');
    }

    public function edit(SubscriptionPlan $subscriptionPlan)
    {
        return view('admin.subscription_plans.edit', compact('subscriptionPlan'));
    }

    public function update(Request $request, SubscriptionPlan $subscriptionPlan)
    {
        $data = $request->validate([
            'plan_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'booking_limit' => 'nullable|integer|min:0',
            'staff_limit' => 'nullable|integer|min:0',
            'features' => 'nullable|string|max:1000',
            'status' => 'sometimes|boolean',
        ]);

        $data['status'] = $request->has('status');

        $subscriptionPlan->update($data);

        return redirect()->route('admin.subscription_plans.index')
            ->with('success', 'Subscription plan updated successfully.');
    }

    public function destroy(SubscriptionPlan $subscriptionPlan)
    {
        $subscriptionPlan->delete();

        return redirect()->route('admin.subscription_plans.index')
            ->with('success', 'Subscription plan deleted successfully.');
    }
}
