<?php
$arr = ("양배추 즙은 맛이 없습니다");
$ans = mb_strlen($arr,"utf-8");
if($ans>4){
    echo "큽니다.";
}else{
    echo "작습니다.";
}
echo mb_strlen($arr,"utf-8");
?>