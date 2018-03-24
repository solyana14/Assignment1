<html>
    <head>
        <title>Dictionary</title>
        <link rel="stylesheet" type="text/css" href="dictionary.css">
       <style type = "text/css">


body {
  background-color: #e8eff7; 
  font-family: arial;
  color: #363636;
  
}


h1 {
  text-align: center;
  
  color: black;
}

        th{
            border-bottom: 5px solid gray;
            background-color: pink;
            padding: 10px;
        }
        td{
            border-bottom: 2px solid gray;
            padding: 10px;
        }
        table{

           margin: 3% 0 0 35%;
            border: 2px solid grey;
            
        }
        .form{
         margin: 0 0 0 25%;
}
        
        </style>

        </head>
        <body>
        <h1> Dictionary</h1>
            <div>
            <form class ="form" action = "dictionary.php" method = "post">
                <label for="word">Word: </label>
                <input type="text" name="word" id="" required>
                <label for="description">Description: </label>
    
                <textarea name="description" rows="5" cols="50" required></textarea>
                <button name = "submit" >Save</button>
                </form>
            </div>
            <?php
    $db = mysqli_connect("localhost","root","","dictionary") or die("could not connect to database");
    $sqlget = "SELECT * FROM dictionary";
    $sqldata = mysqli_query($db,$sqlget) or die("error getting database");
    echo "<table>";
    echo "<tr>
    <th>Word</th>
    <th>Description</th><tr> ";

while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row["word"];
    echo "</td><td>";
    echo $row["description"];
   
}

echo "</table>";    
echo "successfull connectionjjjjjj";

            ?>

<?php
$db = mysqli_connect("localhost","root","","dictionary") or die("could nt connect to database");
if(isset($_POST['submit'])){
    session_start();
        $word = $_POST['word'];
        $description = $_POST['description'];
       
$sql = "insert into dictionary (word,description
)values('$word','$description')";
//echo "insertion successfull";
 mysqli_query($db,$sql);
} 
echo "successfull connection";
?>
            
            


            </body>
            </html>