<form action="/sms_code/verify" method="POST" class="login-form">
	@csrf
	<div class="form-fild">
	 <label id="" style="margin-top: -30px;"></label>
	 <input type="text" placeholder="SMS CODE" name="sms_code" required>
	</div>
	<button type="submit" class="btn famie-btn">@lang('messages.YUBORISH')</button>
</form>