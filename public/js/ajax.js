
	// $('.menyu').click(function(e){
	// 	e.preventDefault();

	// 	$('#AjaxContent')
	// 	.load($(this).attr('href'));

	// });	

	$.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

    $('.pulls').click(function(e){
    	e.preventDefault();
		 var form = $('#pollForm');
        $.ajax({
		  url: "/poll",
		  method:"POST",
		  type: 'json',
		  data: form.serialize(),
		})
		.done(function(list) {
		    window.location.reload();
		})
		.fail(function() {
		    console.log("error");
		}); 
  	});

  	$('.category_id').change(function(e){
      e.preventDefault();
        $.ajax({  
          url:'/online_order/texnicsList',  
          method:"GET",  
          type:'json',
          data:{
            category_id: $(this).val(),
            category: 'category'
          },
          success:function(data)  
          {
            $("#texnics_id").html(data['html']);
            $("#table").html(data['model']);
          }  
        });  
    });

    $('.texnics_id').change(function(e){
      e.preventDefault();
        $.ajax({  
          url:'/online_order/texnicsList',  
          method:"GET",  
          type:'json',
          data:{
            category_id: $(this).val(),
            category: 'texnics'
          },
          success:function(data)  
          {
          	// console.log($(this).val());
            $("#table").html(data['model']);
          }  
        });  
    });

    $('.texnika').change(function(e){
      e.preventDefault();
        $.ajax({  
          url:'/calculator/'+$(this).val(),  
          method:"GET",  
          type:'json',
          data:{
            id: $(this).val(),
          },
          success:function(data)  
          {
            console.log(data);
            // console.log($(this).val());
            $("#t_sum").html(data['t_sum']);
            $("#yillik_foiz").html(data['yillik_foiz']);
            $("#muddat").html(data['muddat']);
            $("#avans").html(data['avans']);
          }  
        });  
    });

   $('#inn_number').on('input',function () {
    var s = $(this).val();
    if(s.length===9){
      $('#ajax_label').text(' ');
      $('.ajax_loading #ajax_loading').empty().append("<img style='width:20px;' src='/img/ajax.gif'>");
      $.ajax({  
        url:'/usercan',  
        method:"POST",  
        type:'json',
        data:{
          inn: $(this).val()
        },
        success:function(data)  
        {
          $('#ajax_loading').html(' ');
          $('#ajax_loading_val').html(' ');
          $("#ajax_loading").empty().append("<span>"+data['message']+"</span>");
          if(data['success']=='success'){
            $('#phone_block').css('display','block');
          }
          else{
              $('#phone_block').css('display','none');
          }
        },
        error: function(errors) {
            console.log(errors);
        } 
     });        
    }
    else{
      $('#phone_block').css('display','none');
      $("#ajax_loading").html(' ');;
      $('#ajax_loading_val').html('Login');
      $('#ajax_label').text('Maydonga 9 honali ( INN ) raqam kiritiladi');
      // $('.yuborish').click(function(event) {
      //   event.preventDefault();
      // });
    }
  });

   $('.inn_send').click(function(e){
      e.preventDefault();
      var inn = $('#inn_number').val();
      var phone = $('#phone_number').val();
      if(phone=="" || inn==''){
        
      }
      else{ 
        $('#smsForm').html("<img style='width: 80px;margin: 0 auto;display: block;' src='/img/ajax.gif' class='center'>");
          $.ajax({  
            url:'/inn_send',  
            method:"POST",  
            type:'json',
            data:{
              inn: inn,
              phone: phone
            },
            success:function(data)  
            {
              // console.log($(this).val());
              $("#smsForm").html(data['html']);
            }  
        });  
      }
    });

    $('.tratId').click(function(e){
      e.preventDefault();

        $.ajax({  
          url:'/user/paymentTable',  
          method:"POST",  
          type:'json',
          data:{
            id: $(this).attr('id')
          },
          success:function(data)  
          {
            $(".table-responsive").html(data);
          }  
        });  
    });