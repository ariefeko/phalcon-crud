<br/>
<h2>Update Customers</h2>
<br><br>
<div class="row">
    <div class="col-md-12">
        <form method="POST">
            <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" name="name" class="form-control" placeholder="Type your name" required value="{{ customer.name }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Type your email" required value="{{ customer.email }}">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" placeholder="Type your address" required>{{ customer.address }}</textarea>
            </div>
            <input type="submit" value="Save"> 
            <button type="button" onclick="window.location.href='../../customer'">Cancel</button>
        </form>
    </div>
</div>