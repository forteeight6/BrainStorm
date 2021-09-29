# Escreva uma função que, dado um número nota representando a nota de um estudante, converte o valor de nota para um conceito (A, B, C, D, E e F).

def converte_nota_em_conceito(nota):
    if nota >= 90:
        return "A"
    elif nota >= 80:
        return "B"
    elif nota >= 70:
        return "C"
    elif nota >= 60:
        return "D"
    elif nota >= 40:
        return "E"
    else:
        return "F"


print(converte_nota_em_conceito(65))

# Note que no exemplo acima, como sempre retornamos um valor dentro de cada teste, não precisamos fazer testes como if nota >= 60 and nota ⇐ 69. Se a nota for maior que 90, ela será retornada no primeiro teste. Caso não seja, mas seja maior que 80 (nesse caso, implicitamente ela está entre 80 e 90) ela é retornada no segundo teste, e assim por diante. Se estivéssemos imprimindo a nota dentro da função (ao invés de retorná-la) não poderíamos ter escrito o código dessa forma. Talvez essa não seria a forma que você escreveria essa função (e há meritos na outra forma, que é mais explicita), mas é importante entender esse tipo de código. Programação não é só escrever código, entender código dos outros é extremamente importante também.
