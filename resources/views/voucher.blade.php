<DOCTYPE html>
<html lang="en">
<head>
<title>Ini adalah Voucher</title>
<body>
    <h3>Data voucher</h3>
    <a href="/voucher"> Tampil Voucher </a>
    <br>
    <br>
    
    <table border="1">
        <tr>
            <th>Id Voucher : </th>
            <th>Nama Voucher : </th>
            <th>Create at : </th>
            <th>Update at : </th>
            
            </tr>

        <tr>
         <?php 
         
         @foreach($voucher as $p)
            <td>{{$p['id'] }}</td>
            <td>{{$p['nama_voucher']}}</td>
         @endforeach ?>
        </table>
</body>
</head></html>