<?php

class Blog{
    public $title, $author;
    public function __construct($title, $author)
    {
        $this->title=$title;
        $this->author=$author;
    }
    public function create_post(){
        echo "Post is created <b>".$this->author."</b><br>";
    }
    public function getPost(){
        echo "<b>All Blog Posts</b><br>";
    }
    public function displayPost(){
        echo "<b>Display Blog Posts</b><br>";
    }
}

// $blog=new Blog("title is title", "Rakib Mahmud");
// $blog->create_post();
// $blog->getPost();
// $blog->displayPost();

class BlogPostRepository{
    /* define a empty array  */
    private $posts=[];
    public function __construct(Blog $request)
    {
        $this->posts[]=$request;
    }
    // public function save(Blog $blog){
    //     $this->posts[]=$blog;
    // }
    public function getAll(){
        return $this->posts;
    }
    public function displayData(){
        foreach ($this->posts as $post) {
            $post->displayPost();
        }
    }
}

// $blog=new Blog("Post number 1","Rakib Mahmud");
// $repository= new BlogPostRepository($blog);
// $posts= $repository->getAll();
// echo "<pre>";

// var_dump($posts);
// echo "</pre>";
$blog = new Blog("Post number 1","Rakib Mahmud");
$repository = new BlogPostRepository($blog);
// $repository->save($blog);
$posts = $repository->getAll();
echo "<br>";
echo "<br>";
echo "<br>";

 $repository->displayData();
//var_dump($repository);
// echo "<pre>";
// var_dump($posts);
// echo "</pre>";






echo "<br>";
echo "<br>";
echo "<br>";


include 'open_close_principals.php';

?>