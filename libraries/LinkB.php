<?php
class LinkB {
    function link($link) {
        return trim(preg_replace('/\-+/', "-",str_replace(array(' ','؟','?','!','@','#','$','%','^','&','*','(',')',']','[','}','{',';',',','.'),'-',$link)),'-');
    }
}
