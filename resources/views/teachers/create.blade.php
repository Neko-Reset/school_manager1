<h2>新規作成</h2>
<form method="post" action="{{ route('teachers.store') }}">
    @csrf
  <div class="relative">
      <label for="name">Name</label>
      <input type="text" id="name" name="name">
    </div>
  </div>

  <div class="p-2 w-full">
    <div class="relative">
      <label for="comment">comment</label>
      <textarea id="comment" name="comment" ></textarea>
    </div>
  </div>

  <div class="p-2 w-full">
    <button>登録</button>
  </div>
</form>
