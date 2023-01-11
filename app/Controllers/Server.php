<?php namespace App\Controllers;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Libraries\Chat;

// require dirname(__DIR__) . '/vendor/autoload.php';
class Server extends BaseController
{
    public function index()
    {
        if(!is_cli()){
         //   die("not accessible");
        }

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Chat()
            )
        ),
        8282
    );

    $server->run();
    }

    //--------------------------------------------------------------------

}
