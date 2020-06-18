<?php

//Necessário testar em dominio com SSL
define("URL", "https://http://localhost:8080/Pagseguro/pagseguro-receber-id-sessao/");

$sandbox = true;
if($sandbox){
    define("EMAIL_PAGSEGURO", "euforiagrup@gmail.com");
    define("TOKEN_PAGSEGURO", "E34B33912F5D4CECAB2E757DA65B785F");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}else{
    define("EMAIL_PAGSEGURO", "Seu e-mail no PagSeguro");
    define("TOKEN_PAGSEGURO", "Seu token no PagSeguro");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}