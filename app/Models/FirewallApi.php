<?php

namespace App\Models;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirewallApi extends Model
{
    use HasFactory;

    protected $client;

    protected $token;

    protected $domain = "https://118.130.110.156:50015";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if(config("app.env") == "production")
            $this->domain = "https://10.0.1.254:50015";

        $this->client = new Client([
            "verify" => false,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
            ],
        ]);

        // get token
        $response = $this->client->request("post",$this->domain."/token", [
            "json" => [
                "id" => "admin",
                "password"=> "qwe123!@#"
            ]
        ]);

        // login
        $this->token = json_decode($response->getBody()->getContents(), true)["token"];

        $this->login();
    }

    public function login()
    {
        $response = $this->client->request("post",$this->domain."/login", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],
        ]);
    }

    public function logout()
    {
        $response = $this->client->request("post",$this->domain."/logout", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],
        ]);
    }

    public function ipsIndex()
    {
        $response = $this->client->request("get",$this->domain."/object/ip_address/ipv4_address", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],

            "json" => [

            ]
        ]);

        $this->logout();

        return json_decode($response->getBody()->getContents(), true)["result"];
    }

    public function ipsStore($data)
    {
        $response = $this->client->request("post",$this->domain."/object/ip_address/ipv4_address", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],

            "json" => [
                $data
            ]

            /*{
                "name": "Test",
                "type": "0",
                "ip4_address": "77.77.77.100",
                "ip4_prefix_host": "32",
                "interface": "all",
                "description": "설명을 입력해주세요",
                "zone": "ALL"
            }*/
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function ipsDestroy($data)
    {
        $response = $this->client->request("delete",$this->domain."/object/ip_address/ipv4_address", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],

            "json" => [
                $data
            ]

            /*{
                "name": "Test",
            }*/
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }


    public function natsIndex()
    {
        $response = $this->client->request("get",$this->domain."/policy/nat/policy_based", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],

            "json" => [

            ]
        ]);

        $this->logout();

        return json_decode($response->getBody()->getContents(), true)["result"];
    }

    public function natsStore($data)
    {
        $response = $this->client->request("post",$this->domain."/policy/nat/policy_based", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],

            "json" => [
                $data
            ]

            /*{
      "index": "23",
            "enable": "0",
            "before_source_ip4_object": "all",
            "before_destination_ip4_object": "WAN",
            "before_service_object": "ssh_2022",
            "after_source_ip4_object": "",
            "after_destination_ip4_object": "FW_2",
            "after_sevice_object": "SSH",
            "rule_number": "1",
            "description": "",
            "reverse": "0",
            "nat_id": "1",
            "before_source_ip4_address": "0.0.0.0/0",
            "before_destination_ip4_address": "192.168.155.180/32",
            "after_source_ip4_address": "0.0.0.0/0",
            "after_destination_ip4_address": "10.0.1.2/32",
            "dynamic_blacklist_enable": "0",
            "source_port_reuse_enable": "0",
            "apply_flag": "0"
}*/
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function natsDestroy($data)
    {
        $response = $this->client->request("delete",$this->domain."/policy/nat/policy_based", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
                "Authorization" => $this->token,
            ],

            "json" => [
                $data
            ]

            /*{
                "index": 23
            }*/
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
