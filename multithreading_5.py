from threading import Thread
from time import sleep

global var

var = True


def altura():
    while var:
        altura = float(input("Qual é a altura da parede? "))
        sleep(7)
        print('\n')
        print(altura)


def largura():
    while var:
        largura = float(input("Qual a largura da parede? "))
        sleep(4)
        print('\n')
        print(largura)


Thread(target=altura).start()
Thread(target=largura).start()

opcao = str(input())
if opcao == 'x':
    var = False
