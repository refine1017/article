<?php
require_once "vendor/autoload.php";

use MessagePack\Packer;
use MessagePack\BufferUnpacker;

// 协议内容
$data = array(
	"status" => 1,
	"msg" => "success"
);

// json压缩
$json_str = json_encode($data, true);

// msgpack压缩
$packer = new Packer();
$msgpack_str = $packer->pack($data);

// 压缩后的大小比较
echo "json encode length = " . strlen($json_str) . "<br/>";
echo "msgpack encode length = " . strlen($msgpack_str) . "<br/>"; 

// msgpack解压
$unpacker = new BufferUnpacker();
$unpacker->reset($msgpack_str);
$unpacked = $unpacker->unpack();
var_dump($unpacked);
