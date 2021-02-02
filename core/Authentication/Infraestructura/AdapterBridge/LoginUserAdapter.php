<?php


namespace Core\Authentication\Infraestructura\AdapterBridge;


use Core\Authentication\Application\UseCase\LoginUserUseCase;
use Core\Authentication\Infraestructura\Database\AuthenticationRepositoryImpl;
use Core\ManageUsers\Infraestructura\DataBase\UserRepositoryImpl;
use Core\Rol\Infraestructura\DataBase\RolRepositoryImpl;

class LoginUserAdapter
{
    /**
     * @var AuthenticationRepositoryImpl
     */
    private AuthenticationRepositoryImpl $authenticationRepositoryImpl;
    /**
     * @var UserRepositoryImpl
     */
    private UserRepositoryImpl $userRepositoryImpl;
    /**
     * @var RolRepositoryImpl
     */
    private RolRepositoryImpl $rolRepositoryImpl;

    public function __construct(
        AuthenticationRepositoryImpl $authenticationRepositoryImpl,
        UserRepositoryImpl $userRepositoryImpl,
        RolRepositoryImpl $rolRepositoryImpl
    )
    {
        $this->authenticationRepositoryImpl = $authenticationRepositoryImpl;
        $this->userRepositoryImpl = $userRepositoryImpl;
        $this->rolRepositoryImpl = $rolRepositoryImpl;
    }

    public function loginUser($userName, $password) {
        $user = new LoginUserUseCase($this->authenticationRepositoryImpl, $this->userRepositoryImpl, $this->rolRepositoryImpl);
        return $user->loginUser($userName, $password);
    }
}
