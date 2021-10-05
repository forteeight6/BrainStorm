# Leitura de Dados do Teclado

# Em python, para ler dados digitados pelo usuário durante a execução do programa, utilizamos a função input() (literalmente entrada, em inglês). O exemplo abaixo ilustra o uso dessa função:

import sys
print("Digite seu nome:")
nome = input()
print("Bem-vindo, ", nome)

# Um detalhe importante a ser lembrado é que a função input() sempre lê strings. Por isso, caso você deseje ler um número, deverá converter o dado retornado por essa função para o formato numérico apropriado.

# Outra opção (mais eficiente) para leitura de dados é usar a função readline(). Suponha que queiramos ler dois números inteiros, representando a idade e o peso (arredondado) de uma pessoa. #Um exemplo desse tipo de dado seria o seguinte:

# 45 70

# Para ler esses dois valores (como inteiros) em Python, podemos fazer o seguinte:


idade, peso = map(int, sys.stdin.readline().split())

# Esse tipo de leitura de dados é bastante útil quando estamos lidando com dados que obedecem um formato específico. No código acima, o que fazemos é mapear cada um dos elementos lidos para o tipo int.
