<?php 

namespace DankiCode\Controllers;

class HomeController {
    public function index() {
        
        if (isset($_SESSION['login'])) {
            // renderiza a home do usuário
            \DankiCode\Views\MainView::render('home');
        } else {
            // renderizar para criar conta
            \DankiCode\Views\MainView::render('login');
        }

    }
}
