"""
O manuseio de arquivos é uma parte importante de qualquer aplicativo da web.

Python tem várias funções para criar, ler, atualizar e excluir arquivos.

Manipulação de arquivos
A principal função para trabalhar com arquivos em Python é a open()função.

A open()função leva dois parâmetros; nome do arquivo e modo .

Existem quatro métodos (modos) diferentes para abrir um arquivo:

"r"- Ler - Valor padrão. Abre um arquivo para leitura, erro se o arquivo não existe

"a" - Anexar - abre um arquivo para anexar, cria o arquivo se ele não existir

"w" - Gravar - abre um arquivo para gravação, cria o arquivo se ele não existir

"x" - Criar - Cria o arquivo especificado, retorna um erro se o arquivo existir

Além disso, você pode especificar se o arquivo deve ser tratado como modo binário ou de texto

"t"- Texto - Valor padrão. Modo texto

"b" - Binário - Modo binário (por exemplo, imagens)

Sintaxe
Para abrir um arquivo para leitura, basta especificar o nome do arquivo:
"""

f = open("doc.txt")
# O código acima é igual a:

f = open("doc.txt", "rt")

"""
Como "r"para leitura e "t"para texto são os valores padrão, você não precisa especificá-los.

Nota: Certifique-se de que o arquivo existe, ou então você obterá um erro.
"""
