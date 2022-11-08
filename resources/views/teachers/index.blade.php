index<br>
<a href="{{ route('teachers.create') }}">新規登録</a><br> <!-- phpのリンクの作り方 -->

@foreach ( $teachers as $teacher )
    {{ $teacher->id }}
    {{ $teacher->name }}
    {{ $teacher->comment }}
    <a  href="{{ route('teachers.show', [ 'teacher' => $teacher->id ]) }}">詳細を見る</a><br>
@endforeach
