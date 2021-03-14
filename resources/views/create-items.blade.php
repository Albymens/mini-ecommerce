<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container register">
<form method="POST" action="/items">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning through our e-commerce website </p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create Items</h3>
                                
                                @csrf
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Title *" name="title" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Price *" name="price" />
                                            </div>
                                            <div class="form-group">
                                                <textarea name="description" id="" cols="20" rows="5" class="form-control" placeholder="description of item*" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="category *" name="category" />
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Submit Item"/>
                            
                                        </div>
                                    </div>
                                </form>
                             </div>
                    </div>
</body>
</html>