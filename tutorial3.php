<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/header.php';
?>
<body class="body-tutorial2">
<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/nav.php';
?>



<div>
    <br>
    <br>
    <br>
    <p class="tutorial-header"> Tutorial 3</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <p> <strong>  Redirection </strong></p>
            <p> %cat </p>
            
            <p>-If you run the cat command without specifying a file to read, it reads the standard input (the keyboard), and on receiving the 'end of file' (^D), copies it to the standard output (the screen)</p>

            <p> <strong>  Redirecting the output </strong></p>
            <p> %cat > list1</p>
            <p> 'd' to stop</p>
            <p> %cat list1</p>
            
            <p>-Use the '>' symbol to redirect the output of a command. To create a file called list1 containing a list of stuff</p>

            <p> <strong>  Appedning to a file </strong></p>
            <p> %cat >> list1</p>
            
            <p>-The form '>>' appends standard output to a file. You can add more items in list1</p>
        </div>

        <div class="grid-color">
            <p> <strong> Redirecting the input </strong></p>
            <p> %sort </p>

            <p> -The command sort alphabetically or numerically sorts a list</p>

            <p> %sort < list1 </p>

            <p> -Using '<' can redirect the input to come from a file</p>

        
        </div>

        <div class="grid-color">
            <p> <strong> Pipes</strong></p>

            <p> 

            <p> %who</p>

            </p>

            <p> - To see who is on the system with you</p>

            <p> 

            
            
            <p> %who > names.txt</p>

            </p>

            <p>- method to get a sorted list of names</p>

            <p> 

            
            
            <p> %who | wc- |</p>

            </p>

            <p> - To find out how many users are logged on</p>

            <p> 

            

        </div>

        


        </div>
    </div>


    <a href="tutorial.php" class="unixbutton"> Unix tutorials content</a>
</div>



<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
?>
