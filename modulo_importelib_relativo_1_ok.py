# fonte: https://stackoverflow.com/questions/10675054/how-to-import-a-module-in-python-with-importlib-import-module
import importlib as il

obj = il.import_module('.modulo', 'modulos.b.a.c')

obj.text()
