
<header>
<style>
body {
  padding-top: 50px;
}

h1 {
  margin-bottom: 20px;
  padding-bottom: 9px;
  border-bottom: 1px solid #eee;
}

.sidebar {
  position: fixed;
  top: 51px;
  bottom: 0;
  left: 0;
  z-index: 1000;
  padding: 20px;
  padding-left: 0; padding-right: 0;
  overflow-x: hidden;
  overflow-y: auto;
  border-right: 1px solid #eee;
  
  .list-group-item {
    /*background: transparent;
    /*border-color: #f4645f;
    border: 0; border-bottom: 1px solid #666;
    color: #f2f2f2;*/
    border-radius: 0;
    &.active {
      /*background: #f4645f;*/
    }
    .badge {
      margin-top: 3px;
    }
  }
  
  .nav-link {
    color: #f2f2f2;
    border-radius: 0;
    
    &.active {
      background-color: #f4645f;
    }
  }
  
  &::-webkit-scrollbar {
    width: 8px;
    background-color: #f2f2f2;
  }
  
  &::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #f2f2f2;
  }
  
  &::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #555;
  }

  .nav {
    margin-bottom: 20px;
  }

  .nav-item {
    width: 100%;
  }

  .nav-item + .nav-item {
    margin-left: 0;
  }
}

<style>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Admin Template</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-secondary sidebar">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-dark list-group-item-action active"><span class="fa fa-fw fa-dashboard"></span> Dashboard</a>
        <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><span class="fa fa-fw fa-dashboard"></span> Products <span class="badge badge-dark badge-pill pull-right">14</span></a>
         <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><span class="fa fa-fw fa-dashboard"></span> Categories <span class="badge badge-dark badge-pill pull-right">14</span></a>
         <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><span class="fa fa-fw fa-dashboard"></span> Users <span class="badge badge-dark badge-pill pull-right">14</span></a>
         <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><span class="fa fa-fw fa-dashboard"></span> Orders <span class="badge badge-dark badge-pill pull-right">14</span></a>
      </div>

    </nav>

    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
      <h1>Dashboard</h1>

      <section class="row text-center placeholders">
        <div class="col-6 col-sm-3">
          <div class="card text-white bg-info mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h4 class="card-title">123</h4>
              <p class="card-text">Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="card text-white bg-success mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h4 class="card-title">123</h4>
              <p class="card-text">Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="card text-white bg-warning mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h4 class="card-title">123</h4>
              <p class="card-text">Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="card text-white bg-danger mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h4 class="card-title">123</h4>
              <p class="card-text">Data</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      
      
      <div class="btn-group pull-right" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Print</button>
        <button type="button" class="btn btn-secondary">Export</button>
      </div>
      <h2>Table</h2>
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td style="width: 100px">
                <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                  <span class="fa fa-trash"></span>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h2>Form</h2>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Check me out
      </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </main>
  </div>
</div>