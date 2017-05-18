<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<style>
    body{
        background-color: blueviolet;

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
<body>
   

    <form method="POST" action="Form.php">
        <div class="container">
            <h1><u>Registration Form</u></h1>
    <label>First name:</label>
        <input name = "fname" id="fname" type="text" 
            placeholder="fname"/>
        <br><br>
    <label>Last name:</label>  
        <input name="sname" id="sname" type="text" 
            placeholder="sname"/>
        <br><br>

    <label>Age:</label>
        <input name = "age" type="number" id="age"
            min ="18"
            max ="100"
            step="1"
            value="18"/>
        <br><br>
    <label>E-mail:</label>
        <input id="email" type="email" 
            placeholder="name@domain.com"/><br>
        <br>
    <label>Password:</label>
        <input type="password"
        placeholder="*********"/>
        <br><br>
</div>


        <div class="gender">
            <br>
            <label>SEX::  </label>

    MALE:   <input type="radio" name="sex"/>
    FEMALE:  <input type="radio" name="sex"/><br><br>


</div>
        <br/><br>
        <div class="checkbox">
            <label>Checkbox:</label>
     <input  type="checkbox" name="check"/>I am a student:

    <input type="checkbox" name="check"/> I am a business man:<br><br>
            </div>

        <p>Birthday :</p>
        <div class="birthday">

    <label>Day:</label>

    <select>
        <option>1</option>
        <option>2</option>
    </select>
    <label>Month:</label>
    <select>
        <option>1</option>
        <option>2</option>
    </select>
    <label>Year:</label>
    <select>
        <option>1990</option>
        <option>1991</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
    </select><br><br>
          </div>
        <br/><br>
        <div class="submit">
            Submit Button: <input type="submit" name="submit"  />

        </div>
        <br/><br>
        <div class="reset">
            Reset Button: <input type="reset" name="Reset" />
        </div>

</form>
 

</body>
</html>