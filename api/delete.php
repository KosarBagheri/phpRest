<?php


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
include_once('../core/init.php');
$post = new Post();
$data = json_decode(file_get_contents("php://input"));
$post->id = $data->id;
if ($post->delete()) {
    echo json_encode(
        array('message' => 'Post deleted')
    );
} else {
    echo json_encode(
        array('message' => 'Post not deleted')
    );
}







