<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <h2>Buat Account Baru!</h1>
    <h4>Sign Up Form</h3>
    <form action="/Welcome" >
        <label >First name:</label><br>
        <input type="text" name="nama_depan"><br><br>
        <label >Last name:</label><br>
        <input type="text" name="nama_belakang"><br><br>
        <label>Gender :</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label>Nationality :</label>
        <select name="" id="">
            <option value="volvo">Indonesian</option>
            <option value="saab">Singaporean</option>
            <option value="mercedes">Malaysian</option>
            <option value="audi">Singaporean</option>
        </select><br><br>
        <label for="">Language Spoken : </label><br>
        <input type="checkbox" id="bahasa1" name="bahasa1" value="indonesia">
        <label for="vehicle1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="bahasa2" name="bahasa2" value="inggris">
        <label for="vehicle2"> English</label><br>
        <input type="checkbox" id="bahasa3" name="bahasa3" value="other">
        <label for="vehicle3"> Others</label><br><br>
        <label >Bio :</label><br>
        <textarea rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>