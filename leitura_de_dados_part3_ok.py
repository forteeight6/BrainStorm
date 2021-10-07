# Redirecionamento de Entrada e Saída

# É possível ainda fazer com que um programa interprete dados vindos de um arquivos como se eles estivessem vindo do teclado. Para isso, é preciso usar o recurso de redirecionamento de entrada nos sistemas operacionais. Esse redirecionamento é feito no prompt de comandos (ou terminal, no Linux) por meio do operador <.

# Tanto no Windows quanto no Linux e no Mac OS, dado um arquivo de entrada entrada.txt e um programa prog.py, podemos fazer o programa interpretar o conteúdo desse arquivo como se estivesse vindo da entrada padrão (teclado) com o seguinte comando:

# prog.py < entrada.txt

# Analogamente, podemos redirecionar a saída de um programa Python para um arquivo. Para isso, basta usarmos o sinal de redirecionamento >. Por exemplo, para redirecionar a saída da execução de um programa prog.py para um arquivo saida.txt, basta executarmos:

# prog.py > saida.txt

# Podemos também fazer as duas coisas (ler de um arquivo e escrever em outro) simultâneamente:

# prog.py < entrada.txt > saida.txt

# É possível ainda ler a saída do seu programa no terminal e redirecioná-la para um arquivo ao mesmo tempo. Para isso, usamos a ferramenta de linha de comando chamada tee, como mostrado abaixo:

# prog.py < entrada.txt | tee saida.txt

# O utilitário tee está presente no Linux, mas não está presente no Windows, por padrão. Se você estiver usando Windows e quiser usar esse utilitário, precisará instalá-lo antes.
