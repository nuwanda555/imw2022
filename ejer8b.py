#Crear la función borrar(frase, palabra) que devuelve frase eliminando todas las veces que aparezca la palabra. 

def borrar(frase, palabra):
    frase=frase.replace(".","")
    frase=frase.replace(",","")
    frase=frase.replace(":","")
    frase=frase.replace(";","")

    palabras_en_frase=frase.split()
    resultado=[]
    for pal in palabras_en_frase:
        if pal != palabra:
            resultado.append(pal)
    
    return " ".join(resultado)

frase = "Hola, soy una gallina, y me gusta la palabra gallina. No seas gallina:"
palabra = "gallina"


print(borrar(frase, palabra))

