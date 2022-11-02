f = open('texto.txt','w',encoding='utf-8')
frase=input("Dime una puta frase: ")
veces=int(input("cuantas veces lo quires escribir: "))
for i in range(veces):
    f.write(str(i+1)+" "+frase+"\n")
f.close()

