<?php
//membuat validasi username karakter harus 6 dan huruf kecil semua
$_POST['username'] = 'Kamusiapa';
$username=$_POST['username'];
if (!preg_match('/^[a-z]{6}$/',$username)) 
{
  echo "username invalid";
}
else
{
  echo "username valid";
}

//membuat validasi email mengandung char @ dan hruf kecil semua
$_POST['email'] = 'kamusiapa@gmail.com';
$email=$_POST['email'];
if (!preg_match('/^([a-z][a-z\-\.\_]*)\@([a-z][a-z\-\_]*)(\.[a-z][a-z\-\_]*)+$/',$email)) 
{
  echo "email invalid";
}
else
{
  echo "email valid";
}

//membuat validasi password minimal 8 karakter dan 1 huruf kapital dan angka
$_POST['password'] = 'Kamusiapa2169';
$password=$_POST['password'];
if (!preg_match('/^([A-Z]{1})([a-z]{6,}[0-9]{1}[a-z0-9\-\.\_]*)$/',$password)) 
{
  echo "password invalid";
}
else
{
  echo "password valid";
}

?>
