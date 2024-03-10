<?php
namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Controller extends AbstractController
{
    // private ?string $api = "https://65eae45243ce16418932bc60.mockapi.io/componentes/componente/";
    private ?string $api = "http://localhost:36949/componentes/";
    private ?string $apiUsers = "http://localhost:36949/user/";
    private ?string $estaLogueado = "false";

    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render("home.html.twig",['logged' => $this->estaLogueado]);
    }

    // Para Anadir (POST) productos
    public function formularioAnadirTwig(): Response
    {
        return $this->render("create/anadir.html.twig");
    }

    public function anadirProducto(): Response
    {
        $modelo = $_GET['modelo'];
        $fabricante = $_GET['fabricante'];
        $precio = $_GET['precio'];
        $caracteristicas = $_GET['caracteristicas'];

        $client = HttpClient::create();
        $urlConexion = $this->api . "add";
        $response = $client->request('POST', $urlConexion, ['json' => [
            'modelo' => $modelo,
            'fabricante' =>  $fabricante,
            'precio' =>  $precio,
            'caracteristicas' =>  $caracteristicas
        ]]);

        $content = $response->getContent();
        $arrayProducto = json_decode($content, true);

        return $this->render("delete/respuesta.html.twig", ['mensaje' => "El componente se ha creado con éxito",]);
    }


    // Para Mostrar (READ) productos
    public function productosBuscarTwig(): Response
    {
        return $this->render("read/buscar.html.twig");
    }

    public function productoBuscadoMostrar(): Response
    {

        $id = $_GET['id'];

        $client = HttpClient::create();
        $urlConexion = $this->api . "get/" . $id;
        $response = $client->request('GET', $urlConexion);
        $content = $response->getContent();
        $arrayProducto = json_decode($content, true);

        return $this->render("read/productos.html.twig", ['arrayProductos' => $arrayProducto,]);

    }

    public function mostrarProductos(): Response
    {
        $client = HttpClient::create();
        $urlConexion = $this->api . "get";
        $response = $client->request('GET', $urlConexion);
        $content = $response->getContent();
        $arrayProducto = json_decode($content, true);

        return $this->render("read/productos.html.twig", ['arrayProductos' => $arrayProducto,]);

    }

    // Para Actualizar (UPDATE) productos
    public function seleccionarProductoModificarTwig(): Response
    {

        $client = HttpClient::create();
        $urlConexion = $this->api . "get";
        $response = $client->request('GET', $urlConexion);
        $content = $response->getContent();
        $arrayProducto = json_decode($content, true);

        return $this->render("update/selActualizar.html.twig", ['arrayProductos' => $arrayProducto,]);
    }

    public function formProductoModificar(): Response
    {

        $id = $_GET['id'];

        $client = HttpClient::create();
        $urlConexion = $this->api . "get/" . $id;
        $response = $client->request('GET', $urlConexion);
        $content = $response->getContent();
        $arrayProducto = json_decode($content, true);

        if ($arrayProducto == "Componente no encontrado"){
            $mensaje = "No se ha encontrado ese componente";
            return $this->render("delete/respuesta.html.twig", ['mensaje' => $mensaje,]);
        }else {
            return $this->render("update/actualizar.html.twig", ['arrayProducto' => $arrayProducto[0],]);
        }
    }

    public function modificarProducto(): Response
    {
        $id = $_GET['id'];
        $modelo = $_GET['modelo'];
        $fabricante = $_GET['fabricante'];
        $precio = $_GET['precio'];
        $caracteristicas = $_GET['caracteristicas'];

        $client = HttpClient::create();
        $urlConexion = $this->api . "edit/" . $id;
        $response = $client->request('PUT', $urlConexion, ['json' => [
            'modelo' => $modelo,
            'fabricante' =>  $fabricante,
            'precio' =>  $precio,
            'caracteristicas' =>  $caracteristicas
        ]]);

        $content = $response->getContent();
        $arrayProducto = json_decode($content, true);
        
        return $this->render("read/productos.html.twig", ['arrayProductos' => $arrayProducto,]);
    }



    // Para Eliminar (DELETE) productos
    public function formEliminarTwig(): Response
    {
        return $this->render("delete/eliminar.html.twig", array() );//Aqui iria el array con los productos a mostrar
    }

    public function eliminarProd(): Response
    {
        $id = $_GET['id'];

        $client = HttpClient::create();
        $urlConexion = $this->api . "delete/" . $id;
        $response = $client->request('DELETE', $urlConexion);
        $content = $response->getContent();

        if ($content == "Componente no encontrado"){
            $mensaje = "No se ha encontrado ese componente";
        }else {
            $mensaje = json_decode($content, true);
        }

        return $this->render("delete/respuesta.html.twig", ['mensaje' => $mensaje,]);
    }

    public function mostrarFormInicioYRegistroTwig(){
        return $this->render("session/session.html.twig");
    }

    public function registroUsuario(): Response{

        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuarioJSON["json"] = [
            "email"=>$email,
            "password"=>$password
        ];

        $client = HttpClient::create();
        $urlConexion = $this->apiUsers . "register";
        $response = $client->request('POST', $urlConexion, $usuarioJSON);
        $content = $response->getContent();
        $mensaje = json_decode($content, true);

        return $this->render("delete/respuesta.html.twig", ['mensaje' => $mensaje,]);
    }

    public function inicioSesionUsuario(): Response{

        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuarioJSON["json"] = [
            "email"=>$email,
            "password"=>$password
        ];

        // if(){

        // }

        $client = HttpClient::create();
        $urlConexion = $this->apiUsers . "checklogin";
        $response = $client->request('POST', $urlConexion, $usuarioJSON);

        $content = $response->getContent();
        $mensaje = json_decode($content, true);

        $mensajeFinal = "Ha iniciado sesion";
        if($mensaje['value'] == "true"){
            setcookie("correoSesion",$email, time() + 60 * 60 * 24);

            if($mensaje["role"][0] == "ROLE_ADMIN"){
                setcookie("admin",'true', time() + 60 * 60 * 24);
            }
            

            $this->estaLogueado = "true";
        }else{
            $this->estaLogueado = "false";
            $mensajeFinal = "No es posible iniciar sesión";
        }


        return $this->render("delete/respuesta.html.twig", ['mensaje' => $mensajeFinal,]);
    }

    public function borrarCookie(): Response{
        setcookie("correoSesion",'', time() - 3600);
        setcookie("admin",'', time() - 3600);
        return $this->render("delete/respuesta.html.twig", ['mensaje' => 'Sesión Cerrada',]);
    }
}
