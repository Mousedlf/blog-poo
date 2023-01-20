<?php

namespace Controllers;

class CommentController extends AbstractController
{
    protected string $defaultEntityName = Comment::class;


    public function remove(){

        $id = null;

        if(!empty($_GET['id']) && ctype_digit($_GET['id']) ){
            $id = $_GET['id'];
        }

        // if!id redirect


        if($id){

            $comment = $this->defaultEntity->findById($id);

            if($comment){
                $this->defaultEntity->delete($comment);
            }

            return $this->redirect('post.php?id='.$comment->getPostId()); //typeid commentgetpid

        }}

    public function create(){

        $post_id = null;
        $content=null;

        if( !empty($_POST['post_id'])){ // && ctype_digit
            $post_id = $_POST['post_id'];
        }
        if( !empty($_POST['content'])){
            $content = $_POST['content']; //htmlspecialchars[$post
        }

        if($post_id && $content){

            //postZnt= new P + use ent/p

            // $post = $this->defaultEntity->findById($post_id);
            //if !post return

            // new C
            $comment->setContent($content);
            $comment->setPostId($post_id);

            $this->defaultEntity->insert($comment);

            return $this->redirect("post.php?id=$post_id"); //typeactionid{$postgetId

        }

    }

    public function change(){

        //verif id en method post
        //verif content
        //si id et content ; findbyid ; setcont ; update //creer function ds Comment

        //algo show trouver comm findid
        //render commupdate

    }

}
