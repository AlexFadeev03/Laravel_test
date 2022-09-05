<h1>14 step reply</h1>
<h3>User</h3>
<table border="1">
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Phone Number</td>
        <td>Email</td>
    </tr>
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['last_name']}}</td>
        <td>{{$user['phone_number']}}</td>
        <td>{{$user['email']}}</td>
    </tr>


</table>
<br>
<h3>User's Address</h3>
<table border="1">
    <tr>
        <td>Id</td>
        <td>User_Id</td>
        <td>Street Address</td>
        <td>Street Address Line 2</td>
        <td>City</td>
        <td>State/Province</td>
        <td>Postal/Zip Code</td>
    </tr>
    <tr>
        <td>{{$address['id']}}</td>
        <td>{{$address['user_id']}}</td>
        <td>{{$address['street_address']}}</td>
        <td>{{$address['street_address_line2']}}</td>
        <td>{{$address['city']}}</td>
        <td>{{$address['state_province']}}</td>
        <td>{{$address['postal_zip_code']}}</td>
    </tr>
</table>

