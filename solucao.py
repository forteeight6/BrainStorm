# Crie uma função que toda vez que for executada salve um dado dentro de um arquivo .txt.

class flag:

    def __init__(self):
        self.file = open('flag.txt', 'r')
        self.data = int(self.file.read().replace('\n', ''))

    def add(self, num=1):
        self.num = num
        self.data += num

        with open('flag.txt', 'w') as self.file:
            self.file.write(f'{self.data}')
        self.file = open('flag.txt', 'r')
        self.data = int(self.file.read().replace('\n', ''))

    def rmv(self, num2=1):
        self.num2 = num2
        self.data -= num2

        with open('flag.txt', 'w') as self.file:
            self.file.write(f'{self.data}')
        self.file = open('flag.txt', 'r')
        self.data = int(self.file.read().replace('\n', ''))

    def status(self):
        with open('flag.txt', 'r') as self.file:
            return self.file.read()


flag = flag()
# flag.add()
flag.rmv()
# Vou ter que salvar o valor atual da flag num arquivo flag.txt e recuperar esse valor sempre que requisitar um método.

"""
lista = [6]

flag = flag()
for item in lista:
    arquivo = open('WINZ21_21-10.txt', 'a')

    if flag.status() < 2:
        arquivo.write(f'{item}, ')
        flag.add()
    else:
        arquivo.write(f'\n')
        arquivo.write(f'{item}, ')
        flag.rmv()
"""
