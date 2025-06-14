<x-layout>
<x-page-heading>Registered</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"></x-forms.input>
        <x-forms.input label="Email" name="email" type="email"></x-forms.input>
        <x-forms.input label="Password" name="password" type="password"></x-forms.input>
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"></x-forms.input>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Employer Name" name="employer"></x-forms.input>
        <x-forms.input label="Employer Logo" name="logo" type="file"></x-forms.input>

        <x-forms.button>
            Create Account
        </x-forms.button>
    </x-forms.form>
</x-layout>
