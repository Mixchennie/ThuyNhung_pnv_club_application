<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="result.php" method="post">
        <h1>PNV Club application!</h1>
        <label for="name">Name</label>
        <input type="text" name="name"><br>


        <label for="">Club you want to apply</label>
        <select name="club">
            <option value="Robotic club">Robotic club</option>
            <option value="English club">English club</option>
            <option value="Singer club">Singer club</option>
        </select><br>

        <label for="">Be time for you</label>
        <div name="times" class="row">
            <div class="col">
                <div><input type="radio" value="Saturday mornings"  name="time">Saturday mornings</div>
                <div><input type="radio" value="Saturday afternooons" name="time">Saturday afternooons</div>
                <div><input type="radio" value="Sunday afternooons" name="time">Sunday afternooons <br></div>
            </div>
        </div>

        <label for="">Yours skills</label>
        <div class=checkbox-grid name="skills">
            <div class="checkbox-grid-child1">
                <div><input type="checkbox" value="the best coder" name="skill[]">the best coder</div>
                <div><input type="checkbox" value="good in arts" name="skill[]">good in arts</div>
                <div><input type="checkbox" value="a super star" name="skill[]">a super star</div>
                <div><input type="checkbox" value="a crazy dancer" name="skill[]">a crazy dancer</div>
                <div><input type="checkbox" value="singer" name="skill[]">singer</div>
                <div><input type="checkbox" value="good in design" name="skill[]">good in design</div>
                <div><input type="checkbox" value="the best eater" name="skill[]">the best eater</div>
                <div><input type="checkbox" value="good in speeches" name="skill[]">good in speeches <br></div>
            </div>
        </div>
        <input type="submit" value="SUBMIT!" name="submit">

    </form>
</body>
</html>
