var displayedImage = document.querySelector('.displayed-img');
var thumbBar = document.querySelector('.thumb-bar');


/* Looping through images */
for(var i=1 ; i <= 5 ; i++){
  var newImage = document.createElement('img');
  newImage.setAttribute('src','img/animal' + i + '.jpeg');
  thumbBar.appendChild(newImage);

  newImage.onclick = function(e){
  	var imgSrc = e.target.getAttribute('src');
  	displayImage(imgSrc);
  }
}

function displayImage(imgSrc){
	displayedImage.setAttribute('src',imgSrc);
}