<?php

/*
 * Consider the following script:
 * 
 * */
?>
<html>
	<head>
		<title>
			This is a test script.
		</title>
	</head>
			<body>
            <?php
            echo 'This is some sample text';
            ?>
			</body>
</html>

<?php 
    //Which of the following tags is used in the php script?
    
/*      (A) Standard tag --> ok
 * 
        (B) ASP tag
        
        (C) Script tag 
        
        (D) Short tag 
*/
?>
    Explanation:
    In the above question, the standard php tag format is used, as shown below: */
    
    <?php
    
    /* Write your code here*/
    ?>
    
    Tags available in the php language
    There are four types of tags available in the php language as follows:
    Standard Tags: These tags are the standard php tags, which are certainly available and cannot be disabled by changing the php.conf file. The syntax of standard tags is as follows:
    
    <?php
          //code
    ?>
    Short Tags: These tags are simple to use but can interfere with XML documents. The syntax of short tags is as follows:
    <?
          //code
    ?>
     
    or
     
    <?= $variable ?> 
    (It can be used to print the result of an expression directly in the output of the script.)
    Script Tags: These are simple HTML language tags. The syntax of script tags is as follows:
    
    <script language="php">
      //code
    </script> 
    ASP Tags: These are simple ASP tags. The syntax of ASP tags is as follows:
    
    <%
          //code
    % >
           
*