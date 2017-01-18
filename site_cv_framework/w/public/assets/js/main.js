window.onload = function(){

	var table_row = document.getElementsByTagName('tr');

	var titreBarre = document.getElementsByClassName('titre-barre-lateral')[0];
	var contentBarre = document.getElementsByClassName('content-barre-lateral')[0];
	var table = document.getElementsByClassName('table')[0];

	var onOff = false;

	titreBarre.addEventListener('click',function(){

		if(!onOff){

			contentBarre.style.height = '0';
			table.style.display = 'none';
			onOff = true;
		}else{

			contentBarre.style.height = 'inherit';
			table.style.display = 'block';
			onOff = false;
		}


	},false)

	for(i = 0; i <= table_row.length; i++){
		if(i%2){

		table_row[i].style.backgroundColor = '#2F2F2F';
		table_row[i].style.color = 'white';
			
		}else{

		table_row[i].style.backgroundColor = '#46A2D9';
			
		}

	}

	

}