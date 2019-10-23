<br/>
<h2>Customer Detail</h2>
<table class="table table-compact" width="100%">
    <tr>
        <td>Name</td><td>:</td>
        <td>{{ customer.name }}</td>
    </tr>
    <tr>
        <td>Email</td><td>:</td>
        <td>{{ customer.email }}</td>
    </tr>
    <tr>
        <td>Address</td><td>:</td>
        <td>{{ customer.address }}</td>
    </tr>
</table>
<br><br>
<button onclick="window.location.href='../customer'">Back</button>