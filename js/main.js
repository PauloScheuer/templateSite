const go = (elem) => {
    var div = document.querySelector(elem);
    window.scroll({
        top: div.offsetTop + div.clientHeight-30,
        left: 0,
        behavior: 'smooth'
    });
};





