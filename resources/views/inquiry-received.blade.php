<x-mail::message>
# NEW LEAD

**Name**: {{ $lead->name }}
**Email**: {{ $lead->email }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
