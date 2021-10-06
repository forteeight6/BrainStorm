# Leitura de Dados de Arquivos

# É possível também ler dados diretamente de um arquivo em Python. Por exemplo, considere que tenhamos um arquivo de texto chamado arquivo.txt em nosso computador (no mesmo diretório que nosso programa Python) com o seguinte conteúdo:

# Sujeito de sorte (Belchior):
# Presentemente eu posso me considerar um sujeito de sorte
# Porque apesar de muito moço me sinto são e salvo e forte
# E tenho comigo pensado Deus é brasileiro e anda do meu lado
# E assim já não posso sofrer no ano passado

# Agora desejamos ler e imprimir o conteúdo deste arquivo. Como podemos fazer isso? Uma opção é fazer como mostrado abaixo:

arquivo = open('doc.txt', 'r')
conteudo = arquivo.read()
print(conteudo)

# Usamos a função open() para abrir o arquivo chamado arquivo.txt. Além disso, passamos como argumento para a função open() o caminho do arquivo no nosso computador (como o arquivo estava no mesmo diretório do programa que o lê, passamos somente o nome do arquivo). Passamos também a opção r para a função open(), que indica que o arquivo deverá ser aberto para leitura (read, em inglês). Isso quer dizer que dentro do nosso programa, não poderemos escrever nada em arquivo.txt, somente ler.

# Usamos a função read() para ler o conteúdo do arquivo aberto e armazená-lo na variável conteudo.

# Um problema que pode acontecer é o arquivo de entrada ser muito grande (maior que a memória do computador). Nesse caso, seria necessário ler o arquivo aos poucos. Python nos permite fazer isso por meio da função readlines() ("lê linhas", em inglês), que, como o próprio nome indica, lê o arquivo uma linha de cada vez. Vejamos um exemplo:

arquivo = open('doc.txt', 'r')
for linha in arquivo.readlines():
    print(linha)

# Perceba que o resultado é quase que o mesmo do exemplo anterior, com a exceção que temos linhas em branco adicionais. Isso ocorre porque a função print() automaticamente insere quebras de linha depois de imprimir algo. Para suprimir este efeito, poderíamos ter invocado essa função como print(linha, end=''), que indicaria que uma string vazia (e não uma quebra de linha) deveria ser inserida ao final da impressão de cada linha do arquivo. Tirando isso, temos o mesmo resultado da função read() e com o benefício de ler o arquivo aos poucos, o que é vantajoso em caso de arquivos muito grandes.
