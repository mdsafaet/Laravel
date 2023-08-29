<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <h2>Registration</h2>

            <form method="post" action="">    
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Phone Number:</label>
                    <input type="text" class="form-control" placeholder="Enter email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" class="form-control" placeholder="Confirm password" id="confirm_password" name="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
