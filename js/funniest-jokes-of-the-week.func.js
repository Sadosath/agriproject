$(function(){
	$(document).on('click','.likeListener', function(){
      var type = $(this).data('type');
      var thiss = $(this);
      if(type == 'like'){
           var pid = $(this).data('pid');
           var uid = $(this).data('uid');
           if (pid !="" && uid !="") {
           	$.post('funniest-jokes-of-the-week.php', {pid:pid, uid:uid, action:'like'},function(){
           		 {
           			thiss.addClass('hidden');
           			thiss.siblings().removeClass('hidden');
           			}
           		
           	});
           }
      } else if(type == 'unlike'){
           var pid = $(this).data('pid');
           var uid = $(this).data('uid');
           if (pid !="" && uid !="") {
           	$.post('funniest-jokes-of-the-week.php', {pid:pid, uid:uid, action:'unlike'},function(){
           		 {
           			thiss.addClass('hidden');
           			thiss.siblings().removeClass('hidden');
	           }
           		
           	});
           }
      }
     setTimeout( back, 50);
  });
});

  function back(){
    window.history.go(-1);
  }
$(function(){
  $(document).on('click','.delete', function(){
      
           var pid1 = $(this).data('pid1');
           var uid1 = $(this).data('uid1');
           if (pid1 !="" && uid1 !="") {
            $.post('funniest-jokes-of-the-week.php',{pid1:pid1, uid1:uid1},function(){
                
            });
        }
        setTimeout( reload, 50);
    });
});
 
 function reload(){
    location.reload();
  }