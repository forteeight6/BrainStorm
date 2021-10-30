import os
import sys
# Brainstorm os, sys, open, map
"""
comando, diretorio, novo_comando = map(str, sys.stdin.readline().split())
arquivo = open('lista_de_comandos.txt', 'a')
arquivo.write(f'\n{comando} {diretorio} - {novo_comando}\n')
arquivo.write('\n')
arquivo.close()
"""

arquivo = open('lista_de_comandos.txt', 'r')
comando = "ython terminal.py - skull"
for linha in arquivo.readlines():
