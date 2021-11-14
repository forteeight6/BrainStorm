class SearchPattern:
    def __init__(self, pattern, lista):
        self.pattern = pattern
        self.lista = lista

    def run(self):
        padrao = []
        count = 1
        for item in self.lista:
            if item in self.pattern:
                padrao.append(item)
                if count == 4:
                    print("Padrão encontrado:", padrao)
                count += 1
            else:
                padrao.clear()
                count = 1


grafico_padrao = [1, 2, 1, 2]
grafico_teste = [1, 2, 1, 2, 4, 8, 16, 32, 1, 2, 1, 2, 1, 2]

teste = SearchPattern(grafico_padrao, grafico_teste)
teste.run()
