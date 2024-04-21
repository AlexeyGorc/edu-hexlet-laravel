@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ html()->label('Название', 'name') }}
{{ html()->text('name')->placeholder('Название') }}
<br>
{{ html()->label('Содержание', 'body') }}
{{ html()->textarea('body')->placeholder('Содержание') }}
<br>