# Exemplo de criação de tuplas.

tupla_vazia = ()  # Também é possível fazer: tupla_vazia = tuple()
print("Tupla vazia: ", tupla_vazia)

coordenada_xy = (10, 20)
print("Exemplo de tupla: ", coordenada_xy)

print("Tipo de uma tupla: ", type(coordenada_xy))

latlon_bh = (-19.8157, -43.9542)
print("Outro exemplo de criação de tupla: ", latlon_bh)

# Desempacotar uma Tupla.

x, y = coordenada_xy
print("x =", x)
print("y =", y)


# Como dissemos, tuplas não podem ser modificadas. Veja o que acontece quando tentamos modificar uma tupla:

coordenada_xy[0] = 15

# O qUE É UMA BIBLIOTECA EM PYTHON? É UM CONJUNTO DE MODULOS. ´
