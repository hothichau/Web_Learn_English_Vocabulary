<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Topic;
use App\Comment;

class TopicController extends Controller
{
     function index(){
        $topics = Topic::all();
        return $topics;
    }

    function getTopicLimit(){
        $topics = Topic::where('id','>',0)->limit(5)->get();
        return $topics;
    }
    
    function comment(Request $request) {
    	$user_id = $request->input('user_id');
        $topic_id = $request->input('topic_id');
        $username = $request->input('username');
        $content = $request->input('content');

        $key = "WebLearnVocabulary sdfkksdl sgsdsdf";
        $data = JWT::decode($user_id,$key, array('HS256'));

        $userId = $data->user_id;

        $comment = new Comment;
        $comment->user_id = $userId;
        $comment->topic_id = $topic_id;
        $comment->username = $username;
        $comment->content = $content;
        
        $comment->save();

        $responseData = array("data"=>null);
        return response()->json($responseData, 200);
    }

    function getCommentByIDTopic($id){
        $comments = Comment::where('topic_id',$id)->get();
        return $comments;
    }

    function destroyComment(Request $request){
		$comment_id = $request->input('comment_id');
        $user_id = $request->input('user_id');
        
        $key = "WebLearnVocabulary sdfkksdl sgsdsdf";
        $data = JWT::decode($user_id,$key, array('HS256'));

        $userId = $data->user_id;

        echo $userId;

		Comment::where('id','=',$comment_id,'and','user_id','=',$userId)->delete();
		$responseData = array("data"=>null);
	    return response()->json($responseData, 200);
    }
    
    function editComment(Request $request){
        $user_id = $request->input('user_id');
        $topic_id = $request->input('topic_id');
        $username = $request->input('username');
        $content = $request->input('content');
        $comment_id = $request->input('comment_id');

        $key = "WebLearnVocabulary sdfkksdl sgsdsdf";
        $data = JWT::decode($user_id,$key, array('HS256'));

        $userId = $data->user_id;
        
        DB::table('comments')->where('id','=',$comment_id,'and','user_id','=',$userId)
        ->update(["id"=>$comment_id,"user_id"=>$userId,"topic_id"=>$topic_id,
        "username"=>$username,"content"=>$content]);

        $responseData = array("data"=>null);
        return response()->json($responseData, 200);

    }
}
