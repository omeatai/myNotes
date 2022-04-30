<?php
$id = session('id');
$pin = session('pin');
$title = session('title');
$firstname = session('firstname');
$lastname = session('lastname');
$phone = session('phone');
$email = session('email');
$sex = session('sex');
$location = session('location');
$anglican = session('anglican');
$province = session('province');
$diocese = session('diocese');
$church = session('church');
$designation = session('designation');

$num = $id;
$num_length = strlen((string)$num);

switch($num_length){
    case 1:
        $id = "00000".$num;
        break;
    case 2:
        $id = "0000".$num;
        break;
    case 3:
        $id = "000".$num;
        break;
    case 4:
        $id = "00".$num;
        break;
    case 5:
        $id = "0".$num;
        break;
    default :
        $id = "UNCONFIRMED";
        break;
}
?>

@component('mail::message')
# Congratulations {{ $title }} {{ $firstname }} {{ $lastname }}, You are successfully registered!!!
#Here are your details:
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
<table>
    <tr>
      <th>ID</th>
      <th>{{ $id }}</th>
    </tr>
    <tr>
      <td>PIN</td>
      <td>{{ $pin }}</td>
      </tr>
    <tr>
      <td>TITLE</td>
      <td>{{ $title }}</td>
    </tr>
    <tr>
      <td>FIRSTNAME</td>
      <td>{{ $firstname }}</td>
    </tr>
    <tr>
      <td>LASTNAME</td>
      <td>{{ $lastname }}</td>
    </tr>
    <tr>
      <td>PHONE</td>
      <td>{{ $phone }}</td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td>{{ $email }}</td>
    </tr>
    <tr>
      <td>SEX</td>
      <td>{{ $sex }}</td>
    </tr>
    <tr>
        <td>LOCATION</td>
        <td>{{ $location }}</td>
    </tr>
    <tr>
        <td>ANGLICAN?</td>
        <td>{{ $anglican }}</td>
    </tr>
    <tr>
        <td>PROVINCE</td>
        <td>{{ $province }}</td>
    </tr>
    <tr>
        <td>DIOCESE</td>
        <td>{{ $diocese }}</td>
    </tr>
    <tr>
    <td>CHURCH</td>
    <td>{{ $church }}</td>
    </tr>
    <tr>
    <td>DESIGNATION</td>
    <td>{{ $designation }}</td>
    </tr>
  </table>


@component('mail::button', ['url' => 'http://www.divccon.com'])
Visit Conference Website
@endcomponent

We hope to see you at the conference!<br>
Regards,<br>
Divccon
@endcomponent
