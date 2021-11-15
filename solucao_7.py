class Comparador:
    def __init__(self, lista, pattern):
        cont = 0
        cont2 = 0

        with open('indices.txt', 'a') as file:
            while True:
                status = lista[cont] == pattern[cont2]

                if status:
                    status = 1
                else:
                    status = 0

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

                    if lista[cont] == pattern[cont2]:
                        cont2 += 1

                    cont += 1


class SearchPattern(Comparador):
    def __init__(self, lista, pattern):
        super().__init__(lista, pattern)

        provisorio = []
        contador = 0
        with open('indices.txt', 'r') as file:
            for linha in file:
                linha = linha.replace(',', '')
                linha = linha.replace(')', '')
                linha = linha.split()
                teste = int(linha[-1]) == 1
                if teste:
                    provisorio.append([int(linha[0]), int(linha[1]),
                                       int(linha[3]), int(linha[-1])])
                    contador += 1
                else:
                    if contador >= 3:
                        with open('padroes_identificados.txt', 'a') as arquivo:
                            arquivo.write(str(provisorio))
                            arquivo.write(',')
                            arquivo.write('\n')

                        provisorio.clear()
                        contador = 0
                    else:
                        provisorio.clear()
                        contador = 0


lista = [1, 2, 3, 4, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 4, 8]

pattern = [1, 2, 3, 4]

teste = SearchPattern(lista, pattern)
