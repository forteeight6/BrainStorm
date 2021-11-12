# python -i solucao.py
import matplotlib.pyplot as plt
from matplotlib import animation
import modulo.solucao_3 as ms3
from modulo.solucao_2 import SafePoint
from multiprocessing import Process


def myOneProcess():
    lista = [2, 5, 8]
    while True:

        num = ms3.selection(lista)

        safepoint = SafePoint(num)
        safepoint.run()


if __name__ == '__main__':
    processo_1 = Process(target=myOneProcess)
    processo_1.start()

    fig, ax = plt.subplots()

    def animar(i):
        with open('modulo/WINZ21_21-10.txt', 'r') as f:
            dados = f.read()

        x = []
        y = []

        count = 0
        for linha in dados.split('\n'):
            if len(linha) == 0:
                continue
            for item in linha:
                if ',' not in item:
                    if count % 2 == 0:
                        x.append(float(item))
                        ax.clear()
                        ax.plot(x)
                    else:
                        y.append(float(item))
                        ax.clear()
                        ax.plot(y)

                    count += 1

    ax.set_xlabel('Eixo x')

    ani = animation.FuncAnimation(fig, animar, interval=2000)

    plt.show()

    print('Entre com 0 para finalizar o processo.')
    opção = int(input())
    if opção == 0:
        processo_1.terminate()
