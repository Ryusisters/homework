<?php
$fullText = "음료는 결명자차가 좋아요.";
$searchText = "보리차";
if(strpos($fullText, $searchText) !== false) {
    echo "있습니다.";} else{echo "없습니다.";
}
?>