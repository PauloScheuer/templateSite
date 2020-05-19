<?php

function CreateCarousel($id, $images, $width, $height) {
    $size = count($images);
    echo "
    <style>
        .carousel{
            width:$width;
            height:$height;
            position:relative;
            margin:0 auto;
        }
        .".$id."{
            position:absolute;
            top:0;
            bottom:0;
            left:0;
            right:0;
            opacity:0;
            transition: all 0.5s ease-in-out;
        }
        .arrow{
            height: 100%;
            width: 100px;
            background-color: rgba(0,0,0,0.5);
            outline: none;
            display: flex;
            justify-content: center;
            -webkit-tap-highlight-color: transparent;
        }

        .arrow-before{
            float: left;
        }

        .arrow-after{
            float: right;
         }

        .light{
             color:white;
        }
        [id^='$id'] {
            display: none;
          }

        ." . $id . "1 {
            z-index: 2;
            opacity: 1;
            background:url('".$images[0]."');
            background-size:cover;
          }
        *:target ~ ." . $id . "1 {
            opacity: 0;
          }
        #" . $id . "1:target ~ ." . $id . "1 {
            opacity: 1;
          }
          ";
            $i = 2;
            while ($i <= $size) {
                echo " 
        ." . $id . "$i{
            background:url('".$images[$i - 1]."');
            background-size:cover;
        }
        #" . $id . "$i:target ~ ." . $id . "$i{
            z-index: 2;
            opacity: 1;
          }";
                $i++;
            }
            echo "</style>"
            . "<div class='carousel'>";
            $span = 1;
            while ($span <= $size) {
                echo "<span id='" . $id . "$span'></span>";
                $span++;
            }
            $div = 1;
            while ($div <= $size) {
                if ($div === 1) {
                    $before = $size;
                    $after = $div + 1;
                } elseif ($div === $size) {
                    $before = $div - 1;
                    $after = 1;
                } else {
                    $before = $div - 1;
                    $after = $div + 1;
                }
                echo " 
                <div class='" . $id . " " . $id . "$div'>
            <a class='arrow arrow-before' href='#" . $id . "$before'><img src='carouselGenerator/arrow-left.svg' /></a>
            <a class='arrow arrow-after' href='#" . $id . "$after'><img src='carouselGenerator/arrow-right.svg' /></a>
          </div> ";
                $div++;
            }
            echo "</div>
        ";
        }
