#Leer una frase y mostrar cual es la letra que más veces se repite.
import random

#dada una frase y una letra devuelve cuantas veces esta letra en frase
def contar_letras(frase,letra):
    contador=0
    for l in frase:
        if l==letra:
            contador+=1
    return contador


#frase=input("Introduce una frase: ")
frase="mi mama me mima";
letras=set()
for l in frase:
    letras.add(l)

letras.discard(" ")
print(letras)



for l in letras:
    print(l,": ",contar_letras(frase,l))
