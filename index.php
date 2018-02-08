<!--
Name: Manjit Gurcha
Class: CST336 - Internet Programming
Abstract: Creates a webpage that describes the topic "Prograaming Languages"
-->

<!DOCTYPE html>
<html>

<!-- The head of the file-->
    <head>
       <meta charset='UTF-8'/>
       <title>Programming Languages</title>
       <link href="css/styles.css" rel="stylesheet" type="text/css"/>
       <link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet"> 
       <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <body>
        <header>
            <h1> Programming Languages </h1>
        </header>
        <nav>
            <hr style="width:50%;"/>
            <a href="index.php"><span class="name">Home</span></a>
            <a href="c++.html">C++</a>
            <a href="java.html">Java</a>
            <a href="python.html">Python</a>
        </nav>
        <main>
            <figure class="img">
                <img src = "img/Prog-languages.png" alt="Programming Languages"/>
                <figcaption>An image of the various progamming languages.</figcaption>
            </figure>
            <div class="welcomeText">
                <p>
                   Computer programming languages are a means to give instruction to a computer in a language that it understands 
                   in order to perform certain tasks. The computer can understand instructions in binary and the process of 
                   translating the function into binary language is known as compiling. 
                   
                   There are numerous programming languages all over the world and they each have their
                   own distinct features. 
                </p>
            
                <p>
                   However, there are three that are very widely used: 
                </p>
                    
                <ul>
                    <li><span class="list">C++</span></li>
                    <li><span class="list">Java</span> </li>
                    <li><span class="list">Python</span></li>
                </ul>
                
                <p>
                    All three of the languages listed above are all object-oriented programming languages, or OOP for short. This means that the programs are written on the 
                    basis of objects. An object in the program of those languages is a collection of data and functions.
                </p>
                <p>
                    <strong>If you want to learn more about each language, go ahead and click on any of them in the navigation bar above!</strong>
                </p>
                
               
            </div>
        </main>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST336. 2018 &copy; Gurcha <br />
            <img src = "img/csumb.jpg" alt="CSUMB Logo"/>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>