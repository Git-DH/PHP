<?php
    include_once "db/db_user.php";
    session_start();
    
    define("PROFILE_PATH", "img/profile/");

    $login_user = &$_SESSION["login_user"];
    // &를 붙여 얕은 복사를 한다
    
    var_dump($_FILES);// 개발 당시에만 확인을 위해 사용한다
    if($_FILES["img"]["name"] === "") {
        echo "이미지 없음";
        exit;
    }

    // sprintf는 리턴을 통해서 문자열을 보여주는것이고 printf는 리턴 없이 그냥 브라우저에 찍히는 것이다
    function gen_uuid_v4() {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0x0fff) | 0x4000
            , mt_rand(0, 0x3fff) | 0x8000
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
    ); // 업로드 되는 파일의 파일명이 중복되지 않게 해주는 역할
}
$img_name = $_FILES["img"]["name"];// 임시파일에 저장한 상태
$last_index = mb_strrpos($img_name, ".");//mb를 넣는게 좋다 / 어디서 부터 자를지 위치값을 정한다
$ext = mb_substr($img_name, $last_index);//원본은 그대로 두고 문자열을 자른다

$target_filenm = gen_uuid_v4() . $ext;
$target_full_path = PROFILE_PATH . $login_user["i_user"];//pk값을 합침
if(!is_dir($target_full_path)) {
    mkdir($target_full_path, 0777, true);//디렉토리 새로생성
}

$tmp_img = $_FILES['img']['tmp_name'];
$imageUpload = move_uploaded_file($tmp_img, $target_full_path . "/" .$target_filenm);
if($imageUpload) { // 업로드 성공
    
    if($login_user["profile_img"]){
      $saved_img = $target_full_path . "/" . $login_user["profile_img"];
      if(file_exists($saved_img)) {// 폴더 체크용
          unlink($saved_img);
      }
    }
    
    //DB에 저장
     $param = [
         "profile_img" => $target_filenm,
         "i_user" => $login_user["i_user"]
     ];
     $result = upd_profile_img($param);
     $login_user["profile_img"] = $target_filenm;
    header("Location: profile.php");
} else { // 업로드 실패
    echo "업로드 실패";
}

echo "ext : " . $ext;

