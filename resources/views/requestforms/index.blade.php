<h3>コース申し込み完了</h3>
<h3>ありがとうございました</h3>
<h3>今すぐ決済5000円</h3>

<form  action="{{route("payment")}}" method="post" class="center">
    @csrf
        <script type="text/javascript"
                src="https://checkout.pay.jp/"
                class="payjp-button"
                data-key="pk_test_14290101aeedb6dfdd73f6af"
                data-text="クレジットカード登録">
        </script>
        <input type="hidden" name="price" value=5000>
    </form>
