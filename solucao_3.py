# python -i solucao.py
import matplotlib.pyplot as plt
from matplotlib import animation

fig, ax = plt.subplots()


def animar(i):
    dados = []
    x = []

    with open('padrao_setado.txt', 'r') as file:
        dados = file.read()
        dados = dados.replace("[", '')
        dados = dados.replace("]", '')
        dados = dados.split(',')

        for item in dados:
            x.append(item)
            ax.clear()
            ax.plot(x)


ani = animation.FuncAnimation(fig, animar, interval=1000)

ax.set_xlabel('Eixo x')

plt.show()

# animar()
