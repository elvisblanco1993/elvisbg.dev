<x-mail::message>
# NEW LEAD

**Name**: {{ $lead->name }}

**Email**: {{ $lead->email }}

**Message**: {{ $lead->question }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
