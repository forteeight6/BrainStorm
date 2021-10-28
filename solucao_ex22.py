nome_completo = str(input("Qual é o seu nome completo? "))

print("Invertendo Caixa alta para Caixa Baixa:", nome_completo.swapcase())

print("Reinvertendo Caixa Baixa para Caixa alta:",
      nome_completo.swapcase().swapcase())

print("Transformando tudo em caixa alta: ", nome_completo.upper())

print("Tranformando tudo em caixa baixa:", nome_completo.lower())

print("Ao todo o nome tem ", len(nome_completo) -
      nome_completo.count(' '), "letras.")

print("Seu primeiro nome tem", len(nome_completo.split()[0]), "letras.")
