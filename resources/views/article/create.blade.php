{{ html()->form('POST')->route('articles.store')->open() }}
    @include('article.form')
    {{ html()->submit('Создать') }}
{{ html()->form()->close() }}