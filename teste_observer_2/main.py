from publicador import Publicador
from obj import objeto

numero = int(input('Digite um numero: '))

Publicador = Publicador()
Objeto = objeto(numero)

Publicador.addListenner(Objeto)

Publicador.Atualizar()
print(Objeto.atributo)
print(Objeto.Multiplicacao())
