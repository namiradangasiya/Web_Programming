<html>
    <body>
        <form method=post>
            <textarea name='str' >Enter String : </textarea><br><br>
            <input type=submit name='submit' />
        </form>
    </body>
</html>



<?php

    $string=$_REQUEST['str'];
    $char=['a,e,i,o,u'];
    for( $i=1 ; $i <= $string ; $i++ )
    {
        if($string == $char)
        {
            $c=countVowels($char);
            echo "$c";
        }
    }
    

?>