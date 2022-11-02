#Leer números indefinidamente hasta que se introduzca el 99, al final mostrar todos los números diferentes que se han leído. 
numero="1"
numeros = set()
while numero != "99":
    numero = input("Introduce un número: ")
    numeros.add(numero)


print(numeros)  