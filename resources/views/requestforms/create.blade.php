<form method="post" action="{{ route('requestforms.store') }}">
    @csrf
  <label>コースID<input type="text" name="course_id" value="{{ $all['id'] }}"><br></label>

  <label for="title">タイトル</label>
    <input type="text" id="title" name="title" value=" {{ $all['title'] }}"><br>

  <label for="price">値段</label>
    <input type="text" id="price" name="price" value=" {{ $all['price']}}"><br>

  <label for="coupon">クーポン</label>
  <input type="text" id="coupon" name="coupon" value="{{ $all['coupon']}}"><br>

  <label for="total_price">合計</label>
  <input type="text" id="total_price" name="total_price" value="{{ $all['total_price'] }}"><br>
  <button>送信</button>
</form>
