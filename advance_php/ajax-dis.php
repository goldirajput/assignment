<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>All Data Display</h2>
    <button id="action">ShowAllData</button>
    <table>
        <tr>
            <td id="mydata">

            </td>
        </tr>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
<script>
    $(document).ready(function(){
        $("#action").on("click",function(e){
           
            $.ajax({
                url: "backend.php",
                type:"POST",
                success:function(data){
                    $("#mydata").html(data);
                }
            })
        })
    })
</script>
</html>