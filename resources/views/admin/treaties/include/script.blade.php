<script type="text/javascript">
	$('#salom').click(function(event) {
		alert('sasasasa');
			
	});
	$(".qalam").click(function(e) {
        e.preventDefault();
        alert('sdsd');
//         var id = $(this).attr('id');

//         var name_en = $(this).attr('id')+"name_en";
//         var name_ru = $(this).attr('id')+"name_ru";
//         var name_uz = $(this).attr('id')+"name_uz";
//         var name_uzk = $(this).attr('id')+"name_uzk";
//         var idv = id+"v";
//         var mvc = id+"mvc";
//         var edit_del = id+"edit_del";
// {{-- inputs --}}
//         $(name_en).css('display', 'block');
//         $(name_en).siblings().css('display', 'none');

//         $(name_ru).css('display', 'block');
//         $(name_ru).siblings().css('display', 'none');

//         $(name_uz).css('display', 'block');
//         $(name_uz).siblings().css('display', 'none');

//         $(name_uzk).css('display', 'block');
//         $(name_uzk).siblings().css('display', 'none');

//         $(idv).css('display', 'block');
//         $(idv).siblings().css('display', 'none');
// {{-- MVC --}}
//         $(mvc).css('display', 'none');
//         $(edit_del).css('display', 'block');
      });

// Bekor qilish
      $('.bekor').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('id');

        var name_en = $(this).attr('id')+"name_en";
        var name_ru = $(this).attr('id')+"name_ru";
        var name_uz = $(this).attr('id')+"name_uz";
        var name_uzk = $(this).attr('id')+"name_uzk";
        var idv = id+"v";
        var mvc = id+"mvc";
        var edit_del = id+"edit_del";

       {{-- inputs --}}
        $(name_en).css('display', 'none');
        $(name_en).siblings().css('display', 'block');

        $(name_ru).css('display', 'none');
        $(name_ru).siblings().css('display', 'block');

        $(name_uz).css('display', 'none');
        $(name_uz).siblings().css('display', 'block');

        $(name_uzk).css('display', 'none');
        $(name_uzk).siblings().css('display', 'block');
{{-- MVC --}}
        $(idv).css('display', 'none');
        $(idv).siblings().css('display', 'block');
        $(mvc).css('display', 'block');
        $(edit_del).css('display', 'none');
      });

// Saqlash
      $('.saqlash').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('id');
        var name_en = $(this).attr('id')+"name_en_v";
        var name_ru = $(this).attr('id')+"name_ru_v";
        var name_uz = $(this).attr('id')+"name_uz_v";
        var name_uzk = $(this).attr('id')+"name_uzk_v";
          $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            data: {
              name_en: $(name_en).val(),
              name_ru: $(name_ru).val(),
              name_uz: $(name_uz).val(),
              name_uzk: $(name_uzk).val(),
              value: $(id+"value").val(),
            },
          })
          .done(function(html) {
            $.ajax({  
              url: postID,  
              cache: false,  
              success: function(html){  
                  $("#modalContent1").html(html);  
              }
            });
          })
          .fail(function() {
              alert("So`rov bajarilmadi qayta urinib koring");
              $(this).show();
          });
      });
</script>