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
  $('.category_id').change(function(e){
      e.preventDefault();
           $.ajax({  
                url:'/admin/subcategorylist',  
                method:"POST",  
                type:'json',
                data:{
                  category_id: $(this).val()
                },
                success:function(data)  
                {
                  $("#subcategory_id").html(data);
                }  
           });  
      });

  $('.qidirish').on('input',function () {
    var s = $(this).val();
    // if(s.length===9){
      $('.td1 span').empty().append("<img style='width:20px;' src='/img/ajax.gif'>");
      $.ajax({  
        url:'/admin/user-inn/find',  
        method:"POST",  
        type:'json',
        data:{
          inn: $(this).val()
        },
        success:function(data)  
        {
          $('.td1 span').html(' ');
          $("tbody").html(data);
        }  
     });        
    // }
  });

  $('.tolov_kiritish').click(function(event) {
    var s= $(this).attr('id');

    $('#tolov_id').val(s);
  });

    var tolanishi_kk = 0;
    var tolandi = 0;
    var qoldiq = 0;
    var soni = 0;
    var k= document.getElementsByClassName('tolanishi_kk');
    var s= document.getElementsByClassName('tolangan_sum');
    var d= document.getElementsByClassName('qoldiq_summ');
    var c= document.getElementsByClassName('soni');

    for(var i = 0; i < k.length; i++)
    {
        tolanishi_kk += parseInt(k[i].innerHTML);
        if(s.length) tolandi += parseInt(s[i].innerHTML);
        if(d.length) qoldiq += parseInt(d[i].innerHTML);
        if(c.length) soni += parseInt(c[i].innerHTML);
    }
    
    if(tolanishi_kk) document.getElementById('tolanishi_kk').innerHTML = tolanishi_kk;
    if(tolandi) document.getElementById('tolangan_sum_n').innerHTML = tolandi;
    if(qoldiq) document.getElementById('qoldiq_summ_n').innerHTML = qoldiq;
    if(soni) document.getElementById('soni').innerHTML = soni;
    console.log(tolandi);
  
</script>