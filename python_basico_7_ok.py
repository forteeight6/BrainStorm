# Laços while
# Além dos laços for, Python conta também com os laços while, que executam enquanto uma dada condição for verdadeira:

i = 1
while i < 5:
    print(i)
    i = i + 1

# Um exemplo útil de uso de laços while é o cálculo do fatorial de um número:

n = 6
fatorial = 1
while n > 1:
    fatorial *= n
    n -= 1
print(fatorial)

# Equivalente a fatorial = fatorial * n
# Equivalente a n = n - 1

# Esta seção cobriu aspectos importantes de lógica de programação. Na próxima seção, aprenderemos a criar funções e praticaremos os conceitos de controle de fluxo de execução que acabamos de aprender.
