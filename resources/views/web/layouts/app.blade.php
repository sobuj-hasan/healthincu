<!doctype html>
<html lang="en" dir>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home | Health Incubator</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/slick.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
</head>

    @include('web.layouts.inc.header')


    @yield('content')



    @include('web.layouts.inc.footer')

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/') }}assets/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('/') }}assets/js/slick.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Notify::message() !!}

    

    <!-----for Ajax handeling----->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-----for Ajax handeling----->


    <script>

        
        {{-- CUSTOM JS --}}
            @if (Session::has('message'))

            var type = "{{ Session::get('alert-type', 'info') }}"

            switch (type) {
                case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
                case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
                case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
                case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
            }
            @endif

            $(document).ready(function() {
                $('.summernote').summernote();
            });




        // confirmation delete
        function deleteItem() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't to Delete This!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        $('#delete-form').submit()
                        Swal.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        )
                    }
            })
        }

        var heroSwiper = new Swiper(".hero-swiper-container", {
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 3000,
            },
        });

    </script>

    <script>
        $(document).ready(function() {
            $("#heart1").click(function() {
                $("#heart1").css("color", "red");
            })
            $("#heart2").click(function() {
                $("#heart2").css("color", "red");
            })
            $("#heart3").click(function() {
                $("#heart3").css("color", "red");
            })
            $("#heart4").click(function() {
                $("#heart4").css("color", "red");
            })
            $("#heart5").click(function() {
                $("#heart5").css("color", "red");
            })
            $("#heart6").click(function() {
                $("#heart6").css("color", "red");
            })
            $("#heart7").click(function() {
                $("#heart7").css("color", "red");
            })
            $("#heart8").click(function() {
                $("#heart8").css("color", "red");
            })
            $("#heart9").click(function() {
                $("#heart9").css("color", "red");
            })
            $("#heart10").click(function() {
                $("#heart10").css("color", "red");
            })
            $("#heart11").click(function() {
                $("#heart11").css("color", "red");
            })
            $("#heart12").click(function() {
                $("#heart12").css("color", "red");
            })
        });

        // Slick Slider 
        $('.today-deal-autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            rtl: false,
            autoplay: true,
            arrows: true,
            prevArrow: "#btnslidone",
            nextArrow: "#btnslidone",
            autoplaySpeed: 2000,
            dots: false,
            arrows: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.featured-product-autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            rtl: false,
            autoplay: true,
            arrows: true,
            prevArrow: "#btnslidone",
            nextArrow: "#btnslidone",
            autoplaySpeed: 2000,
            dots: false,
            arrows: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.category-product-autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            rtl: false,
            autoplay: true,
            arrows: true,
            prevArrow: "#btnslidone",
            nextArrow: "#btnslidone",
            autoplaySpeed: 2000,
            dots: false,
            arrows: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


    </script>

    
    <script type="text/javascript">
  

        $(document).ready(function(){
            showcartcount();
            showcarttable();
            showcartsummery();
        })

        function showcartcount()
        {
            $.ajax({
                url: "{{ route('product.cart.count.ajax') }}",
                success: function(data) {
                    $('.cart_count').html(data);
                }
            })
        }


        function showcarttable()
        {
            
            $.ajax({
                url: "{{ route('product.cartable.ajax') }}",
                success: function(data) {
                   
                    $('#carttable').html(data);
                    showcartcount();
                },
                error: function(data) {
                    
                    console.log('Error:', data);
                }
            })
        }


        function showcartsummery()
        {
            $.ajax({
                url: "{{ route('product.cartsummery.ajax') }}",
                success: function(data) {
                    $('#cartsummery').html(data);
                }
            })
        }


        // increment cart

        function updateCartQty(id) {
        
            var cart_value = $('.incrementCart-'+id).val()
            var rowId = id;
        
            const url = "{{route('product.incrementCart')}}"
            $.ajax({
                type: "post",
                url: url,
                data: {
                    rowId,cart_value
                },
                success: function(data){
                    console.log(data)
                    showcarttable();
                    showcartsummery();

                    ticketshowcartsummery();
                    ticketshowcarttable();

                },
                error: function(data) {
                
                    console.log('Error:', data);
                }
            });
        }





        // $(document).on('change','.incrementCart',function(){
        
        //     var x = $(".incrementCart").val();
            
        //     alert(x);

        //    var rowId = $(this).data('id')
           
        //    const url = "{{route('product.incrementCart')}}"
        //    $.ajax({
        //         type: "post",
        //         url: url,
        //         data: {
        //             rowId
        //         },
        //         success: function(data){
        //             console.log(data)
        //             showcarttable();
        //             showcartsummery();

        //             ticketshowcartsummery();
        //             ticketshowcarttable();

        //         },
        //         error: function(data) {
        //             console.log('Error:', data);
        //         }
        //     });
        // })

        // decrement cart
        $(document).on('click',".decrementCart",function(){
            var rowId = $(this).data('id')
           const url = "{{route('product.decrementCart')}}"
           $.ajax({
                type: "post",
                url: url,
                data: {
                    rowId
                },
                success: function(data){
                    console.log(data)
                    showcarttable();
                    showcartsummery();

                    ticketshowcartsummery();
                    ticketshowcarttable();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        })

        // remove cart
        $(document).on('click','.removecart',function(){
            const rowId = $(this).data("id")
            const url = "{{route('product.remove_cart')}}"
            $.ajax({
                type: "post",
                url: url,
                data: {
                    rowId
                },
                success: function(data){
                    console.log(data)
                    showcarttable();
                    showcartsummery();

                    ticketshowcartsummery();
                    ticketshowcarttable();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        })


        $(document).on('click', '.product_id', function(e) {
            e.preventDefault();


            var product_id = $(this).data('id');

            var url = "{{ route('product.add_to_cart') }}";

            $.ajax({
                type: "post",
                url: url,
                data: {
                    product_id: product_id
                },
                success: function(data){
                    showcartcount();
                  if ($.isEmptyObject(data.error)) {
                        toastr.success(data.success, 'Product Successfully Add to Cart', {
                            timeOut: 3000
                        });
                    } else {
                        toastr.error(data.error, {
                            timeOut: 3000
                        });
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });


        $(document).ready(function() {

            $('#add_to_cart').on('click', function(e) {
                 e.preventDefault();

                var qty = $('#product_count').val();
                var product_id = $(this).data('id');
                var url = "{{ route('product.single.cart') }}";
                $.ajax({
                    url: url,
                    data: {
                        product_id: product_id,
                        qty: qty
                    },
                    type: "post",
                    success: function(data){
                         showcartcount();
                      if ($.isEmptyObject(data.error)) {
                            toastr.success(data.success, 'Product Successfully Add to Cart', {
                                timeOut: 3000
                            });
                        } else {
                            toastr.error(data.error, {
                                timeOut: 3000
                            });
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    },
                });
            });
        });
    </script>
    


    @stack('js')

</body>

</html>
