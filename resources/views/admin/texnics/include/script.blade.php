<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('/admin/addmore'); ?>";
      var postID = "<?php echo "/admin/params/".$id; ?>";
      var i=0;  

      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name['+i+'][name_en]" required placeholder="Name en" class="form-control name_list" /></td><td><input type="text" name="name['+i+'][name_ru]" required placeholder="Name ru" class="form-control name_list" /></td><td><input type="text" name="name['+i+'][name_uz]" required placeholder="Name uz" class="form-control name_list" /></td><td><input type="text" name="name['+i+'][name_uzk]" required placeholder="Name uzk" class="form-control name_list" /></td><td><input type="text" name="name['+i+'][value]" required placeholder="Value ( number )" class="form-control name_list" /></td><td style="display: none"><input type="text" name="name['+i+'][texnics_id]" value="{{ $id }}" class="form-control name_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#submit').click(function(){    
         if(!($('#add_name').serialize().indexOf('=&') > -1)){    
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                  $.ajax({  
                    url: postID,  
                    cache: false,  
                    success: function(html){  
                        $("#modalContent1").html(html);  
                    }
                  });
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           }); 
        }else{
          alert('Maydonlari to`liq kiritish shart');
        } 
      }); 
      

      $('.ochirish1').click(function(e){  
          e.preventDefault();
          var r = confirm('Are you sure you want to delete?');
          if (r == true) {
           $.ajax({  
                url:$(this).attr('href'),  
                method:"GET",  
                type:'json',
                success:function(data)  
                {
                  $.ajax({  
                    url: postID,  
                    cache: false,  
                    success: function(html){  
                        $("#modalContent1").html(html);  
                    }
                  });
                }  
           });  
          }
      }); 
      $(".editor").click(function(e) {
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
        $(name_en).css('display', 'block');
        $(name_en).siblings().css('display', 'none');

        $(name_ru).css('display', 'block');
        $(name_ru).siblings().css('display', 'none');

        $(name_uz).css('display', 'block');
        $(name_uz).siblings().css('display', 'none');

        $(name_uzk).css('display', 'block');
        $(name_uzk).siblings().css('display', 'none');

        $(idv).css('display', 'block');
        $(idv).siblings().css('display', 'none');
{{-- MVC --}}
        $(mvc).css('display', 'none');
        $(edit_del).css('display', 'block');
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


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
    
  </script>