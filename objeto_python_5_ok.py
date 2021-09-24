# Polimorfismo

# Em OOP, o termo polimorfismo diz respeito ao uso de uma interface única para operar sobre objetos de classes distintas.

# Existem basicamente dois recursos para se implementar polimorfismo: herança e sobrecarga. A seguir aprenderemos como criar objetos polimorficos em Python usando cada um desses dois recursos.

# Herança e Polimorfismo
# Para implementar polimorfismo, é essencial que objetos de classes distintas implementem uma mesma interface. Para obter isso usando herança, podemos fazer o seguinte:

# Criar uma classe base com uma interface específica.

# Criar classes derivadas que implementam essa interface de formas diferentes.

# Vamos usar um exemplo para ilustrar este processo. Suponha que tenhamos uma classe Animal, cuja interface consiste de um único método, chamado locomove, que indica como o animal se move. # Podemos implementar essa classe como no exemplo abaixo:

class Animal:
    def __init__(self):
        pass

    def locomove(self):
        pass

# Agora, desejamos criar classes derivadas da classe Animal que implementam o método locomove de formas diferentes. Um modo de fazer isso é o mostrado no exemplo abaixo:


class Peixe(Animal):

    def locomove(self):
        print("Um peixe nada.")


class Elefante(Animal):

    def locomove(self):
        print("Um elefante anda.")


class Passaro(Animal):

    def locomove(self):
        print("Um pássaro voa.")

# Com isso, dependendo do tipo de animal com o qual estivermos lidando, o método locomove apresentará um comportamento diferente. Por exemplo, considere o código abaixo, no qual invocamos o método locomove para diferentes tipos de animais:


peixe = Peixe()
elefante = Elefante()
passaro = Passaro()

peixe.locomove()
elefante.locomove()
passaro.locomove()

# Note que, ao usar herança da forma mostrada acima, podemos implementar uma interface específica (o método locomove, por exemplo) usando objetos de classes distintas, ou seja, estamos implementando polimorfismo.

# A seguir, mostraremos como implementar polimorfismo usando sobrecarga de operadores.

# Sobrecarga de Operadores e Polimorfismo
# EM BREVE…​

# Rational
# Lista circular

# FONTE: https://algoritmosempython.com.br/cursos/programacao-python/polimorfismo/
