<?php

class Login extends Model
{

    /**
     * @throws ValidationException
     */
    public function validate()
    {
        $errors = [];

        if (!$this->email) {
            $errors['email'] = 'E-mail é um campo obrigatório.';
        }
        if (!$this->password) {
            $errors['password'] = 'Informe a senha.';
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
    
    /**
     * @throws Exception
     */
    public function checkLogin()
    {
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if($user) {
            if ($user->end_date) {
                throw new AppException('Usuário desligado da empresa.');
            }
            if(password_verify($this->password, $user->password)) {
              return $user;
            }
        }
        throw new AppException('Usuário/Senha inválidos.');
    }
}