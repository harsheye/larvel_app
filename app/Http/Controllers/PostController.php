<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\DeletedPosts;

// // To don't use elequont and want to use the query
// use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // using elequent
        // $posts =  Post::orderBy("created_at", "DESC")->get();
        // // TO ONly show one
        // $posts = Post::orderBy("created_at", "DESC")->take(1)->get();


        // TO paginatet the resarch
        $posts = Post::orderBy("created_at", "DESC")->paginate(2);

        // //   using the db
        // $posts = DB::select('SELECT * FROM posts')
        return view('posts.index') -> with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create_contactme');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Checkin if not empty

        $this->validate($request, [
            'Name' => 'required',
            'Email' => 'required|email',
            'Message' => 'required'
        ]);


        //  Entering data in the database

        $EnterDataInDb = new Post;

        $EnterDataInDb->Name = $request->input('Name');
        $EnterDataInDb->Email = $request->input('Email');
        $EnterDataInDb->Data = $request->input('Message');
        $EnterDataInDb->save();




        return redirect('/posts/create_contactme')->with ('success', 'Your message has been sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $posts = Post::find($id);

        return view('posts.look', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $EditPost = Post::find($id);
        return view('posts')->with('posts', $EditPost);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this-> validate($request,
        ['recipient-data' => 'required']);


        // updating the data
        $updateData = Post::find($id);
        $updateData -> Data = $request->input('recipient-data');
        $updateData -> save();

        return redirect('/posts')-> with ('success', 'The data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $post = Post::find($id);

        if (!$post) {
            return redirect('/posts')->with('error', 'Post not found');
        }




    // Create an instance of DeletedPostsController
    $deletedPostsController = new DeletedPostsController();

    // Save its details to the deleted_items table
    $deletedPostsController->store($post);


    //     // Save its details to the deleted_items table
    // DeletedPostsController::create([
    //     'Name' => $post->Name,
    //     'Email'=> $post->Email,
    //     'Data'=> $post->Data,
    //     'Creation_time'=>$post->created_at,
    //     'previous_id'=>$post->id

    //     // Add other fields as needed
    // ]);



        $post->delete();

        return redirect('/posts')-> with ('success', 'The Entry has been deleted');
    }
}
