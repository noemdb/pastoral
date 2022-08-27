<div class="font-semibold text-xl text-gray-800 leading-tight">
    Datos de contacto
</div>


<div>
    <x-jet-label for="phone" value="{{ __($comment_enrollment['phone']) }}" />
    <x-jet-input id="phone" class="block mt-1 w-full" type="phone" name="phone" :value="old('phone')"   />
</div>

<div>
    <x-jet-label for="email" value="{{ __($comment_enrollment['email']) }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"   />
</div>

<div>
    <x-jet-label for="twitter" value="{{ __($comment_enrollment['twitter']) }}" />
    <x-jet-input id="twitter" class="block mt-1 w-full" type="twitter" name="twitter" :value="old('twitter')"   />
</div>

<div>
    <x-jet-label for="whatsapp" value="{{ __($comment_enrollment['whatsapp']) }}" />
    <x-jet-input id="whatsapp" class="block mt-1 w-full" type="whatsapp" name="whatsapp" :value="old('whatsapp')"   />
</div>

<div>
    <x-jet-label for="facebook" value="{{ __($comment_enrollment['facebook']) }}" />
    <x-jet-input id="facebook" class="block mt-1 w-full" type="facebook" name="facebook" :value="old('facebook')"   />
</div>