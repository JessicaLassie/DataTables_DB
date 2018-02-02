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
                $("#tableDesCommunes").DataTable({
                    'ajax': {
                        "type": "POST",
                        "url": "../controls/communeCTRL.php"
                    },
                    "columns": [
                        {"data": "nom_commune"},
                        {"data": "codepostal"},
                        {"data": "codeinsee"}
                    ]
                })
            });
        </script> 
    </body> 
</html> 

