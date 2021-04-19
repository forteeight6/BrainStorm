var largura = window.innerWidth;

//alert(largura);
//console.log(typeof largura);
//alert('entrou');

if(largura < 768)
{
    //alert('entrou');    
    document.body.addEventListener("load", 
        //document.body.style.display = 'none'
        document.getElementById("frases_de_impacto").style.display = 'none'
    );
}
else
{
    document.body.addEventListener("load",
        document.getElementById("meio1").style.display = 'none'
    );
}
