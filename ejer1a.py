#Leer números indefinidamente siempre que el número sea múltiplo del anterior. 

anterior=1
numero=int(input("Introduce un número: "))

while numero % anterior == 0:
    anterior = numero
    numero=int(input("Introduce un número: "))  

print("El número", numero, "no es múltiplo del anterior")