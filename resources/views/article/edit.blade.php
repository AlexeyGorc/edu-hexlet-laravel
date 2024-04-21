{{ html()->form('PATCH')->route('articles.update', $article->id)->open() }}
@include('article.form')
{{ html()->submit('Создать') }}
{{ html()->form()->close() }}