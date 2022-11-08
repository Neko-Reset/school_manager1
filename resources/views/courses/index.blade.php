一覧
<a href="{{ route('courses.create') }}">新規登録</a><br> <!-- phpのリンクの作り方 -->
@foreach ( $courses as $course )
    {{ $course->id }}
    {{ $course->title }}
    <a  href="{{ route('courses.show', [ 'course' => $course->id ]) }}">詳細を見る</a>
@endforeach
