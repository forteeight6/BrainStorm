# Qual será o resultado da expressão abaixo?

print(True or False and not True)

# Vejamos como a expressão será avaliada, passo a passo:

# True or False and not True

# A parte not True será avaliada primeiro, pois o not possui maior precedência. Com isso, a expressão se torna True or False and False

# A parte False and False será avaliada primeiro (and é avaliado antes de or), que resulta em False. A expressão resultante neste momento é True or False.

# A expressão True or False resulta em True.

# Finalmente, o resultado da expressão é True
