class LinkB {
    function link($link) {
        return str_replace(array(' ','!','@','#','$','%','^','&','*','(',')',']','[','}','{',';',',','.'),'-',$link);
    }
}