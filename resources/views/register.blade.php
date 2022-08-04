<x-central-layout>
  <main class="px-3">
    <img src="logo.png" alt="" style="max-width: 350px">
    <h5 style="margin-top: -15px;">Register Below</h5>
    <form action="{{ route('central.register.create') }}" method="post">
     @csrf
    <div class="container mt-4" style="max-width:500px; border: 1px solid rgba(255, 255, 255, 0.267); padding: .8rem">
      <div class="row">
        <div class="col-12">
          <div class="mb-3" style="text-align: left">
            <label for="usernameInput" class="form-label">Username:</label>
            <input name="username" type="text" class="form-control" id="usernameInput" placeholder="Enter Username">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3" style="text-align: left">
            <label for="emailInput" class="form-label">Email address:</label>
            <input name="email" type="email" class="form-control" id="emailInput" placeholder="Enter Email">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3" style="text-align: left">
            <label for="passwordInput" class="form-label">Password:</label>
            <input name="password" type="password" class="form-control" id="passwordInput" placeholder="Enter Password">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3" style="text-align: left">
            <label for="passwordConfirmationInput" class="form-label">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="passwordConfirmationInput" placeholder="Enter Confirmation Password">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3" style="text-align: left">
            <label for="domainInput" class="form-label">Domain</label>
            <input name="domain" type="text" class="form-control" id="domainInput" placeholder="Enter Domain">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3" style="text-align: left">
            <label for="teamNameInput" class="form-label">Business/Team name</label>
            <input name="team_name" type="text" class="form-control" id="teamNameInput" placeholder="Enter Business/Team name">
          </div>
        </div>
        <div class="col-12 pt-2">
          <div class="float-end">
            <button type="submit" class="btn btn-lg btn-success">Register</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  </main>

  <footer class="mt-auto text-white-50">
    
  </footer>
</div>
</x-central-layout>
