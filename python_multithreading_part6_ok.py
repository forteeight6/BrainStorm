from multiprocessing.pool import ThreadPool
from time import sleep, time
from random import randint
# :~:text=Aqui%2C%20veremos%20o%20m%C3%B3dulo%20multiprocessing,Python%20possui%20muitos%20recursos%20poderosos.
# fonte: https: // medium.com/@adson.develop/uma-pequena-introdu % C3 % A7 % C3 % A3o-a-programa % C3 % A7 % C3 % A3o-paralela-e-multiprocessamento-com-python-232bbf72a8f7


def print_names(name):
    sleep(randint(1, 3))
    print('Meu nome é: {}'.format(name))


runtime = []
threads = []
names = ['Adson', 'Gabriel', 'Siqueira', 'Ronaldo', 'Gleilson',
         'Emerson', 'Joselito', 'Piloto', 'Kleber', 'Mauricio']

pool = ThreadPool(processes=4)
start = time()

for name in names:
    async_result = pool.map(print_names, (name,))
    threads.append(async_result)

end = time()
print('tempo de execução da tradução: {}'.format(end - start))
