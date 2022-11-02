anterior="1"
numero=input("Introduce un número: ")
while len(numero) > len(anterior):
    anterior=numero
    numero=input("Introduce un número: ")

print("El número anterior es mayor que el actual")