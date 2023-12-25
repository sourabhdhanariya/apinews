<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
<link rel="stylesheet" href="/resources/css/style.css">

    </head>
<body>
    <div class="container">
       <div class="row mb-5 bg-dark">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId">
            <li class="nav-item">
                <a name="" id="" class="btn btn-primary" href="#" role="button">Home</a>
            </li>
            <li class="nav-item">
               <a name="" id="" class="btn btn-primary" href="#" role="button">Disabled</a>
            </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
        </div>
        
        <script>
            $('#navId a').click(e => {
                e.preventDefault();
                $(this).tab('show');
            });
        </script>
       </div>
                <div class="row">
        
                    @foreach ($news as $index => $value)
                        <div class="col-md-4 mb-3 ">
                            <div class="card shadow text-left">
                                <div class="image-box">
                                <img class="card-img-top" src="{{ $value['urlToImage'] }}" alt="" height="200px" width="500px">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">{{ $value['title'] }}</h4>
                                    <p class="card-text">{{ Str::words($value['description'], 10, '....') }}</p>
                                    <a href="{{ $value['url'] }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
             
         </div>
    </div>
</body>
</html>