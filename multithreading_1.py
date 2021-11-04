from threading import Thread
print("fonte: https://imasters.com.br/back-end/threads-em-python")

print("O que são Threads?")
print('\n')
print("Threads são fluxos de programas que executam em paralelo dentro de uma aplicação, isto é, uma ramificação de uma parte da aplicação que é executada de forma independente do fluxo inicial da aplicação.")
print('\n')
print("Exemplo:")
print("Uma aplicação que mede, de tempos em tempos, a condição de determinados sensores. Supondo que cada sensor precisa ser medido com uma frequência diferente, isto é, um a cada 30 segundos, outro a cada 45 segundos, e por fim um terceiro a cada 75 segundos.")

print('\n')
print('Implementar isto de maneira sequencial é trabalhoso. Um jeito facil, porém, é a implementação de uma thread independente para a leitura de cada um dos sensores. Desta forma a thread espera o tempo determinado para a leitura do sensor a que ela esta ligada, sem se preocupar, ou mesmo saber, sobre os outros sensores.')
print('\n')
print('Assim, neste caso, bastaria fazer uma classe por tipo de sensor, sendo que cada classe seria uma thread. Para transformar uma classe em thread, são necessarios duas modificações na classe:')
print('\n')
print('-> A classe em questão estender à classe Thread do pacote threading.')
print('\n')
print('-> Implementar o método run(), que será chamado quando a thread iniciar.')
print('\n')
print('Em Python, o pacote que providencia as funcionalidades de thread é chamado threading, e deve ser importado no começo do seu programa: from threading import Thread.')
print('\n')
print('Segue um exemplo básico, de uma classe chamada Th que implementa Thread e o método run(). O Conteudo do método run será executado em uma thread separada sempre que o método start, definido na classe Thread e herdada pela classe Th no nosso exemplo, for chamado:')
print('\n')


class Th(Thread):
    def __init__(self, num):
        Thread.__init__(self)
        self.num = num

    def run(self):
        print("Hello")
        print(self.num)


a = Th(1)
a.start()
