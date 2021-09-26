# Controle do Fluxo de Execução

# Nem adianta executar pois o codigo esta indentado erradicamente. Ps: Mostrando como o Python se comporta com identação

# Condicionais

condicao = False

if condicao == True:
    print("A condicao é verdadeira.")
else:
    print("A condicao é falsa.")

# Note que fazer if condicao == True é equivalente a fazer if condicao, mas a segunda forma é mais usada. Talvez por ser mais sucinta, algumas pessoas costumam dizer que é um jeito mais "pythonico" de se escrever o código. Acostume-se com isso, pois você verá muito código escrito desse jeito. Vejamos um exemplo de como seria o código acima escrito dessa forma mais "pythonica":

condicao = False

if condicao:
    print("A condicao é verdadeira.")
else:
    print("A condicao é falsa.")

# Condicionais também podem ser usados em cadeia (um após o outro), como mostrado abaixo:

condicao_1 = False
condicao_2 = False

if condicao_1:
    print("A condicao_1 é verdadeira.")
elif condicao_2:
    print("A condicao_2 é verdadeira.")
else:
    print("As condições condicao_1 e condicao_2 são falsas.")

# Pelos exemplos acima, vimos que blocos de código em Python são delimitados pelo nível de indentação deles. Os comandos print estão alinhados mais à direita no exemplo acima, e isso não é por acaso. Isso é chamado de indentação (o correto é indentação mesmo, e não "identação") e ela serve para delimitar blocos de código.

# Em linguagens como C e Java, blocos de código são delimitados por {}, e a indentação do código é simplesmente uma boa prática de programação, mas não é necessária para o correto funcionamento dos programas. Até mesmo linguagens de marcação usam certos delimitadores para blocos de código. Em HTML, por exemplo, blocos de código são delimitados por <…​>.

# É importante enfatizar isso: em Python, blocos de código são delimitados por sua indentação. E a indentação é parte integrante do programa, sendo essencial para seu correto funcionamento.

# Má indentação!
if sentenca_1:
    if sentenca_2:
        # A linha abaixo não está indentada corretamente.
    print("Ambas sentenças são verdadeiras.")

s = True

if s:
    print("Impresso se s for verdadeiro.")

    print("Ainda dentro do if. Note a indentação.")


if s:
    print("Impresso se s for verdadeiro.")

print("Agora fora do if. Note a indentação.")
