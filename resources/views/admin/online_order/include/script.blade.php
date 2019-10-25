<script type="text/javascript" src="/js/datepicer/js/datepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){      
     
      $('.category_id').change(function(e){
      e.preventDefault();
        $.ajax({  
          url:'/admin/texnicslist',  
          method:"POST",  
          type:'json',
          data:{
            category_id: $(this).val()
          },
          success:function(data)  
          {
            $("#texnics_id").html(data);
          }  
        });  
      }); 

      $('.region_id').change(function(e){
      e.preventDefault();
           $.ajax({  
                url:'/admin/citylist',  
                method:"POST",  
                type:'json',
                data:{
                  region_id: $(this).val()
                },
                success:function(data)  
                {
                  $("#city_id").html(data);
                }  
           });  
      });

      // $('.statusChec').click(function(e){
      // e.preventDefault();
      // // alert('salo');
      //   $.ajax({  
      //     url:'/admin/online-order/status',  
      //     method:"POST",  
      //     type:'json',
      //     data:{
      //       id: $(this).attr('id')
      //     },
      //     success:function(data)  
      //     {
      //       // $("tbody").html(data);
      //       // location.reload();
      //     }  
      //   });  
      // }); 
    });  
    $(document).ready(function () {
      $('#dtBasicExample').DataTable({
        columnDefs: [{
        orderable: false,
        targets: 6
        }]
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>