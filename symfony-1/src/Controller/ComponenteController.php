<?php

namespace App\Controller;

use App\Entity\Componente;
use App\Repository\ComponenteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/componentes', name: 'component')]
class ComponenteController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(){
        return $this->json("Esto asi no se usa, siga la documentación para usar la API", Response::HTTP_OK);
    }

    #[Route('/add', name: 'add_component', methods:["POST"])]
    public function addComponente(Request $request, EntityManagerInterface $entityManager): Response
    {
        $body = $request->getContent();
        $data = json_decode($body, true);

        $componente = new Componente();
        $componente->setModelo($data["modelo"]);
        $componente->setFabricante($data["fabricante"]);
        $componente->setCaracteristicas($data["caracteristicas"]);
        $componente->setPrecio($data["precio"]);
        
        $entityManager->persist($componente);
        $entityManager->flush();

        // "Componente Creado Correctamente"
        return $this->json($componente, Response::HTTP_CREATED);
    }

    #[Route('/get', name: 'componente_get', methods:["GET"])]
    public function getComponente(ComponenteRepository $componenteRep): Response
    {
        $componentes = $componenteRep->findAll();
        $componentesJSON = [];
        foreach($componentes as $componente){
            $componentesJSON[] = [
                "id" => $componente->getId(),
                "modelo" => $componente->getModelo(),
                "fabricante" => $componente->getFabricante(),
                "caracteristicas" => $componente->getCaracteristicas(),
                "precio" => $componente->getPrecio()
            ];
        };

        return $this->json($componentesJSON);
    }

    #[Route('/get/{id}', name: 'componente_get_id', methods:["GET"])]
    public function getComponenteById($id, ComponenteRepository $componenteRep): Response
    {
        $componente = $componenteRep->find($id);
        if(!$componente)
            return $this->json("Componente no encontrado", Response::HTTP_OK);

        $componentesJSON[] = [
            "id" => $componente->getId(),
            "modelo" => $componente->getModelo(),
            "fabricante" => $componente->getFabricante(),
            "caracteristicas" => $componente->getCaracteristicas(),
            "precio" => $componente->getPrecio()
        ];

        return $this->json($componentesJSON, Response::HTTP_OK);
    }

    #[Route('/edit/{id}', name: 'componente_edit', methods:["PUT"])]
    public function editComponente($id, Request $request, ComponenteRepository $componenteRep, EntityManagerInterface $em): Response
    {
        $body = $request->getContent();
        $data = json_decode($body, true);

        $componente = $componenteRep->find($id);
        if(!$componente)
            return $this->json("Componente no encontrado", Response::HTTP_NOT_FOUND);

        if(isset($data["modelo"]))
        $componente->setModelo($data["modelo"]);
        
        if(isset($data["fabricante"]))
        $componente->setFabricante($data["fabricante"]);

        if(isset($data["caracteristicas"]))
        $componente->setCaracteristicas($data["caracteristicas"]);

        if(isset($data["precio"]))
        $componente->setPrecio($data["precio"]);

        $em->persist($componente);
        $em->flush();

        $componenteJSON = [
                "id" => $componente->getId(),
                "modelo" => $componente->getModelo(),
                "fabricante" => $componente->getFabricante(),
                "caracteristicas" => $componente->getCaracteristicas(),
                "precio" => $componente->getPrecio()
            ];

        return $this->json($componenteJSON, Response::HTTP_OK);
    }

    #[Route('/delete/{id}', name: 'componente_delete', methods:["DELETE"])]
    public function deleteComponente($id, ComponenteRepository $componenteRep, EntityManagerInterface $em): Response
    {
        $componente = $componenteRep->find($id);
        if(!$componente)
            return $this->json("Componente no encontrado", Response::HTTP_OK);

        $em->remove($componente);
        $em->flush();

        return $this->json("Componente Eliminado", Response::HTTP_OK);
    }
}
