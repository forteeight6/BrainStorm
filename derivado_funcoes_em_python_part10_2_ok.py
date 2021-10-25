def pesquisa_elemento2(numeros, numero_procurado):
    for indice in range(len(numeros)):
        if numeros[indice] == numero_procurado:
            return True
    return False


print(pesquisa_elemento2([1, 10, 20, 30, 50, 100], 30))

# Como mencionamos acima, a função pesquisa_elemento1 nada mais é que uma pesquisa linear na lista de números de entrada. Como esse tipo de pesquisa é usada muito frequentemente, Python disponibiliza um mecanismo built-in (embutido na linguagem) para realizar esse tipo de pesquisa. Vejamos um exemplo:
