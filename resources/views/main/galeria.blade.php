@extends('layouts.app')
@section('content')
    {!! Html::style('css/galeria.css') !!}

    <div class="panel panel-heading container text-center">
        <h3>Disfruta de nuestra galería de fotos y vídeos del acontecer de nuestra institución.</h3>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria1.jpg"  id="myImg" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria2.jpg"  id="myImg2" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria3.jpg"  id="myImg3" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria4.jpg"  id="myImg4" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria5.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria6.jpg"  id="myImg6" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria7.jpg"  id="myImg7" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria8.jpg"  id="myImg8" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria9.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria10.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria11.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria12.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria13.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria14.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria15.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria16.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria17.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria18.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria1">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal2" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria2">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal3" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria3">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal4" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria4">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');
        var modal2 = document.getElementById('myModal2');
        var modal3 = document.getElementById('myModal3');
        var modal4 = document.getElementById('myModal4');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("galeria1");
        var img2 = document.getElementById('myImg2');
        var modalImg2 = document.getElementById("galeria2");
        var img3 = document.getElementById('myImg3');
        var modalImg3 = document.getElementById("galeria3");
        var img4 = document.getElementById('myImg4');
        var modalImg4 = document.getElementById("galeria4");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img2.onclick = function(){
            modal2.style.display = "block";
            modalImg2.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img3.onclick = function(){
            modal3.style.display = "block";
            modalImg3.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img4.onclick = function(){
            modal4.style.display = "block";
            modalImg4.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
@stop