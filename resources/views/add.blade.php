<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Employee') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/employee">

                <div class="form-group">

                <label class="block font-medium text-sm text-gray-700" for="first_name">First Name</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="first_name" type="text" name="first_name" required="required" autofocus="autofocus">
                    @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif

                <label class="mt-3 block font-medium text-sm text-gray-700" for="last_name">Last Name</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="last_name" type="text" name="last_name" required="required" autofocus="autofocus">
                    @if ($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif

                <label class="mt-3 block font-medium text-sm text-gray-700" for="middle_name">Middle Name</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="middle_name" type="text" name="middle_name" required="required" autofocus="autofocus">
                    @if ($errors->has('middle_name'))
                        <span class="text-danger">{{ $errors->first('middle_name') }}</span>
                    @endif

                <label class="mt-3 block font-medium text-sm text-gray-700" for="position">Position</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="position" type="text" name="position" required="required" autofocus="autofocus">
                    @if ($errors->has('position'))
                        <span class="text-danger">{{ $errors->first('position') }}</span>
                    @endif
                
                <p class="mt-3"><strong>Address</strong></p>
                <label class="block font-medium text-sm text-gray-700" for="address_unit">Unit</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="address_unit" type="text" name="address_unit" required="required" autofocus="autofocus">
                    @if ($errors->has('address_unit'))
                        <span class="text-danger">{{ $errors->first('address_unit') }}</span>
                    @endif

                <label class="mt-3 block font-medium text-sm text-gray-700" for="address_street">Street</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="address_street" type="text" name="address_street" required="required" autofocus="autofocus">
                    @if ($errors->has('address_street'))
                        <span class="text-danger">{{ $errors->first('address_street') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="address_city">City</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="address_city" type="text" name="address_city" required="required" autofocus="autofocus">
                    @if ($errors->has('address_city'))
                        <span class="text-danger">{{ $errors->first('address_city') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="address_province">Province</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="address_province" type="text" name="address_province" required="required" autofocus="autofocus">
                    @if ($errors->has('address_province'))
                        <span class="text-danger">{{ $errors->first('address_province') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="address_postal_code">Postal Code</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="address_postal_code" type="text" name="address_postal_code" required="required" autofocus="autofocus">
                    @if ($errors->has('address_postal_code'))
                        <span class="text-danger">{{ $errors->first('address_postal_code') }}</span>
                    @endif
                
                <p class="mt-3"><strong>Phone Number</strong></p>
                <label class="block font-medium text-sm text-gray-700" for="phone_number_main">Main</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="phone_number_main" type="text" name="phone_number_main" required="required" autofocus="autofocus">
                    @if ($errors->has('phone_number_main'))
                        <span class="text-danger">{{ $errors->first('phone_number_main') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="phone_number_cell">Cell</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="phone_number_cell" type="text" name="phone_number_cell" required="required" autofocus="autofocus">
                    @if ($errors->has('phone_number_cell'))
                        <span class="text-danger">{{ $errors->first('phone_number_cell') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="phone_number_text">Text?</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="phone_number_text" type="text" name="phone_number_text" required="required" autofocus="autofocus">
                    @if ($errors->has('phone_number_text'))
                        <span class="text-danger">{{ $errors->first('phone_number_text') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="phone_number_preferred">Preferred Number</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="phone_number_preferred" type="text" name="phone_number_preferred" required="required" autofocus="autofocus">
                    @if ($errors->has('phone_number_preferred'))
                        <span class="text-danger">{{ $errors->first('phone_number_preferred') }}</span>
                    @endif

                <p class="mt-3"><strong>Email Addresses</strong></p>
                <label class="block font-medium text-sm text-gray-700" for="email_addresses">Email</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="email_addresses" type="text" name="email_addresses" required="required" autofocus="autofocus">
                    @if ($errors->has('email_addresses'))
                        <span class="text-danger">{{ $errors->first('email_addresses') }}</span>
                    @endif
                
                <p class="mt-3"><strong>Emergency Contacts</strong></p>
                <label class="block font-medium text-sm text-gray-700" for="emergency_contacts_name">Name</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="emergency_contacts_name" type="text" name="emergency_contacts_name" required="required" autofocus="autofocus">
                    @if ($errors->has('emergency_contacts_name'))
                        <span class="text-danger">{{ $errors->first('emergency_contacts_name') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="emergency_contacts_phone_number_main">Main Number</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="emergency_contacts_phone_number_main" type="text" name="emergency_contacts_phone_number_main" required="required" autofocus="autofocus">
                    @if ($errors->has('emergency_contacts_phone_number_main'))
                        <span class="text-danger">{{ $errors->first('emergency_contacts_phone_number_main') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="emergency_contacts_phone_number_cell">Cell Number</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="emergency_contacts_phone_number_cell" type="text" name="emergency_contacts_phone_number_cell" required="required" autofocus="autofocus">
                    @if ($errors->has('emergency_contacts_phone_number_cell'))
                        <span class="text-danger">{{ $errors->first('emergency_contacts_phone_number_cell') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="emergency_contacts_email">Email</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="emergency_contacts_email" type="text" name="emergency_contacts_email" required="required" autofocus="autofocus">
                    @if ($errors->has('emergency_contacts_email'))
                        <span class="text-danger">{{ $errors->first('emergency_contacts_email') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="emergency_contacts_text">Text?</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="emergency_contacts_text" type="text" name="emergency_contacts_text" required="required" autofocus="autofocus">
                    @if ($errors->has('emergency_contacts_text'))
                        <span class="text-danger">{{ $errors->first('emergency_contacts_text') }}</span>
                    @endif
                
                <label class="mt-3 block font-medium text-sm text-gray-700" for="emergency_contacts_preferred">Preferred Number</label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="emergency_contacts_preferred" type="text" name="emergency_contacts_preferred" required="required" autofocus="autofocus">
                    @if ($errors->has('emergency_contacts_preferred'))
                        <span class="text-danger">{{ $errors->first('emergency_contacts_preferred') }}</span>
                    @endif

                </div>

                <div class="mt-3 form-group">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Employee</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>