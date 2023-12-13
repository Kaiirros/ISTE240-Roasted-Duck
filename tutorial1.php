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
  <p class="tutorial-header"> Tutorial 1</p>
  <div class="tutorial2-grid">
    
    <div>
      <p class="container"> <span class="pspan para"> %ls </span></p>
      <p> 1: Listing files and directories</p>
      <p class="paracolor"> The '%ls' command (lowercase 'L'), lists the <br> contents of your current working directory.</p>
    </div>

    <div>
      <p class="container"> <span class="pspan para">  %ls -a </span></p>
      <p> 1: Listing files and directories</p>
      <p class="paracolor"> ls -a lists files that are normally hidden.</p>
    </div>

    <div>
      <p class="container container1"> <span class="pspan para"> %mkdir </span></p>
      <p> 2: Make directories</p>
      <p class="paracolor"> Use the mkdir command to create one or <br> more directories specified by the Directory parameter.</p>
    </div>

    <div>
      <p class="container container2"> <span class="pspan para"> %cd </span></p>
      <p> 3: change directories</p>
      <p class="paracolor"> The command cd directory means change the  <br> current working directory to another new directory.</p>
    </div>

    <div>
      <p class="container container3"> <span class="pspan para"> (.) <br> %cd . </span></p>
      <p> 4: Current directories</p>
      <p class="paracolor"> In UNIX, (.) means the current directory</p>
    </div>

    <div>
      <p class="container container3"> <span class="pspan para"> (..)  <br> %cd .. </span></p>
      <p> 4: Parent directories</p>
      <p class="paracolor"> (..) means the parent of the current directory</p>
    </div>

    <div>
      <p class="container container4"> <span class="pspan para"> %pwd </span></p>
      <p> 5: Print working directory</p>
      <p class="paracolor"> Pathnames enable you to work out where you are in relation to the whole file-system.  <br>
        Ex: /home/its/ug1/ee51vn</p>
    </div>
  </div>

  <div>
    <div>
      <p class="para6"> 6. home directories and pathnames</p>
      <div class="tutorial2-grid tutorial2-grid2">
        <div>
        <p class="container container5"><span class="pspan para">  %ls unixstuff </span></p>
          <p> 1: Type cd to get back to your home directory</p>
        </div>

        <div>
          <p class="container container5"><span class="pspan para"> %ls backups </span></p>
          <p> 2: To list the content of your unixstuff directory</p>
        </div>

        <div>
          <p class="container container5"><span class="pspan para"> %ls backups </span></p>
          <p> 3: Type this if you received an error that means: <br> backups is not in your current working directory</p>
        </div>

        

        <div>
          
          <p class="container container5"><span class="pspan para"> %ls ~/unix </span></p>
          <p>4: List the contents of your unixstuff directory</p>
        </div>

        <div>
          <p class="container container5"><span class="pspan para"> %ls ~ </span></p>
          <p> 5: List the files and directories in the user's home directory</p>
        </div>

        <div>
          <p class="container container5"> <span class="pspan para"> %ls ~/.. </span></p>
          <p> 6: Asking the system to list the contents of the parent  <br> directory of your home directory</p>
        </div>
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
