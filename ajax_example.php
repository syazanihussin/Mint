<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <script src="js/jquery-2.2.3.min.js"></script>
        <script>
            $(document).ready(function(){
 
                //read data from column 'userName, password, email, address' stored in table 'user'. 
                $(function(){
                    $.ajax({
                        url:"ajax/select.php",
                        dataType:"json",
                        type: "POST",
                        data: { table : 'customer', column : 'username, password, phoneNo, email'},
                        success:function(data){
                            $.each(data, function(index){
                                $("#names").append("<li>Username: "+data[index].username+"</li>")
                                $("#names").append("<li>Password: "+data[index].password+"</li>")
                                $("#names").append("<li>Email: "+data[index].phoneNo+"</li>")
                                $("#names").append("<li>Address: "+data[index].email+"</li>")
                            });
                        }
                    });
                });

                //update password stored in table 'user' where userID = 1. 
                $("#btn1").click(function(){
                    var newPassword = $("#newPassword").val();
                    
                    $.ajax({
                        url:"ajax/update.php",
                        dataType:"json",
                        type: "POST",
                        data: {table : 'user', updating : 'password = "' + newPassword + '"', where : 'userID = 4'},
                        success:function(data){
                            $("#updated").text("Your password has been updated successfully"+data);
                        }
                    });
                });
                
                //insert data into table 'user'. 
                $("#btn2").click(function(){

                    var userName = $("#userName").val();
                    var password = $("#password").val();
                    var email = $("#email").val();
                    var address = $("#address").val();
                    
                    $.ajax({
                        url:"ajax/insert.php",
                        dataType:"json",
                        type: "POST",
                        data: {table : 'user', column : 'userName, password, email, address', inserting : '"'+userName+'","'+password+'","'+email+'","'+address+'"'},
        			    success:function(data){
                            $("#inserted").text("Your data has been inserted successfully"+data);
                        }
                    });
                });

                //delete data stored in table 'user' where userID=1. 
                $("#btn3").click(function(){
                    $.ajax({
                        url:"ajax/delete.php",
                        dataType:"json",
                        type: "POST",
                        data: {table : 'user', where : 'userID=4'},
                        success:function(data){
                            $("#deleted").text("Your data has been deleted successfully"+data);
                        }
                    });
                });
            });

        </script>
    </head>
    
    <body>

        <h3>Read data from database</h3>
        <ul id="names"></ul>

        <h3 id="updated">Update passwordss</h3>
        <input type="text" id="newPassword">
        <button id="btn1">Update</button>

        <h3 id="inserted">Insert user</h3>
        <p>Username: </p><input type="text" id="userName">
        <p>Password: </p><input type="text" id="password">
        <p>Email: </p><input type="text" id="email">
        <p>Address: </p><input type="text" id="address">
        <button id="btn2">Insert</button>

        <h3 id="deleted">Delete user</h3>
        <button id="btn3">Delete</button>

    </body>
</html>
