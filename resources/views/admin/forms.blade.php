<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('dashboard.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">


</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>
            <h2>Section title</h2>
            <div class="table-responsive">
                <table class="table" id="example-table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>@johndoe</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>@janedoe</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Steve</td>
                        <td>Smith</td>
                        <td>@stevesmith</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <form>
                <div class="form-group">
                    <label for="example-text-input">Text Input</label>
                    <input type="text" class="form-control" id="example-text-input" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label for="example-email-input">Email Input</label>
                    <input type="email" class="form-control" id="example-email-input" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="example-password-input">Password Input</label>
                    <input type="password" class="form-control" id="example-password-input" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="example-select">Select</label>
                    <select class="form-control" id="example-select">
                        <option value="">Choose an option</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="example-textarea">Textarea</label>
                    <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Radio Buttons</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="example-radios" id="example-radio1" value="option1">
                            <label class="form-check-label" for="example-radio1">
                                Option 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="example-radios" id="example-radio2" value="option2">
                            <label class="form-check-label" for="example-radio2">
                                Option 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Checkboxes</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option1" id="example-checkbox1">
                            <label class="form-check-label" for="example-checkbox1">
                                Option 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option2" id="example-checkbox2">
                            <label class="form-check-label" for="example-checkbox2">
                                Option 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-file-input">File Input</label>
                    <input type="file" class="form-control-file" id="example-file-input">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <h1>Add Book Form</h1>
            <form>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter book title">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter book description"></textarea>
                </div>
                <div class="form-group">
                    <label for="cover_image">Cover Image</label>
                    <input type="file" class="form-control-file" id="cover_image" name="cover_image">
                </div>
                <div class="form-group">
                    <label for="softcopy_price">Softcopy Price</label>
                    <input type="number" class="form-control" id="soft_copy_price" name="soft_copy_price" placeholder="Enter softcopy price">
                </div>
                <div class="form-group">
                    <label for="hardcopy_price">Hardcopy Price</label>
                    <input type="number" class="form-control" id="hard_copy_price" name="hard_copy_price" placeholder="Enter hardcopy price">
                </div>
                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
        </main>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('../assets/js/vendor/jquery.slim.min.js')}}"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="{{asset('dashboard.js')}}"></script></body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example-table').DataTable();
    });
</script>

</html>
