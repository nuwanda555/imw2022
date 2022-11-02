#Leer números indefinidamente siempre que el número leído tenga más cifras que el anterior.

anterior="1"
numero=input("Introduce un número: ")
while len(numero) > len(anterior):
    anterior = numero
    numero=input("Introduce un número: ")