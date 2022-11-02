#generar todos los números que acaban en 6  del 1 al 100

for numero in range (1, 100): #recorrer 100 numeros
    texto=str(numero)
    if texto[-1]=='6':
        print(numero,end="-")



    