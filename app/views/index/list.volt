<br/>
<h2>Customers</h2>
<div class="row">
    <div class="col-md-12">
    <u>Customers list</u>:
    <br><br>
    <table class="table table-hover" width="100%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        {% for cust in customers %}
            <tr>
                <td>{{ cust.name }}</td>
                <td>{{ cust.email }}</td>
                <td>{{ cust.address }}</td>
                <td>
                    <a href="customer/{{ cust.id }}">show</a> | 
                    <a href="customer/edit/{{ cust.id }}">edit</a> | 
                    <a href="customer/delete/{{ cust.id }}">delete</a>
                </td>
            </tr>
        {% endfor %}
    </table>
    <br>
    <button onclick="window.location.href='customer/create'">Create</button>
    </div>
</div>