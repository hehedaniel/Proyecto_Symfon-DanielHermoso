<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Controller extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render("home.html.twig");
    }

    #[Route('/anadir', name: 'productos_anadir')]
    public function productosAnadir(): Response
    {
        return $this->render("create/anadir.html.twig");
    }


    // Para Mostrar (READ) productos
    #[Route('/buscar', name: 'productos_buscar')]
    public function productosBuscar(): Response
    {
        return $this->render("read/buscar.html.twig");
    }

    #[Route('/buscard', name: 'producto_mostrar', methods: ['GET'])]
    public function productosBuscadoMostrar(): Response
    {
        // #[Route('/buscard', name: 'producto_mostrar', methods: ['GET'])]
        // public function productosBuscadoMostrar(string $id): Response
        // {
        // $id = $this->getParameter('id');

        //Hacer consulta en busca del producto

        $productoFake = array(
        [
            "id" => '1',
            "modelo" => 'GTX 1650',
            "precio" => '5',
            "fabricante" => 'Intel',
            "caracteristicas" => 'RTX / 16GB / 8 Pines'
        ],
        [
            "id" => '2',
            "modelo" => 'GTX 3000',
            "precio" => '7',
            "fabricante" => 'AMD',
            "caracteristicas" => 'RTX / 32GB / 4 Pines'
        ],
        );
        //Meter logica por si no hay producto con dicho ID

        return $this->render("read/productos.html.twig", ['arrayProductos' => $productoFake]);
    }

    //Mostrar a JD que existe PHP Premium
    // public function productosBuscadoMostrar2(Request $request): Response
    // {
    //     $id = $request->request->get('id');

    //     return $this->render("anadir_producto.html.twig", ['id' => $id]);
    // }


    // Para Actualizar (UPDATE) productos
    #[Route('/actualizar', name: 'actualizar_producto')]
    public function modificarProducto(): Response
    {
        return $this->render("update/actualizar.html.twig", array() );//Aqui iria el array con los productos a mostrar
    }

    #[Route('/eliminar', name: 'eliminar_producto')]
    public function mostrarProductos(): Response
    {
        return $this->render("delete/eliminar.html.twig", array() );//Aqui iria el array con los productos a mostrar
    }
}
