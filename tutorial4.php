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
    <p class="tutorial-header"> Tutorial 4</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <p> <strong>  The * wildcard</strong></p>
            <p class="para"> %ls list* </p>
            
            <p>-This will list all files in the current directory with <span class="para"> 'list....' </span></p>

            <p class="para"> %ls *list </p>
            
            <p>-This will list all files in the current directory ending with <span class="para"> '...list'</span></p>

            <p> <strong>  The ? wildcard</strong></p>
            <p class="para"> %ls ?list </p>
            
            <p>-The character '?' will match exactly one character <br> So ?ouse will match files like 'house','mouse', but not 'grouse'</p>
        </div>

        <div class="grid-color">
            <p> <strong> Filename conventions </strong></p>
            <p> Naming files can not use '/' , '&' , '%' </p>

            <div class="tutorial4grid">
                <div class="one">
                    <strong>Good filenames </strong>
                </div>

                <div class="one">
                  <strong>Bad filenames</strong>
                </div>

                <div class="para">
                  project.txt
                </div>

                <div class="para">
                  project
                </div>

                <div class="para">
                  my_big_program.c
                </div>

                <div class="para">
                  my big program.c
                </div>

                <div class="para">
                  fred_dave.doc
                </div>

                <div class="para">
                  fred & dave.doc
                </div>
            </div>

        
        </div>

        <div class="grid-color">
            <p> <strong> On-line Manuals</strong></p>

            <p> 

            <p class="para"> %man wc</p>

            </p>

            <p> - Find out more about the wc (wordcount) command</p>

            <p> 

            
            
            <p class="para"> %whatis wc</p>

            </p>

            <p>- Gives one-line description of the command, but omits any information about options etc.</p>

            <p> 

            
            
            <p> <strong> Apropos</strong></p>

            

            <p class="para"> %apropos keyword</p>

            

            <p> - When you are not sure of the exact name of a command</p>

            <p class="para"> %apropos copy</p>

            

            <p> - Will give you the commands with keyword in their manual page header.</p>



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
