<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\DeletedPosts;


class DeletedPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // TO paginatet the resarch
        $delposts = DeletedPosts::orderBy("Creation_time", "DESC")->paginate(2);

        // //   using the db
        // $posts = DB::select('SELECT * FROM posts')
        return view('posts.deletedposts') -> with('delposts', $delposts);
    }


    public  function create(){
        //
        
    }

   

        public function store(Post $post)
{
    // Create a new DeletedPosts model instance and store deleted post details
    $deletedPost = new DeletedPosts();
    $deletedPost->Name = $post->Name;
    $deletedPost->Email = $post->Email;
    $deletedPost->Data = $post->Data;
    $deletedPost->Creation_time = $post->created_at;
    $deletedPost->previous_id = $post->id;

    // Save the deleted post details to the deleted_posts table
    $deletedPost->save();
}

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // //

        // // $post = Post::find($id);

        // // $post->delete();

        // // return redirect('/posts')-> with ('success', 'The Entry has been deleted');

        
        // // Find the post
        // $post = Post::find($id);

        // // Create a new DeletedPosts model instance and store deleted post details
        // $deletedPost = new DeletedPosts();
        // $deletedPost->Name = $post->Name;
        // $deletedPost->Email = $post->Email;
        // $deletedPost->Data = $post->Data;
        // $deletedPost->Creation_time = $post->created_at;
        // $deletedPost->previous_id = $post->id;

        // // Save the deleted post details to the deleted_posts table
        // $deletedPost->save();

        // // Delete the post using Eloquent
        // $post->delete();

        // return redirect('/posts')->with('success', 'The Entry has been deleted');
    }
    }

