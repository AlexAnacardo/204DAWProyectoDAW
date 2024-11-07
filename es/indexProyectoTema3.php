<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Alex Asensio Sanchez</title>          
        <meta name="author" content="Alex Asensio Sanchez">
        <meta name="application-name" content="indice">
        <meta name="description" content="Indice de Alex">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!--<link rel="stylesheet" href="webroot/css/index.css">-->
        <style>
            /*General*/

*{
    margin: 0;
    padding: 0;
}
html{
    height: 100%;
}

/*Encabezado*/

h1{
    text-align: center;
    font-size: 500%;
    background-color: rgb(216, 199, 224);
    color: rgb(16, 9, 114);  
    padding: 2% 1%;                 
}

/*body*/

body{                              
    display: flex;
    flex-direction: column;
    
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;                
    height: 100%;            
}
main{
    display: flex;
    margin: 3% auto;
    height: 100%;
    align-items: center;    
    
        
    width: 100%;
}
ul{                
    width: 100%;         
    height: 100%;   
    margin:0;
    padding:0;
    text-align: center;                
    list-style: none; 
    
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    
    justify-content: center;
    align-items: center;
}
li{
    font-size: 150%; 
    width: 30%;
    
    background-color: rgba(157, 139, 167, 0.3);
    margin: 2% auto;
    padding: 1%;
    border-radius: 5px;
}

li:nth-child(1),li:nth-child(3),li:nth-child(7){
    padding: 1.8% 1%;
}

li:nth-child(9){
    background-color: white;
}

li:hover{
    transform: scale(1.07);                
}

a{
    text-decoration: none;
    color: black;
    text-align: center;    
}

/*footer*/

footer{
    display: flex;
    flex-direction: row;                 
    justify-content: center;
    background-color: rgb(216, 199, 224);
    font-size: 140%;  
    
}
footer a{
    color: rgb(16, 9, 114);  
    font-weight: bold;
}
p{
    text-align: center;                
    width: fit-content;   
    margin: 2% 1.5%;                          
}
p:hover{
    transform: scale(1.3);                
}
        </style>
    </head>
    <body>
        <header>
            <h1>Despliegue de aplicaciones web</h1>
        </header>
        <main>
               
        </main>
        <footer>
            <p><a href="../index.html">Alex Asensio Sanchez</a></p>
            <p><a target="blank" href="doc/Curriculum.pdf">Curriculum</a></p>
            <p><a target="blank" href="https://github.com/AlexAnacardo/204DAWProyectoDAW/tree/developer">GitHub del repositorio</a></p>
        </footer>
    </body>
</html>