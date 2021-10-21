import sys
# 45 70

# Para ler esses dois valores (como inteiros) em Python, podemos fazer o seguinte:

print('Digite a sua idade e peso. Exemplo: 23 69')
idade, peso = map(int, sys.stdin.readline().split())

# Esse tipo de leitura de dados é bastante útil quando estamos lidando com dados que obedecem um formato específico. No código acima, o que fazemos é mapear cada um dos elementos lidos para o tipo int.

print(f'Sua idade é {idade}')
print()
print(f'Seu peso é {peso}')
