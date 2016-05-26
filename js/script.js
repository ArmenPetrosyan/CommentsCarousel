/**
 * Created by Petrosyan on 27.05.2016.
 */
$(document).ready(function(){
    $.ajax({
        url : 'core/restAPI.php',
        data: {
            comments : 1
        },
        success : function(data){
            $carouselBlock = $(".answers-carousel");

            if($carouselBlock.length > 0) {
                data = JSON.parse(data);

                for (i=0; i < data.length; i++){
                    var content =
                        '<div class="answers-carousel-item">' +
                            '<div class="rating-block"> Рейтинг | '+
                                data[i].rating +
                            '</div>'+
                            '<p class="answer">'+
                                data[i].answered +
                            '</p>'+
                        '</div>';

                    $carouselBlock.append(content);
                }

                $carouselBlock.owlCarousel({
                    items : 1,
                    loop : true,
                    nav : true,
                    dots: false
                });
            }
        }
    });
});