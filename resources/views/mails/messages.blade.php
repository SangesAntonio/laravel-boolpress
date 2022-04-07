@component('mail::message')
# IntroducGrazie per averci contattati 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ env('APP_NAME')}}
@endcomponent
