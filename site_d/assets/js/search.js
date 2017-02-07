$(function(){

		$('#search').keyup(function(){

					/*console.log($('#search').val().length);*/

					if($('#search').val().length > 2 ){
							var motclef = $("#search").val()
							var data = array("motclef" => motclef);
						$.ajax({

							
						


						});
							return false;
					}

		});

});