<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <style>
        .bglight{
            background-color: red;
        }
        .navbar-light .navbar-brand {
            color: #f8f9fa;
        }
        .text-color{
            color: white;
        }
        /** Login **/
        .custom-login{
            height: 750px;
            padding-top: 100px;
        }
        /** Slider Section **/
        img.slider-img{
            height: 400px !important
            
        }
        .custom-product{
            height: 500px;
        }
        .box{
            height: 700px;
        }
        .slider-text{
            background-color: #35443585 !important
        }
         /* Trending site  */

        .trending-image{
            height:100px;
        }
        .trending-item{
            float:left;
            width:25%;
        }
        .trending-wrapper{
            margin: 30px;
        }
        .trending-fond{
            margin-bottom: 60px;
            border-bottom: 1px dotted #ccc;
            border-top: 1px dotted #ccc;
            padding: 10px;
        }
        .item-trending{
            padding-bottom: 50px;
        }
        .item-trending-child{
            padding-left: 30px;
        }
        /* Detail Page  */

        .detail-img{
            height: 150px;
        }
        .details-product{
            padding-top: 100px;
        }
        /* search section */
        .search-box{
            width: 500px !important
        }
        /* Login/Logout option */
        .log-option{
            margin-left:15px;
            margin-right: 15px;
        }
        a.log-option{
            color: white;
        }
        /* Cart List */
        .trending-image-table{
            height: 80px;
            width: 60px;
        }
        .cart-list-devider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        .cart-list-header{
            margin-bottom: 20px;
            border-bottom: 1px dotted #ccc;
            border-top: 1px dotted #ccc;
            padding: 10px;
        }
        .cart-list-header h2{
            font-size: 40px;
            color: red;
        }
        .shopping{
            width: 100%;
            text-align: center;
        }
        /* order list */
        .cart-list-header{
            margin-bottom: 20px;
            border-bottom: 1px dotted #ccc;
            border-top: 1px dotted #ccc;
            padding: 10px;
            width: 100%;
            text-align: center;
        }
        /* Footer Section */
        .footer {
            position: fixed;
            left: 0;
            bottom: 0px;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>