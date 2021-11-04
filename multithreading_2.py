from threading import Thread
from time import sleep
print(
    'Comprovando que cada thread é executado de forma independente e escalonada, independentemente do fluxo inicial da aplicação.')
print('A ordem do resultado pode variar, caso tenha uma variação de valores.')

global var

var = False


def funcao(msg):
    for i in range(5):
        if var:
            break
        print(i, msg)
    sleep(5)


Thread(target=funcao, args=('Independente e Escalonado', )).start()

"""
while True:
    print("Este programa calcula a área de algo.\n")
    altura = float(input("Qual é a altura da parede? "))
    largura = float(input("Qual a largura da parede? "))
    area = altura * largura
    print(f"A area da parede é de {area} m².\n")

    opcao = str(input("X + Enter para sair do programa: "))
    if opcao == 'x':
        var = True
        break
"""
