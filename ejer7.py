#Rellenar una lista con 100 números al azar entre 1 y 1000000, a continuación mostrar cual es el número mayor.

import random #importa todo lo que hay en la librería/módulo random

lista=[]
for i in range(100):
    numero=random.randint(1,1000000)    #elegimos un número entero al azar entre 1 y 1000000
    lista.append(numero)
lista.sort()
print(lista)
print ("el mayor número es: ",max(lista))