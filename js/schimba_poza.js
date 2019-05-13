function schimba(){
	img = document.getElementById("index-img");

	if(img.className == "caine"){
		img.src = "img/cat1.jpg"
		img.className = "pisica"
	}
	else{
		if(img.className == "pisica"){
		img.src = "img/dog1.png"
		img.className = "caine"
		}
	}
	
}
