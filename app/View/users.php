<h3>Create new Employer</h3>
<form method="post" action="/users/create">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control" id="username" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <label for="address">Address of employee </label>
        <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="phone">Phone number of employee </label>
        <input type="tel" name="phone" class="form-control" id="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
               placeholder="380962696266">
    </div>
    <div class="form-group">
        <label for="comments">Comments for this user</label>
        <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
    </div>
    <!--render the Departments -->
    <div class="form-group">
        <label for="inputState">Department</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create user</button>
</form>