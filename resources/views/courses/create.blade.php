<h2>新規作成</h2>
<form method="post" action="{{ route('courses.store') }}">
    @csrf
  
  <div class="p-2 w-full">
    <div class="relative">
      <label for="title">title</label>
      <textarea id="title" name="title" ></textarea>
    </div>
  </div>

  <div class="p-2 w-full">
    <button>登録</button>
  </div>
</form>
