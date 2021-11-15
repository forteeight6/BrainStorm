class Comparador:
    def __init__(self, lista, pattern):
        cont = 0
        cont2 = 0

        with open('indices.txt', 'a') as file:
            while True:
                status = lista[cont] == pattern[cont2]

                if cont == len(lista) - 1:
                    file.write(str(cont))
                    file.write(') ')

                    file.write(str(lista[cont]))
                    file.write(' = ')
                    file.write(str(pattern[cont2]))

                    file.write(', ')
                    file.write(str(status))

                    file.write('\n')
                    break
                elif cont2 == len(pattern) - 1:
                    file.write(str(cont))
                    file.write(') ')

                    file.write(str(lista[cont]))
                    file.write(' = ')
                    file.write(str(pattern[cont2]))

                    file.write(', ')
                    file.write(str(status))

                    file.write('\n')
                    cont2 = 0
                    cont += 1
                else:
                    file.write(str(cont))
                    file.write(') ')

                    file.write(str(lista[cont]))
                    file.write(' = ')
                    file.write(str(pattern[cont2]))

                    file.write(', ')
                    file.write(str(status))

                    file.write('\n')
                    cont2 += 1
                    cont += 1


lista = [1, 2, 3, 4, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 4, 8]

pattern = [1, 2, 3, 4]

teste = Comparador(lista, pattern)
