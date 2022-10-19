<?php
namespace src\controllers;

use \core\Controller;
use \src\models\User;

class UsersController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function addAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {
            $data = User::select()->where('email', $email)->execute();

            if(count($data) === 0) {
                User::insert([
                    'name' => $name,
                    'email' => $email
                ])->execute();

                $this->redirect('/'); //redirect para a página inicial depois de adicionar
            }
        }

        $this->redirect('/new');
    }

    public function edit($args) {
        $user = User::select()->find($args['id']); //substituindo o execute por "find()" ele já pega o id sem precisar dar execute()

        $this->render('edit', [
            'user' => $user
        ]);
    }

    public function editAction($args) {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {
            User::update()
                ->set('name', $name)
                ->set('email', $email)
                ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        }

        $this->redirect('/user/'.$args['id'].'/edit');
    }

    public function del($args) {
        User::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
}