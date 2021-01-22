<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Location;
use App\Mail\ResumeMail;
use Mail;
use Validator;
use Auth;

class HomeController extends Controller
{
    public function index(){
    	return view('home.index');
    }

    public function jobsearch(){
    	return view('home.jobsearch')->with([
    		'posts'=>Post::orderBy('created_at', 'desc')->get(),
    		'categories'=>Category::all(),
    		'locations'=>Location::all()
    	]);
    }

    public function jobView(Request $request, $id){
    	return view('home.jobView')->with([
    		'post'=>Post::find($id)
    	]);
    }

    public function admin(){
    	return view('home.admin');
    }

    public function checkLogin(Request $request){
        $user = array(
           'username'=> $request->get('username'),
           'password'=> $request->get('password')
        );
        if(Auth::attempt($user)){
            return redirect('/admin/home');
        }
        else{
            return redirect('/admin')->with(['errors'=>'Username/Password incorrect']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/admin');
    }

    public function adminHome(Request $request){
        if(Auth::guest())
            return redirect('/admin');
    	return view('home.adminHome')->with([
    		'categories'=>Category::all(),
    		'locations'=>Location::all()
    	]);
    }

    public function getPosts(Request $request){
    	if($request->ajax()){
    		$posts = Post::all();
            if($request->has('category') && $request->get('category') != '0'){
                $posts = $posts->where('category_id', $request->get('category'));
            }
            if($request->has('location') && $request->get('location') != '0'){
                $posts = $posts->where('location_id', $request->get('location'));
            }
    		$data = [];
    		foreach($posts as $post){
    			$date = date($post->created_at);
    			array_push($data, ['', 
                    $post->id, 
                    '<a href="#" onclick="getPost('.$post->id.');">'.$post->title.'</a>', 
                    $post->location->name, 
                    $post->salary, 
                    $date,
                    '<button class="btn btn-warning" onclick="edit('.$post->id.');">Edit</button> <button class="btn btn-danger" onclick="remove('.$post->id.');">Delete</button>',
                ]);

        	}
        	return ["data"=> $data];
        }
        else
        	error_log($request);
    }

    public function email(Request $request){
    	return view('emails.resume');
    }

    public function sendEmail(Request $request){
    	$post = Post::find($request->input('post-id'));
    	$data = [
    		'title'=>$post->title,
    		'category'=>$post->category->name,
    		'location'=>$post->location->name,
    		'date'=>date($post->created_at),
    		'inputName'=>$request->input('inputName'),
    		'inputEmail'=>$request->input('inputEmail'),
    		'inputMobile'=>$request->input('inputMobile'),
    		'coverletter'=>$request->input('coverletter'),
    		'file'=>$request->file('resume')
    	];
		Mail::send('emails.resume', $data, function($message) use($data){
		    $message->to('vivo5plus2439@gmail.com', 'AJB guest')->subject('AJB RESUME');
		    $message->from('ajbadmin@ajbhrconsultancy.com','AJB');
		    $message->attach($data['file']->getRealPath(), array(
                    'as' => $data['file']->getClientOriginalName(),
                    'mime' => $data['file']->getMimeType()));
		});
        error_log('i got here');
		return redirect('/jobsearch')->with(['success'=>'Your application has been sent!']);
    }

    public function successEmail(Request $request){
    	return $request['test'];
    }
}
