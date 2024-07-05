<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form class="w-50">
                        <legend>Disabled fieldset example</legend>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Disabled input</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Disabled select menu</label>
                            <button type="button" id="showServiceBtnAdd" class="form-select" data-bs-toggle="modal" data-bs-target="#showService">
                                <span >Chọn dịch vụ</span>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="showService" tabindex="-1" aria-labelledby="showServiceModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="showServiceModalLabel">Chọn dịch vụ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="input-group mb-0">
                                                <input type="text" class="form-control" placeholder="Tìm dịch vụ" autocomplete="off">
                                                <span class="input-group-text">
                                                    <i class="far fa-search"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    var serviceModal = document.getElementById('showService')
    var showServiceModalBtn = document.getElementById('showServiceBtnAdd')

    serviceModal.addEventListener('shown.bs.modal', function () {
        // showServiceModal.focus()
    })
</script>
