@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <!-- Card -->
    <div class="bg-white p-6 rounded-2xl shadow-sm">

        <p class="text-gray-500">
            Total Businesses
        </p>

        <h2 class="text-4xl font-bold mt-2 text-indigo-600">
            25
        </h2>

    </div>

    <!-- Card -->
    <div class="bg-white p-6 rounded-2xl shadow-sm">

        <p class="text-gray-500">
            Total Appointments
        </p>

        <h2 class="text-4xl font-bold mt-2 text-green-600">
            320
        </h2>

    </div>

    <!-- Card -->
    <div class="bg-white p-6 rounded-2xl shadow-sm">

        <p class="text-gray-500">
            Revenue
        </p>

        <h2 class="text-4xl font-bold mt-2 text-yellow-500">
            ₹50K
        </h2>

    </div>

    <!-- Card -->
    <div class="bg-white p-6 rounded-2xl shadow-sm">

        <p class="text-gray-500">
            Pending Bookings
        </p>

        <h2 class="text-4xl font-bold mt-2 text-red-500">
            12
        </h2>

    </div>

</div>

<!-- Recent Appointments -->
<div class="mt-10 bg-white rounded-2xl shadow-sm overflow-hidden">

    <div class="p-6 border-b">

        <h3 class="text-xl font-bold text-gray-800">
            Recent Appointments
        </h3>

    </div>

    <table class="w-full">

        <thead class="bg-gray-50">

            <tr>

                <th class="text-left p-4">
                    Customer
                </th>

                <th class="text-left p-4">
                    Service
                </th>

                <th class="text-left p-4">
                    Date
                </th>

                <th class="text-left p-4">
                    Status
                </th>

            </tr>

        </thead>

        <tbody>

            <tr class="border-b">

                <td class="p-4">
                    Rahul Sharma
                </td>

                <td class="p-4">
                    Hair Cut
                </td>

                <td class="p-4">
                    10 May 2026
                </td>

                <td class="p-4">

                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">
                        Confirmed
                    </span>

                </td>

            </tr>

            <tr class="border-b">

                <td class="p-4">
                    Priya Das
                </td>

                <td class="p-4">
                    Spa
                </td>

                <td class="p-4">
                    11 May 2026
                </td>

                <td class="p-4">

                    <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm">
                        Pending
                    </span>

                </td>

            </tr>

        </tbody>

    </table>

</div>

@endsection