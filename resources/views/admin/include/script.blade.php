<script>
$('.tex_cat_id').click(function(event) {
	$('#texnics_categories_id').val($(this).attr('data'));
});
$('.korish').click(function(e){
      e.preventDefault();
      $('#myModalkorish').modal('show')
      .find('#modalContent1')
      .load($(this).attr('href'));
  });
  $('.ozgartirish').click(function(e){
      e.preventDefault();
      $('#myModalkorish').modal('show')
      .find('#modalContent1')
      .load($(this).attr('href'));
  });
</script>