$(function(){

	$('#search').keyup(function(){

		var searchlength = $(this).val().length

		if(searchlength >= 2){
			var search = $(this).val()
			var data = $.trim('search='+search);
			if($.trim(search)){

			
			$.ajax({

				type: 'GET',
				url : 'result.php',
				data : data,
				dataType:'html',
				success: function(html){
					

					$('#result').css({

						display:'block'
					});
					$("#result").append(html).show();

						console.log(html);
					
				}

			});
		}

			}else if(searchlength < 1){

				$('#result').html('').show();
				$('#result').css({

					display:'none'
				});
			}
	});

});