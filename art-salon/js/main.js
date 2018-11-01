
$('.nav-opener').click(function(){
    var isActive = $('body').hasClass('nav-active');
    $('body').addClass('nav-active');
    if (isActive) {
        $('body').removeClass('nav-active');
    }
    else {
        $('body').addClass('nav-active');
    }
});
window.onload=function(){
    var menuElem = document.getElementById('dropdown-menu'),
    titleElem = menuElem.querySelector('.title');
    document.onclick = function(event) {
        var target = elem = event.target;
        while (target != this) {
            if (target == menuElem) {
                if(elem.tagName == 'A') titleElem.innerHTML = elem.textContent;
                088
                menuElem.classList.toggle('open')
                return;
            }
            target = target.parentNode;
        }
        menuElem.classList.remove('open');
    }
}

$('.user').click(function(){
    $('.popup-overlay').css('display' , 'block')
});
$('.close').click(function(){
    $('.popup-overlay').css('display' , 'none')
});


function showError(container, errorMessage) {
    container.className = 'error';
    var msgElem = document.createElement('span');
    msgElem.className = "error-message";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
}

function resetError(container) {
    container.className = '';
    if (container.lastChild.className == "error-message") {
        container.removeChild(container.lastChild);
    }
}

function validate(form) {
    var elems = form.elements;

    resetError(elems.from.parentNode);
    if (!elems.from.value) {
        showError(elems.from.parentNode, ' Укажите от кого.');
    }

    resetError(elems.email.parentNode);
    if (!elems.email.value) {
        showError(elems.email.parentNode, ' Укажите, куда.');
    }
    resetError(elems.phone.parentNode);
    if (!elems.phone.value) {
        showError(elems.phone.parentNode, ' Укажите, куда.');
    }

    resetError(elems.message.parentNode);
    if (!elems.message.value) {
        showError(elems.message.parentNode, ' Отсутствует текст.');
    }

}