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
    <p class="tutorial-header"> Tutorial 2</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <p> <strong>  Copying Files </strong></p>
            <p> %cp (copy) </p>
            
            <p>-%cp file1 file2 is the command which makes a copy of file1 in the current working directory and calls it file2</p>

          
            
            <p>
            Ex: <br>
            % cp /home/SAMPLES/example.txt .
            </p>
        </div>

        <div class="grid-color">
            <p> <strong> Moving Files and directory </strong></p>
            <p> rm (remove), rmdir (remove directory) </p>

            <p> -To delete (remove) a file, use the rm command. As an example, we are going to create a copy of the science.txt file then delete it.</p>

            

            <p> 
            Ex: <br>
            % rm example.txt
            </p>
        </div>

        <div class="grid-color">
            <p> <strong> Displaying the contents of a file on the screen </strong></p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
                Clear screen
            </label>

            <p> %clear</p>

            </p>

            <p> - Clear all text and leave you with the '%' prompt at the top of window</p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
                Cat (concatenate)
            </label>
            
            <p> %cat example.txt</p>

            </p>

            <p>- The command cat can be used to display the contents of a file on the screen</p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
                Less
            </label>
            
            <p> %less example.txt</p>

            </p>

            <p> - The command less writes the contents of a file onto the screen a page at a time</p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
                Head
            </label>
            
            <p> %head -5 example.txt</p>

            </p>

            <p> - The head command writes the first ten lines of a file to the screen</p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
               Tail
            </label>

            <p> %tail 10 example.txt</p>

            </p>

            <p> - The tail command writes the last ten lines of a file to the screen</p>


        </div>

        <div class="grid-color">
            <p> <strong> Searching the contents of a file </strong></p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
                Search using less
            </label>

            <p> %less example.txt</p>

            </p>

            <p> - You can search through a text file for a keyword (pattern)</p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
                Grep
            </label>

            <p> %grep -i science example.txt</p>

            </p>

            <p> - To ignore uppler/lower case distinctions</p>

            <p> %grep -i science example.txt</p>

            <p> %grep -ivc science example.txt</p>
            <p> -v display those lines that do NOT match</p>
            <p> -n precede each matching line with the line number</p>
            <p> -c print only the total count of matched lines</p>

            <p> 

            <label>
            <input type="radio" name="option1" id="option1" value="option1">
                Word count
            </label>

            <p> %wc -w example.txt</p>

            </p>

            <p> - To do a word count</p>

            <p> %wc -l science.txt</p>


            <p> - To find out how many lines the file has</p>


        </div>
    </div>
</div>



<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
?>
