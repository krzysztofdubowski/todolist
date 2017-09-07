<?php 

namespace AppBundle\Controller;
use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Types\TextType;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_spokjo")
     */
    public function indexAction(Request $request){
        
       
        $todos= $this->getDoctrine()
                ->getRepository('AppBundle:Todo')
                ->findAll();
        return $this->render('todo/index.html.twig', array(
            'todos'=>$todos
        ));
       
    }
     /**
     * @Route("/todos/create", name="todo_create")
     */
    public function createAction(Request $request){
        
        $todo= new Todo;
        $form = $this->createFormBuilder($todo)
                ->add('name',TextType::class,array('attr'=>array('class'=>'form-control','style'=>'margin-bottom:15px')))
                ->getForm();
                 
        return $this->render('todo/create.html.twig');
        
    }
    
     /**
     * @Route("/todos/edit/{id}", name="todo_edit")
     */
    public function editAction($id,Request $request){
        //die('lista');
        return $this->render('todo/edit.html.twig',array(
            'id'=>$id
        ));
        
    }
    
     /**
     * @Route("/todos/details/{id}", name="todo_details")
     */
    public function detailsAction($id){
       
        return $this->render('todo/details.html.twig',array(
            'id'=>$id
        ));
        
    }
    
    /**
     * @Route("/todos/delete/{id}", name="todo_list_")
     */
    public function DeleteAction(Request $request){
        die('delete');
        
        
    }
    
 }

