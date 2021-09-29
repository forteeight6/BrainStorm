# Escreva uma função que recebe dois números (a e b) como parâmetro e retorna True caso a soma dos dois seja maior que um terceiro parâmetro, chamado limite.

def soma_maior_que_limite(a, b, limite):
    if a + b > limite:
        return True
    else:
        return False


print(soma_maior_que_limite(10, 5, 15))

# Perceba que a função acima retorna exatamente o resultado da comparação a + b > limite, isto é, se a + b for maior que limite, a função retorna True e caso contrário ela retorna False. Portanto, nossa função poderia ser escrita de forma mais sucinta assim:


def soma_maior_que_limite_sucinta(a, b, limite):
    return a + b > limite


print(soma_maior_que_limite_sucinta(10, 5, 15))

# Há quem diga que a primeira versão da função é mais legível, mas há também quem prefira a segunda versão. Independentemente da sua preferência, você encontrará códigos parecidos com as duas versões ao longo do seu aprendizado e trabalho com programação, então é importante saber entender esse tipo de código mais conciso.
