

def crearTabla(palabra, fil,col):
    html="<table border='1'>\n";
    for f in range(fil):
        html=html+"<tr>\n"
        for c in range(col):
            html=html+"<td style='color:blue;'>"+palabra+"</td>\n"
        html=html+"</tr>\n"
    html=html+"</table>\n"
    return html
    
resultado=crearTabla("pepe", 200,200) 
f = open("prueba.html",'w',encoding='utf-8')    #crea el fichero prueba.html vacio, y si existe lo borra y lo crea vacio
f.write(resultado)
f.close()

#resultado=crearTabla("pepe", 20,20)
#print(resultado)
