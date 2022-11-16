<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic GuestBook By the Wheelchair Guy</title>
    <link rel="stylesheet" href="main.css">
   <script>
     if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</head>
<body>
<div class="top">
<form action='index.php' method='post'>

<!-- LETTER -->

<label>Dear</label><input type="text" name='name' value="Who do you want to address?" required><br>
<label>Most dragons don’t know how to read. They hiss and fume and guard their hoard. A tasty knight is what they need</label><input type="text" name='question1' value="What is your question?" required>
<label>For dinner (they spit out the sword),
Then go to sleep on heaps of treasure. They’ve no use for the written word.</label><input type="text" name='question2' value="What is your question?" required>
<label>But I learned early to take pleasure In reading tales and poetry And soon I knew that I preferred Reading a book to fighting knights. I lived on apple pie and tea, Which a kind lady made for me,</label><input type="text" name='question3' value="What is your question?" required><label>But I learned early to take pleasure In reading tales and poetry And soon I knew that I preferred Reading a book to fighting knights. I lived on apple pie and tea, Which a kind lady made for me,</label><input type="text" name='question4' value="What is your question?" required><label>And all my days and half my nights Were spent in reading story-books, A life more thrilling than it looks.Now that I’m old and cannot see To read, the lady’s youngest child Comes every day to read to me,</label><input type="text" name='question5' required>


<br>
<input class="inbtn" type="submit" value="post">
 </form>
</div>
 <hr>
 
<div class="bottom">
<?php




           if(isset($_POST['name'])) {
                $fname = $_POST['name'];
                $q1 = $_POST['question1'];
                $q2 = $_POST['question2'];
                $q3 = $_POST['question3'];
                $q4 = $_POST['question4'];
                $q5 = $_POST['question5'];
           //}
                
                     $file = fopen("comment.html","a");
                     fwrite($file, "<div class='gb'>
                     Dear&nbsp;".$fname."<br>
                     Most dragons don’t know how to read. They hiss and fume and guard their hoard. A tasty knight is what they need&nbsp;"
                     .$q1."&nbsp;For dinner (they spit out the sword),
                     Then go to sleep on heaps of treasure. They’ve no use for the written word.&nbsp;".$q2."&nbsp;But I learned early to take pleasure In reading tales and poetry And soon I knew that I preferred Reading a book to fighting knights. I lived on apple pie and tea, Which a kind lady made for me,&nbsp;".$q3."&nbsp;But I learned early to take pleasure In reading tales and poetry And soon I knew that I preferred Reading a book to fighting knights. I lived on apple pie and tea, Which a kind lady made for me,&nbsp;".$q4."&nbsp;But I learned early to take pleasure In reading tales and poetry And soon I knew that I preferred Reading a book to fighting knights. I lived on apple pie and tea, Which a kind lady made for me,&nbsp;".$q5.
                     "</div><hr>");
                     //fwrite($file, "<b>E-Mail</b> ".$email."<br>");
                     //fwrite($file, "<b>Message</b> ".$msg."<hr>");
                     fclose($file);
                    }
            
               require("comment.html");
?>
</div>


    

<!-- <div>< ?php echo $fname; ?></div>
    <div>< ?php echo $email; ?></div>
    <div>< ?php echo $msg; ?></div>
         </div> -->

         

</body>

</html>
