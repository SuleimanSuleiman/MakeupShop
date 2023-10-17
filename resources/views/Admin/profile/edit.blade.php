<x-app-layout>

    {{-- page header --}}
    <x-header :fixed=True :messages="['home','admin/dashboard']" :btn=False textColor='gray'/>

    <div class="py-24">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('Admin.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('Admin.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action={{ route('admin.logout') }} method="POST">
                        @csrf
                        @method('POST')
                        <input value="Logout" type="submit">
                    </form>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('Admin.profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
