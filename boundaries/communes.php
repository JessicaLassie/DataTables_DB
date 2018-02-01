<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <link rel="stylesheet" href="../lib/DataTables/css/jquery.dataTables.css"> 
        <title>Communes</title> 
    </head> 

    <body> 
        <table id="tableDesCommunes"> 
            <thead> 
                <tr> 
                    <th>Nom de la commune</th> 
                    <th>CP</th> 
                    <th>Code INSEE</th> 
                </tr> 
            </thead> 
            <tbody id="bodyTableDesCommunes"> 

            </tbody> 
        </table> 
        <script src="../lib/jquery/jquery.js"></script> 
        <script src="../lib/DataTables/js/jquery.dataTables.js"></script> 
        <script>
            $(document).ready(function() {
                var jqXHR = $.get(
                        "../controls/communeCTRL.php",
                        "json"
                        ); /// $.get 

                jqXHR.done(function(data) {
                    data = JSON.parse(data);
                    //console.log(data);
                    var lsVilles = "";
                    for (var i = 0; i < data.length; i++) {
                        lsVilles += "<tr>";
                        lsVilles += "<td>" + data[i].nom_commune + "</td><td>" + data[i].codepostal + "</td><td>" + data[i].codeinsee + "</td>";
                        lsVilles += "</tr>";
                    }
                    $("#bodyTableDesCommunes").html(lsVilles);
                });


                jqXHR.fail(function(xhr, statut, erreur) {
                    console.log("Erreur AJAX : " + xhr.status + "-" + xhr.statusText + " : " + statut);
                    $("#lblMessage").html(xhr.status + "-" + xhr.statusText);
                });

                $('#tableDesCommunes').dataTable({
                    language: {
                        "url": "../ressources/french.lang"
                    }
                });
            });
        </script> 
    </body> 
</html> 

