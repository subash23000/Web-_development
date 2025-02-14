<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
     <!-- add your CSS , Java, and so on. -->

<style>
    header {
     display: flex;
     justify-content: space-around;
     align-items: center;
     padding: 5px;
     background-color: skyblue;
    }
    header nav {
    display: flex;
    justify-content: end;
    gap: 30px;
    list-style-type: none;
}
header nav a, footer div a{
    text-decoration: none;
    font-weight: bold;
    font-size: larger;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    margin: 20px;
    padding: 10px;
    background-size: cover;
}
main {
    background-color: wheat;
}
footer {
    display: flex;
    justify-content: space-around;
    padding: 10px;
    margin-top: 20px;
    font-size: 0.9rem;
    text-align: center;
    font-weight: bold;
    background-color: silver;



   
} 
footer div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px;
}


</style>
</head>
<body>
    <header>
        <!-- <h1>Subash Chhetri</h1> -->
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    
