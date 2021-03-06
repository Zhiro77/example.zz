
$('.pagination .page').click(function(e) {
    //e.preventDefault();
    let page = $(this).attr("data-offset");
    $(".page-link").attr("href", '/home/index/?page='+ page);
});

$('li.next-page').click(function(e) {
    //e.preventDefault();
    const last_page = $(this).prev().text();
    console.log( last_page );
    $(".page-link").attr("href", '/home/index/?page='+ (+last_page + 1));

});

$('li.prev-page').click(function(e) {
    //e.preventDefault();
    const last_page = $(this).next().text();
    console.log( last_page );
    $(".page-link").attr("href", '/home/index/?page='+ (+last_page - 1));
});