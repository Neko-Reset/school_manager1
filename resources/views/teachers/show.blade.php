{{ $teacher->name }}
{{ $teacher->comment }}
<form method="get" action="{{ route( 'teachers.edit', [ 'teacher' => $teacher->id ] ) }}">
  <div class="p-2 w-full">
    <button >編集する</button>
  </div>
</form>


<form  method="post" action="{{ route( 'teachers.destroy', [ 'teacher' => $teacher->id ] ) }}">
  @csrf
  @method('delete')
  <div class="p-2 w-full">
    <button sub >削除</button>
  </div>
</form>
