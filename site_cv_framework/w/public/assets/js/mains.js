window.onload = function (){

	var div = [];
	
	var content1 = document.getElementsByClassName('content-section-a');
	var content2 = document.getElementsByClassName('content-section-b');

	div.push(content1[0]);
	div.push(content2[0]);
	div.push(content1[1]);
	div.push(content2[1]);

	for(var i = 0; i <= div.length; i++){

		if(i%2){

			div[i].style.backgroundColor = '#0b0c0b';
			div[i].style.color = ' #7cffa6';

			console.log(i);
		}else{

			div[i].style.backgroundColor = 'white';
		
		}

	}




}