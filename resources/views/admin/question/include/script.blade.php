<script type="text/javascript">
	$('.answer').click(function(event) {
		var id = $(this).attr('id');
		$('#question_id').val(id);
	});

	$.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

	$('.ozgartirish').click(function(e){
      e.preventDefault();
      $('#myModalkorish').modal('show')
      .find('#modalContent1')
      .load($(this).attr('href'));
  });
</script>