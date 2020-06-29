$(document).ready(function() {
		
	$("#download").click(function() {

      // url 
      var vid_url = $("#url").val();

      // valid if url is correct 
      
      if(isUrlValid(vid_url)){    

        $('#download').button('loading');
		 $('.resultdiv').hide();
		 $('#data').html(' ');
		 
        //ajax call
        $.ajax({
          type:"POST",      
          dataType:'json',
          url:'MobGyan-service.php',
          data:{url:vid_url},
          // success function 
          success:function(data){
            console.log(data);
			// Check Service response through status parameter
			if(data.status=="success"){
				$('.profilepic').attr('src', data.profile_pic_url);
				$('#username').html(data.username);
				$('.profilename').html(data.full_name);
				
				// Check if single image post
				if(data.flag=="image"){
					$('#data').html('<img  src="'+data.image+'" class="downloadimage" ></img><center><a href="'+data.image+'" class="btn btn-outline-primary mt-3 mb-2"><i class="fas fa-download"> Download</a></center>');
				
				}
				
				//check if single video post
				if(data.flag=="video"){
					$('#data').html('<video id="video" width="100%" autoplay="autoplay" loop="loop" muted="muted" controls><source src="'+data.videourl+'" type="video/mp4" >Your browser does not support the video tag. </video><center><a href="'+data.videourl+'" class="btn btn-outline-primary mt-3 mb-2"><i class="fas fa-download"> Download</a></center>');
					$("#video")[0].load();
				}
				
				//check if multiple video/image post
				if(data.flag=="media"){
					
					$.each(data.medias, function(i, media) {
                  
						  if(media['1']=="image"){
							   $('#data').append('<img  src="'+media['0']+'" class="downloadimage" ></img><center><a href="'+media['0']+'" class="btn btn-outline-primary mt-3 mb-3"><i class="fas fa-download"> Download</a></center>');
						  }else{
							  
							  $('#data').append('<video id="video'+i+'" width="100%" autoplay="autoplay" loop="loop" muted="muted" controls><source src="'+media['0']+'" type="video/mp4" >Your browser does not support the video tag. </video><center><a href="'+media['0']+'" class="btn btn-outline-primary mt-3 mb-3"><i class="fas fa-download"> Download</a></center>');
							 $("#video"+i)[0].load();
						
						  }
                   
					
					});
				
				}
				//If everything goes right we will show the result
				 $('.resultdiv').show();
				 $('#download').button('reset');
				 
			}else{
				
				swal.fire('','Url tidak valid','error');
				 $('#download').button('reset');
			}
         
          }
        })
      }else{ 
		  swal.fire('','Masukkan url post','error');
		  $('#download').button('reset');
	  }
	});
	//Validations for url
	function isUrlValid(url) {
				return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
			}	
		});
