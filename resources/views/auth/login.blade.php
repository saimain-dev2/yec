@include('backend.layout.head')

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">


        <div class="app-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Login to User</h5>
                                <form class="" action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Email</label>
                                        <input name="email" id="exampleEmail" placeholder="with a placeholder"
                                            type="email" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">Password</label>
                                        <input name="password" id="examplePassword" placeholder="password placeholder"
                                            type="password" class="form-control">
                                    </div>
                                    <button class="mt-1 btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>
    <script type="text/javascript" src="{{asset('backend/assets/scripts/main.js')}}"></script>
</body>

</html>