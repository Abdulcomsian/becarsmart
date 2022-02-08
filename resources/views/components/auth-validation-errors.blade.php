@props(['errors'])

@if ($errors->any())
<div class="alert alert-danger">
    <div {{ $attributes }}>
        <div class="font-medium text-red-600 text-danger">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 align-left list-disc list-inside text-sm text-danger text-red-600" style="text-align: left !important;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif