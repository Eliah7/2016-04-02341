<?php
session_start();

$fname = $_SESSION['fname'];

$con = mysqli_connect("localhost", "root", "", "Registration form");
$query = "SELECT * FROM `Registration form` WHERE `First Name`='$fname'";
$query_data = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($query_data, MYSQLI_ASSOC)) {

    $first_name = $row['First Name'];
    $last_name = $row['Last Name'];
    $age = $row['Age'];
    //$email = $row['email'];
    //$password = $row['password'];
    //$gender = $row['gender'];
    //$date = $row['date'];
    //$status = $row['status'];
    
}
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>FORM</title>

            <style>
                body{
                    background-color: darkgoldenrod;

                }
                form{

                }
                .container{
                    width: 500px;
                    clear: right;
                    padding-left: 250px;
                    border-radius: 9px;
                }
                .container input{
                    width: 200px;
                }
                .container label{
                    display: inline-block;
                    width:100px;
                    text-align: left;
                }

                .gender{
                    padding-left: 300px;
                    border-radius: 9px;
                    display: inline-block;

                }

                .checkbox{
                    padding-top: 10px;
                    padding-left: 220px;
                    display: inline-block;
                }

                h1{
                    border-radius: 9px;

                }

                p{
                    padding-left: 340px;
                }

                .birthday{
                    padding-top: 10px;
                    padding-left: 250px;
                    display: inline-block;

                    border-radius: 9px;
                }
                .submit{
                    padding-top: 10px;
                    padding-left: 300px;
                    display: inline-block;

                }

                .reset{
                    padding-top: 10px;
                    padding-left: 310px;
                    display: inline-block;

                }


            </style>
        </head>
        <body>

            <h1 align="center"><u>Edit Profile</u></h1>

            <form method="post" action="update.php" autocomplete="on" >
                <div class="container">
                    <label>First name:</label>
                    <input type="text"
                           placeholder="fname" value="<?php echo $first_name; ?>" name="fname" pattern="[a-zA-Z]{1,20}" required="" title="Use only letters and it should be less than 20 characters"/>
                    <br><br>
                    <label>Last name:</label>  
                    <input type="text"
                           placeholder="sname" value="<?php echo $last_name; ?>" name="lname" pattern="[a-zA-Z]{1,20}" required="" title="Use only letters and it should be less than 20 characters"/>
                    <br><br>

                    <label>Age:</label>
                    <input type="number"
                           min ="18"
                           required=""
                           max ="100"
                           step="1"
                           name="age" value="<?php echo $age; ?>" />
                    <br><br>
                    <label>E-mail:</label>
                    <input type="email" required=""
                           placeholder="name@domain.com" value="<?php echo $email; ?>" name="email" title="Enter a valid email address"/><br>
                    <br>
                    <label>Password:</label>
                    <input type="password" required=""
                           placeholder="Atleast 8 characters" value="<?php echo $password; ?>" name="password" pattern="{8,25}" title="Your password should contain 8 to 25 characters"/>
                    <br><br>
                </div>


                <div class="gender">
                    <br>
                    <label>SEX :  </label>

                    <select name="sex" required="" value="" >
                        <option><?php
                            if ($gender == 'male') {
                                $gender1 = 'Male';
                                $gender2 = 'Female';
                            } else {
                                $gender1 = 'Female';
                                $gender2 = 'Male';
                            }
                            echo $gender1;
                            ?></option>
                        <option><?php echo $gender2; ?></option>
                    </select>

                </div><br>
                <div class="checkbox">
                    <label>Status :</label>
                    <select name="status" required="" >
                        <option><?php
                            if ($status == 'student') {
                                $status1 = 'I am a student.';
                                $status2 = 'I am a business man';
                            } else {
                                $status1 = 'I am a business man';
                                $status2 = 'I am a student';
                            }
                            echo $status1;
                            ?></option>
                        <option><?php echo $status2; ?></option>
                    </select>

                    <br><br>

                </div>
                <p>Birthday :</p>
                <div class="birthday">

                    <label>Date (dd-mm-yyyy):</label>
                    <input type="text" required=""
                           placeholder="dd-mm-yyyy" value="<?php echo $date;?>" name="date" step="10" title="Enter a valid format"/>


                    <div class="submit">
                        Submit : <input type="submit" name="submit" value="Update"  />

                    </div>
                    <br>
                    <div class="reset">
                        Reset : <input type="reset" name="Reset" value="Reset" />
                    </div>

            </form>
            
        
    </body>
</html>
