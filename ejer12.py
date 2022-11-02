#Leer dos frases y mostrar cual es la frase que tiene más letras diferentes y cuantas letras diferentes tiene. Da igual que las letras estén en minúscula o mayúscula
#
frase1=input("Introduce una frase: ")
frase2=input("Introduce otra frase: ")
letras1=set()
letras2=set()
for l in frase1:    #recorro la frase1 y voy añadiendo las letras al conjunto letras1
    letras1.add(l.lower())  #añado la letra en minúscula
for l in frase2:
    letras2.add(l.lower())
    
letras1.discard(" ")  #quito los espacios en blanco
letras2.discard(" ")
print("La frase 1 tiene ",len(letras1)," letras diferentes")
print("La frase 2 tiene ",len(letras2)," letras diferentes")

if len(letras1)>len(letras2):
    print("La frase 1 tiene más letras diferentes")
elif len(letras1)<len(letras2):
    print("La frase 2 tiene más letras diferentes")
else:
    print("Las dos frases tienen el mismo número de letras diferentes")


