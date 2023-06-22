<?php
    namespace App\Controller;
    class HomeController extends AppController
    {
        public function index()
        {
            $this->viewBuilder()->setLayout('myLayout');
            $this->render();
            $test = 'test';
            $this->set('test', $test);
        }

        public function toto()
        {

        }

    }
?>