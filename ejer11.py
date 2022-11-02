#Crear un programa que muestre una combinación del euromillón: 5 números diferentes entre 1 y 50, y 2 números diferentes entre 1 y 12.
from random import randint #importo sólo la función randint

numeros=set()  #declaro un conjunto vacío
estrellas=set() #declaro un conjunto vacío
while (len(numeros)<5):     #mientras el conjunto no tenga 5 números
    numeros.add(randint(1,50))  

while (len(estrellas)<2):
    estrellas.add(randint(1,12))

print("numeros: ",numeros)
print("Estrellas: ",estrellas)