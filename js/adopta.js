function show(){
var a=document.forms["Form"]["nume"].value;
var b=document.forms["Form"]["prenume"].value;
var c=document.forms["Form"]["telefon"].value;
var msg = document.getElementById("mesaj");
if (a==null || a=="")
        {
            alert("Introduceti numele dumneavoastra!");
            
        }
else if ((b==null || b==""))
		{	
			alert("Introduceti prenumele dumneavoastra!");
		}
else if ((c==null || c==""))
		{	

			alert("Introduceti telefonul dumneavoastra!");
		}
else{
			msg.textContent = "Ati trimis formularul cu succes."
	}
}