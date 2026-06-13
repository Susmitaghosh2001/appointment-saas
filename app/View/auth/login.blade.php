<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="w-full max-w-5xl bg-white rounded-3xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- Left -->
        <div class="bg-indigo-600 text-white p-12 flex items-center">

            <div>

                <h1 class="text-5xl font-bold leading-tight">
                    Appointment Booking SaaS
                </h1>

                <p class="mt-6 text-lg text-indigo-100">
                    Manage appointments, customers, services and payments in one place.
                </p>

            </div>

        </div>

        <!-- Right -->
        <div class="p-12">

            <h2 class="text-3xl font-bold text-gray-800 mb-8">
                Welcome Back
            </h2>

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- Email -->
                <div class="mb-5">

                    <label class="block mb-2 text-gray-700">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           class="w-full border border-gray-300 rounded-xl p-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                           required>

                </div>

                <!-- Password -->
                <div class="mb-5">

                    <label class="block mb-2 text-gray-700">
                        Password
                    </label>

                    <input type="password"
                           name="password"
                           class="w-full border border-gray-300 rounded-xl p-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                           required>

                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between mb-6">

                    <label class="flex items-center gap-2">

                        <input type="checkbox" name="remember">

                        <span class="text-gray-600">
                            Remember me
                        </span>

                    </label>

                    <a href="#"
                       class="text-indigo-600 hover:underline">

                        Forgot Password?

                    </a>

                </div>

                <!-- Button -->
                <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 transition text-white py-4 rounded-xl font-semibold">

                    Login

                </button>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>