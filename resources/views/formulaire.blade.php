<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <center>
            <div style="background:#AED6F1; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Remplir le formulaire</h1>
            </div>
            <br>
            <form style="border: 5px solid #AED6F1;width:50%; background-color:#AED6F1" method="POST" action="/formulaire">
                <div style="background-color: white; width:50%">
                @csrf
                <label for="">Nom</label><br>
                <input type="text" required name="nom" placeholder="Nom"><br><br>
                <label for="">Prenom</label><br>
                <input type="text" required name="prenom" placeholder="Prenom"><br><br>
                <label for="">age</label><br>
                <input type="text" required name="age" placeholder="Age"><br><br>
                <label for="">Email</label><br>
                <input type="email" required name="email" placeholder="Email"><br><br>
                <label for="">Niveau Etude</label><br>

            
                <input type="text" required name="niveauEtude" placeholder="Niveau Etude"><br><br>
                <select name="sexe" id="" placeholder="sexe">sexe
                    <option value="masculin">masculin</option>
                    <option value="feminin">feminin</option>
                </select>
                <input type="number" name="formations"  {{ $formation['id'] }} hidden>
                
            </div>
            <br><br>
            <div>

                <input type="submit" name="" value="Enregistrer"><br>
            </div>
                   
            </form>

        </center>
        
       
    </body>
</html>