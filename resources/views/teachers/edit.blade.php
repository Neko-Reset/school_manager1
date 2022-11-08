<h2>編集</h2>
<form method="post" action="{{ route( 'teachers.update', [ 'teacher' => $teacher->id ]) }}">
  @method('put')
  @csrf
  <div class="relative">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="{{ $teacher->name }}">
    </div>
  </div>

  <div class="p-2 w-full">
    <div class="relative">
      <label for="comment">comment</label>
      <textarea id="comment" name="comment" >{{ $teacher->comment }}</textarea>
    </div>
  </div>

  <div class="p-2 w-full">
    <button>編集</button>
  </div>
</form>
