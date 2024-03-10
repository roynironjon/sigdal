// popup login page js code
function toggleForm() {
    var popup = document.getElementById('popuploginForm');
    popup.style.display = (popup.style.display === 'none' || popup.style.display === '') ? 'flex' : 'none';
}

// banner video js code
function on() {
    document.getElementById("overlay").style.display = "block";
}
function off() {
    document.getElementById("overlay").style.display = "none";
}

// scrollto top butto function js code
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' 
    });
}

// menu bar js code
$(function(){
    $('#menu').slicknav();
});

// product slider section start
$('.owl-carousel').owlCarousel({
    dots: true,
    loop:true,
    margin:10,
    nav:true,
    slidesToShow: 1,
    adaptiveHeight: true,
    infinite: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

// popup card section start
document.getElementById('openBtn').addEventListener('click', function() {
    document.getElementById('productList').style.display = 'block';
});

document.getElementById('closeBtn').addEventListener('click', function() {
    document.getElementById('productList').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('productList')) {
        document.getElementById('productList').style.display = 'none';
    }
});
// popup card section end