@component('mail::message')
    # Introduction

    {{ $email ?? 'N/A' }}
    {{ $message ?? 'N/A' }}

@endcomponent
