class Circulo:
    def __init__(self, r):
        self.raio = r

    def desenha(self):
        pass

    def imprime(self):
        print("Círculo de raio {}". format(self.raio))


obj_circulo = Circulo(3)
obj_circulo.imprime()

# Agora que já entendemos os conceitos básicos de OOP em Python, podemos avançar para conceitos mais complexos e refinados. Nas próximas seções, cobriremos três conceitos que são princípios-chave em OOP:

# Herança: como estender a funcionalidade de classes existentes.

# Encapsulamento: como criar classes de modo a esconder certos tipos de informação e expor somente aquilo que é essencial para o uso da classe.

# Polimorfismo: como criar classes com uma interface unificada, classes que se comportam como as classes já existentes em Python.
