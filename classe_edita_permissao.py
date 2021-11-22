class rota:
    def __init__(self, arquivo) -> None:
        self.arquivo = arquivo

    def bloquear(self):
        with open(self.arquivo, 'w') as file:
            file.write('Bloqueado')

    def desbloquear(self):
        with open(self.arquivo, 'w') as file:
            file.write('Desbloqueado')

    def show(self):
        with open(self.arquivo, 'r') as file:
            dados = file.read()
        print(dados)
