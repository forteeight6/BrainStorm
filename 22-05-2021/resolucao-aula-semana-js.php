<!--JS TUDO É UM OBJETO-->
<!--MAP/FILTER/REDUCE-->

<!--day Map-->
<script>
    //const numeros = [10, 30, 15, 25, 50, 40, 5]
    const numbers = [1, 4, 9]
    
    //OBJ DOCUMENT->MÉTODO WRITE(OBJ NUMBERS->MÉTODO MAP(OBJ MATH->MÉTODO SQRT()))
    document.write(numbers.map(Math.sqrt))

    document.write("<br>")

    //OBJ DOCUMENT->WRITE(NUMBERS->MAP(FUNCTION()))
    document.write(numbers.map(
        function(num)
        {
            return num * 2
        }
    ))

    document.write("<br>")

    const objeto = Array.prototype.map

    document.write(objeto.call('Hello World',
        function(representacao_ascii)
        {
            return representacao_ascii.charCodeAt(0)
        }
    ))

    document.write("<br>")

    //Esse exemplo demonstra como iterar sobre uma coleção de objetos recuperada através de querySelectorAll. Nesse caso, vamos pegar todos os options selecionados na tela e imprimir no console:
    const elementos = document.querySelectorAll('select option:checked')

    console.log([].map.call(elementos,
        function(obj)
        {
            return obj.value
        }
    ))

    document.write("<br>")

    //invertendo string
    const string = "123456789"

    document.write([].map.call(string,
        function(string_invertida)
        {
            return string_invertida
        }
    ).reverse().join(', '))
    // Bonus: utilize '===' para verificar se a string original e a nova string são palíndromos

    document.write("<br>")

    document.write([1, 2, 3].map(Number))

</script>