#Rellenar una lista con 200 números al azar entre 1 y 100, a continuación mostrar cual es el número que se repite más veces.

import random

l=[]
repetidos=dict()
for i in range(200):
    numero=random.randint(1,100)
    l.append(numero)
    repetidos[numero]=repetidos.get(numero,0)+1     #contamos las veces que aparece cada número

maxVeces=0;
numeroMasVeces=0;
for  numero, veces in repetidos.items():    #recorrer los items del diccionario, un item es (indice, valor)
    if (veces>maxVeces):
        maxVeces=veces
        numeroMasVeces=numero

print("el número que más veces se ha repetido es: ", numeroMasVeces," - ", maxVeces)

print(repetidos)
