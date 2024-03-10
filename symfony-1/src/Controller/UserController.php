<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

#[Route('/user', name: 'user')]
class UserController extends AbstractController
{
    #[Route('/register', name: 'user_register', methods:["POST"])]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $body = $request->getContent();
        $data = json_decode($body, true);

        $user = new User();
        $user->setEmail($data["email"]);
        $user->setPassword($data['password']);

        $user->setUserRole();
        
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json("Usuario Creado Correctamente", Response::HTTP_CREATED);
    }

    #[Route('/get', name: 'user_get', methods:["GET"])]
    public function userGet(UserRepository $userRep): Response
    {
        $users = $userRep->findAll();
        $userJson = [];
        foreach($users as $user){
            $userJson[] = [
                "email" => $user->getEmail(),
                "roles" => $user->getRoles()
            ];
        };

        return $this->json($userJson);
    }

    #[Route('/get/{id}', name: 'user_get_id', methods:["GET"])]
    public function userGetById($id, UserRepository $userRep): Response
    {
        $user = $userRep->find($id);
        if(!$user)
            return $this->json("Usuario no encontrado", Response::HTTP_OK);

        $userJson[] = [
            "email" => $user->getEmail(),
            "roles" => $user->getRoles()
        ];

        return $this->json($userJson, Response::HTTP_OK);
    }

    #[Route('/checklogin', name: 'check_login', methods:["POST"])]
    public function checkLoginParameters(UserRepository $userRep, Request $request){

        $body = $request->getContent();
        $data = json_decode($body, true);
        
        $result = "false";

        $user = $userRep->findOneBy(["email"=>$data['email']]);
        if(!$user || $user->getPassword() != $data['password']){
            $result = "false";
        }else{
            $result = "true";
        }
        
        $dataJSON = [
            "value" => $result,
            "role"=>$user->getRoles()
        ];

        return $this->json($dataJSON, Response::HTTP_OK);
    }
}
