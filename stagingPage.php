<html>
<head>
<script>
function detectBrowser()
{
 var N= navigator.appName;
 var UA= navigator.userAgent;
 var temp;
 if(UA.match(/(chrome)\/?\s*(\.?\d+(\.\d+)*)/i))
  {
    return "validBrowser" 
  }
 else
  { /*Redirect to the page, where it shows instructions for installing Chromw*/
    alert('Switch to Google Chrome');
    detectBrowser() //repeat until user switches browser
  }
};

</script>
</head>
<body onload="detectBrowser()" bgcolor="cyan">
<?php 
$action=$_REQUEST['action']; 
$ID = preg_replace('/\D/', '', $_SERVER['QUERY_STRING']);
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your Id:<br> 
    <input name="id" type="text" value="<?php echo $ID;?>" size="30" readonly/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    <input type="submit" value="Start the survey"/> 
    </form> 
    <?php 
    }  
else  /* send the submitted data */ 
    { 
    $email=$_REQUEST['email']; 
    if (($email=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("nadamit@gmail.com", "Survey Started by $ID", $from); 
        header("location: email.php?session_id=". $ID );
        } 
    }   
?> 
</body>
</html>
