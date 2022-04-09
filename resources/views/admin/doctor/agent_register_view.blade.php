<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img height="150" width="200" style="margin-bottom: -30px;" src="/img/santema_logo.png" alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('agent_register') }}" enctype="multipart/form-data">
            @csrf

            <div class="card-body">


                <div>
                    <x-jet-label for="name" value="{{ __('Nom complet') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div>
                    <x-jet-label for="phone" value="{{ __('phone') }}" />
                    <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                </div>

                <div>
                    <x-jet-label for="address" value="{{ __('Address') }}" />
                    <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
                </div>

                <div class="form-group">
                    <label>Specialité</label>
                    <select class="form-control select2 select2-hidden-accessible" name="speciality" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">--Selectionner--</option>
                        <option data-select2-id="32" value="generaliste">Généraliste</option>
                        <option data-select2-id="33" value="medecin">Médecin</option>
                        <option data-select2-id="34" value="ophtalmologue">Ophtalmologue</option>
                        <option data-select2-id="35" value="infirmier">Infirmier</option>
                        <option data-select2-id="36" value="sagefemme">Sage-Femme</option>
                        <option data-select2-id="37" value="cardiologue">Cardiologue</option>
                    </select>
                </div>


                <div>
                    <x-jet-label for="file" value="{{ __('Photo') }}" />
                    <x-jet-input id="file" class="block mt-1 w-full" type="file" name="file" :value="old('file')" required autofocus autocomplete="file" />
                </div>


                <div>
                    <x-jet-label for="parcourt" value="{{ __('Cv') }}" />
                    <x-jet-input id="parcourt" class="block mt-1 w-full" type="file" name="parcourt" :value="old('parcourt')" required autofocus autocomplete="parcourt" />
                </div>








                <div>

                    <x-jet-input id="role_id" class="block mt-1 w-full" type="hidden" name="role_id" :value="2" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmation mot de passe') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déja inscrit?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Suivant') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>