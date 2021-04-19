function mostrarMenu()
{
    var estado = document.getElementById("menu2").style.display;

    if(estado == "block")
    {
        document.getElementById("botao").addEventListener("click",
            document.getElementById("menu2").style.display = "none"
        )
    }
    else
    {
        document.getElementById("botao").addEventListener("click",
            document.getElementById("menu2").style.display = "block"
        )  
    }
}

