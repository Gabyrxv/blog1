<?php
class Paginas extends Controller{
    public function index(){
        $dados = ['titulo'=>'Página Inicial',
                  'descricao'=>'Aula de PHP Orientada a objetos com MVC'
                 ];

        $this->view('pagina/home', $dados);
    }
    public function sobre(){
        $dados = ['titulo'=>'Sobre nós...',
                  'descricao'=>'There are many 
                  variations of passages of Lorem 
                  Ipsum available, but the majority 
                  have suffered alteration in some 
                  form, by injected humour, or 
                  randomised words which dont look even 
                  slightly believable. If you are going 
                  to use a passage of Lorem Ipsum, you 
                  need to be sure there isnt anything 
                  embarrassing hidden in the middle of text.'];
       $this->view('pagina/sobre', $dados);
    }
    public function contato(){
        $dados = ['titulo'=> 'Página Contato',
                  'descricao' => 'Rua da medicina - 5000']
    }
}