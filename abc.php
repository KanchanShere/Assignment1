<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.0.min.js"></script>
    
    <script>
    $(function(){
        $('.friend').change(function(){
               $('.div1').val($(this).val());
               
            });
                });
               
    </script>
</head>
<body>
    <form method="post"action="next.php">
  How many good friends do you have?<select class="friend">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select>
    
<input type="textbox"class="div1"name="name">
<input type="submit"name="submit"value="save friends list"class="sub">
    </form>

</body>
</html>
