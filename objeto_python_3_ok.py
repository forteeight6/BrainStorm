# Dados de Instância versus Dados de Classe

# Frequentemente, quando criamos hierarquias de classe (classes que herdam de outras classes), existem dados que são específicos de cada objeto de uma classe, mas podem existir dados que sejam comuns a todos os objetos de uma determinada classe ou até mesmo de todas as classes em uma hierarquia. Dados específicos de cada objeto são chamados dados do nível da instância (ou instance-level data, do inglês), ao passo que dados comuns a todos os objetos de uma classe ou hierarquia são chamados dados do nível da classe (ou class-level data, do inglês).

# Retomando nosso exemplo de classes para representar formas geométricas, podemos ter uma classe base chamada FormaGeometrica, mostrada no exemplo abaixo, da qual outras formas geométricas irão herdar.

class FormaGeometrica():
    def desenha(self):
        pass

# Após isso, desejamos criar uma classe Circulo, que também é uma forma geométrica, e portanto herda de FormaGeometrica. Entretanto, existe uma informação que é compartilhada por todos os objetos da classe Circulo: o valor da constante Pi, usado para calcular a área e o perímetro de um círculo. Esta é uma informação do nível da classe. Esse tipo de informação é armazenado de forma diferente de informações do nível da instância, como mostrado no exemplo abaixo.


class Circulo(FormaGeometrica):
    PI = 3.14159

    def __init__(self, r):
        self.raio = r

    def desenha(self):
        pass

    def area(self):
        return Circulo.PI * (self.raio ** 2)

# Note a constante PI é declarada no escopo da classe, ou seja, fora da função init, onde variáveis do nível da instância são inicializadas.

# Note o uso Circulo.PI e não self.PI para indicar o uso de uma variável do nível da classe.

# Agora que adquirimos um entendimento de como herança funciona, vamos partir para outro importante conceito em OOP, o conceito de encapsulamento.
