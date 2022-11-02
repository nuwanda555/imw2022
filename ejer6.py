#Leer números positivos indefinidamente siempre que el último número leído sea mayor que los leídos anteriormente.

anterior=-1    
numero=0    #número que voy leyendo
while numero>anterior:
    anterior=numero
    numero=int(input("Introduce un número: "))

print("Se acabó")



