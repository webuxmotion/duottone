<?php

namespace app\controllers;

use app\models\User;
use app\services\GoogleAuth;
use core\Tone;

class UserController extends AppController {
    
    public function signupAction() {
        $this->setMeta(
            'Registration'
        );

        if (!empty($_POST)) {
            $data = $_POST;
            $user_model = new User();
            $user_model->load($data);
            
            if (!$user_model->validate($data)) {
                $user_model->getErrors();
                $_SESSION['form_data'] = $data;
            } else {
                $isDuplicateEmail = $user_model->findDuplicate('email', $user_model->attributes['email']);
                if ($isDuplicateEmail) {
                    $_SESSION['errors'] = "User with email <b>{$data['email']}</b> is already exists!";
                    $_SESSION['form_data'] = $data;
                } else {
                    $user_model->attributes['password'] = 
                        password_hash($user_model->attributes['password'], PASSWORD_DEFAULT);
                    if ($user_model->save()) {
                        $_SESSION['success'] = "User with email <b>{$data['email']}</b> is registered!";
                    }
                }
            }
            
            redirect();
        }

        $email_value = '';

        if (isset($_SESSION['form_data'])) {
            $email_value = $_SESSION['form_data']['email'];
        }

        $this->set(compact('email_value'));

        unset($_SESSION['form_data']); 
    }

    public function loginAction() {
        $this->setMeta(
            'Вхід на сайт - ' . Tone::$app->getProperty('site_name'),
            'Сторінка авторизації. Duottone Music Academy',
            'music, piano, duottone, piano lessons'
        );

        GoogleAuth::run();

        $queryParamsString = '';
        $redirectTo = $_GET['redirectTo'] ?? null;
        if ($redirectTo) {
            $queryParamsString .= '?redirectTo=' . $redirectTo;
        }
        $google_login_url = '/user/click-on-google-login-button' . $queryParamsString;

        $this->set(compact('google_login_url'));
    }

    public function clickOnGoogleLoginButtonAction() {
        $redirectTo = $_GET['redirectTo'] ?? null;
        GoogleAuth::run();
        $google_login_url = GoogleAuth::$google_login_url;
        if ($redirectTo) {
            $_SESSION['redirectTo'] = $redirectTo;
        }
        redirect($google_login_url);
    }

    public function logoutAction() {
        unset($_SESSION['user']);
        redirect();
    }
}