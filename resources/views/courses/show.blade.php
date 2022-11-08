<form action="{{ route('requestforms_create') }}" method="post">
    @csrf
    <label for="id">ID</label>
    <input type="text" id="id" name="id" value="{{ $course->id }}"><br>

    <label for="title">タイトル</label>
    <input type="text" id="title" name="title" value=" {{ $course->title }}"><br>

    <label for="price">値段</label>
    <input type="text" id="price" name="price" value=" {{ $course->price }}"><br>

    <label for="coupon">クーポン</label>
    <input type="text" id="coupon" name="coupon" value="{{ $course->coupon }}"><br>

    <label for="total_price">合計</label>
    <input type="text" id="total_price" name="total_price" value="{{ $course->total_price }}"><br>
<button>決済</button>
</form>
