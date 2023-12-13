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
    <p class="tutorial-header"> Tutorial 6</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <p>Other userful UNIX commands </p>

            <p> <strong> quota</strong></p>
            <p> To check your current quota and how much of it you have used, type</p>
            <p class="para">%quota -v </p>

            
            
            <p> <strong> df</strong></p>
            <p> The df command reports on the space left on the file system. For example, to find out how much space is left on the fileserver, type</p>
            <p class="para">%df . </p>
            
            


            <p> <strong> du</strong></p>
            <p> The du command outputs the number of kilobyes used by each subdirectory. Useful if you have gone over quota and you want to find out which directory has the most files. In your home-directory, type</p>
            <p class="para">%du -s * </p>


            <p> <strong> gzip</strong></p>
            <p> This reduces the size of a file, thus freeing valuable disk space. For example, type</p>
            <p class="para">%ls -l science.txt </p>

            <p> and note the size of the file using ls -l . Then to compress science.txt, type</p>
            <p class="para">%gzip science.txt</p>

            <p> To expand the file, use the gunzip command.</p>
            <p class="para">%gunzip science.txt.gz</p>

            <p> <strong> zcat</strong></p>
            <p> file classifies the named files according to the type of data they contain, for example ascii (text), pictures, compressed data, etc.. To report on all files in your home directory, type</p>
            <p class="para">%file *</p>

            <p> <strong>diff</strong></p>
            <p> This command compares the contents of two files and displays the differences. Suppose you have a file called file1 and you edit some part of it and save it as file2. To see the differences type</p>
            <p class="para">%diff file1 file2 </p>

            <p> <strong>find</strong></p>
            <p> To search for all fies with the extention .txt, starting at the current directory (.) and working through all sub-directories, then printing the name of the file to the screen, type</p>
            <p class="para">%find .-name "*.txt" -print </p>

            <p> To find files over 1Mb in size, and display the result as a long listing, type</p>
            <p class="para">%find . -size +1M -ls </p>

            <p> <strong>history</strong></p>
            <p> The C shell keeps an ordered list of all the commands that you have entered. Each command is given a number according to the order it was entered.</p>
            <p class="para">%history (show command history list)</p>
            <p> If you are using the C shell, you can use the exclamation character (!) to recall commands easily.</p>
            <p class="para">%!! (recall last command)</p>
            <p class="para">%!-3 (recall third most recent command)</p>
            <p class="para">%!5 (recall 5th command in list)</p>
            <p class="para">%!grep (recall last command starting with grep)</p>

            <p> You can increase the size of the history buffer by typing</p>
            <p class="para">%set history=100</p>
        </div>
     
    </div>


    <a href="tutorial.php" class="unixbutton"> Unix tutorials content</a>
</div>



<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
?>
