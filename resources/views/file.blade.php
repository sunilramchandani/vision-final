<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap-multiselect.css" type="text/css"/>
    
    <style>
/* override position and transform in 3.3.x */
.carousel-inner .item.left.active {
  transform: translateX(-25%);
}
.carousel-inner .item.right.active {
  transform: translateX(25%);
}

.carousel-inner .item.next {
  transform: translateX(25%)
}
.carousel-inner .item.prev {
  transform: translateX(-25%)
}

.carousel-inner .item.right,
.carousel-inner .item.left { 
  transform: translateX(0);
}


.carousel-control.left,.carousel-control.right {background-image:none;}

</style>

</head> 
<body>

<div class="col-xs-12">
  <div class="carousel slide2" id="myCarousel">
    <div class="carousel-inner">
        @foreach($management as $about)
        @if ($loop->index == 1)
        <div class="item active">
        @else  
        <div class="item">
        @endif
        <div class="col-xs-3"><a href="#"><img src="{{ URL::asset('image/uploaded_aboutus_image')}}/{{$about->about_image}}" class="img img-responsive employee" alt="Company Banner"/></a></div>
      </div>
      @endforeach
      </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
  </div>
</div>


</body>
<script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script type="text/javascript">
$('#myCarousel').carousel({
  interval: false
})

$('.slide2 .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>


</html>
