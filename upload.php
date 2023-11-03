<?php 
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");
print_r($_FILES);
if(isset($_FILES['upload']['name'])){
    $file_name = $_FILES['upload']['name'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target ='file_upload/';
    move_uploaded_file( $_FILES['upload']['tmp_name'],$file_tmp, $target, $file_name);


    // $function_number = $_GET['CKEditorFuncNum'];
    // $url ='upload/'.$file_name;
    // $message='';
    // echo'<script>';
    // echo'window.parent.CKEDITOR.tools.callfuntion("'.$function_number.'","'.$url.'","'.$message.'");';
    // echo'</script>';
}














?>